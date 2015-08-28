<?php

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Eoko\ODM\DocumentManager\Metadata\DocumentInterface;

/**
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes({
 *   @Attribute("table", type = "string"),
 *   @Attribute("provision", type = "array<int>"),
 *   @Attribute("attributes", type = "array<string>"),
 * })
 */
class Document extends Annotation implements DocumentInterface
{
    protected $table = 'default';
    protected $attributes = [];
    protected $provision = ['ReadCapacityUnits' => 1, 'WriteCapacityUnits' => 1];

    /**
     * @param mixed $provision
     */
    protected function setProvision(array $provision)
    {
        if (isset($provision['ReadCapacityUnits'])) {
            $this->provision['ReadCapacityUnits'] = $provision['ReadCapacityUnits'];
        }
        if (isset($provision['WriteCapacityUnits'])) {
            $this->provision['WriteCapacityUnits'] = $provision['WriteCapacityUnits'];
        }
    }

    /**
     * @param array $attributes
     */
    protected function setAttributes($attributes)
    {
        foreach ($attributes as $attribute) {
            $this->attributes[] = $attribute;
        }
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @return array
     */
    protected function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return array
     */
    protected function getProvision()
    {
        return $this->provision;
    }
}
