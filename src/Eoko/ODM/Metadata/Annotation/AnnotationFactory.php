<?php
/**
 * Created by PhpStorm.
 * User: merlin
 * Date: 28/08/15
 * Time: 18:48
 */

namespace Eoko\ODM\Metadata\Annotation;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AnnotationFactory implements FactoryInterface {
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config') ;
        $options = $config['eoko']['odm']['metadata']['options'];
        return new AnnotationDriver($options);
    }


}