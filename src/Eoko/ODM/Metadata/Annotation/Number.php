<?php

namespace Eoko\ODM\Metadata\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class Number extends AbstractField
{
    public $type = 'number';
}
