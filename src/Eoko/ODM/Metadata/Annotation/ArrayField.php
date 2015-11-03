<?php

namespace Eoko\ODM\Metadata\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class ArrayField extends AbstractField
{
    public $type = 'array';
}
