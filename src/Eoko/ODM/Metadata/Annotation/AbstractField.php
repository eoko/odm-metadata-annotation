<?php

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Eoko\ODM\DocumentManager\Metadata\FieldInterface;

abstract class AbstractField extends Annotation implements FieldInterface
{
    public $name;
    public $type = 'string';
    public $nullable = false;
    public $options = [];

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


}
