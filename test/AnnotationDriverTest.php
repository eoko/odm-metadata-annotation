<?php

namespace Eoko\ODM\Test;

use Eoko\ODM\Metadata\Annotation\AnnotationDriver;
use Eoko\ODM\Metadata\Annotation\AnnotationFactory;
use Eoko\ODM\Metadata\Annotation\Test\Entity\UserEntity;
use Mockery;
use PHPUnit_Framework_TestCase;

class AnnotationDriverTest extends PHPUnit_Framework_TestCase
{

    /**
     * @return AnnotationDriver
     */
    private function getDriver()
    {
        $config = include(__DIR__ . '/../config/module.config.php');
        $factory = new AnnotationFactory();
        $serviceLocator = Mockery::mock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->shouldReceive('get')->andReturn($config);
        return $factory->createService($serviceLocator);
    }

    /**
     * @todo improve
     */
    public function testClassMetadata()
    {
        $metadatas = $this->getDriver()->getClassMetadata(UserEntity::class);
        $this->assertInternalType('array', $metadatas);
        $this->assertInstanceOf('Eoko\ODM\DocumentManager\Metadata\DocumentInterface', $metadatas['Eoko\ODM\Metadata\Annotation\Document']);
        $this->assertInstanceOf('Eoko\ODM\DocumentManager\Metadata\IdentifierInterface', $metadatas['Eoko\ODM\Metadata\Annotation\KeySchema']);
    }

    /**
     * @todo improve
     */
    public function testFieldsMetadata()
    {
        $metadata = $this->getDriver()->getFieldsMetadata(UserEntity::class);
        $this->assertInternalType('array', $metadata);
    }

    /**
     * @todo improve
     */
//    public function testFieldsMetadataCache()
//    {
//        $driver = $this->getDriver();
//        $metadata = $driver->getFieldsMetadata(UserEntity::class);
//
//        $rp = new ReflectionProperty($driver, 'cache');
//        $rp->setAccessible(true);
//        $cache = $rp->getValue($driver);
//        $metadata2 = $cache->getItem('eoko.cache.odm.' . UserEntity::class);
//
//        $this->assertTrue($metadata === $metadata2);
//    }
}
