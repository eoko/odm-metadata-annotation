<?php

namespace Eoko\ODM\Metadata\Annotation;

use Eoko\ODM\DocumentManager\Metadata\DriverInterface;
use ReflectionClass;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;


class AnnotationDriver implements DriverInterface
{
    /** @var  AnnotationReader */
    protected $reader;

    public function __construct($options = [])
    {
        $this->reader = new AnnotationReader();

        $autoload = (isset($options['autoload']) && is_array($options['autoload']) ? $options['autoload'] : [];
        AnnotationRegistry::registerAutoloadNamespaces($autoload);
    }

    /**
     * @param string $classname
     * @return array
     */
    public function getFieldsMetadata($classname)
    {
        foreach ($this->getReflectionClass($classname)->getProperties() as $property) {
            $properties = array_reduce($this->reader->getPropertyAnnotations($property), function ($reduced, $current) use ($property, $classname) {

                if ($current instanceof AbstractField) {
                    $current->name = $property->getName();
                    if (is_object($classname)) {
                        $property->setAccessible(true);
                        $current->value = $property->getValue($classname);
                    }
                }

                $key = get_class($current);
                if (isset($reduced[$key])) {
                    if (!is_array($reduced[$key])) {
                        $reduced[$key] = [$reduced[$key]];
                    }
                    $reduced[$key][] = $current;
                } else {
                    $reduced[$key] = $current;
                }
                return $reduced;
            });
            $fields[$property->getName()] = $properties;
        }

        return $fields;
    }

    /**
     * @param string $classname
     * @return array
     */
    public function getClassMetadata($classname)
    {
        $classMetadata = [];
        $reflexionClass = $this->getReflectionClass($classname);
        $classAnnotations = $this->reader->getClassAnnotations($reflexionClass);


        foreach ($classAnnotations as $classAnnotation) {
            if (!isset($classMetadata[get_class($classAnnotation)])) {
                $classMetadata[get_class($classAnnotation)] =  [];
            }
            $classMetadata[get_class($classAnnotation)][] = $classAnnotation;
        }


        if ($this->reader->getClassAnnotation($reflexionClass, ParentClass::class)) {
            $classMetadata = array_merge_recursive($this->getClassMetadata(get_parent_class($classname)), $classMetadata);
        }

        return $classMetadata;
    }

    private function getReflectionClass($entity)
    {
        return new ReflectionClass($entity);
    }
}
