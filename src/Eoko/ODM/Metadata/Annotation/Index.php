<?php

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Eoko\ODM\DocumentManager\Metadata\IdentifierInterface;
use Eoko\ODM\DocumentManager\Metadata\IndexInterface;

/**
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes({
 *   @Attribute("name", type = "string"),
 *   @Attribute("fields", type = "array<string>"),
 * })
 */
class Index extends Annotation implements IndexInterface
{
    public $name;

    public $fields;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Must return array with fields
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

}
