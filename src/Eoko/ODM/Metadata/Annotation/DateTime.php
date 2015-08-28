<?php

namespace Eoko\ODM\Metadata\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class DateTime extends AbstractField
{
    public $type = 'string';
}
