<?php

namespace Eoko\ODM\Metadata\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class Boolean extends AbstractField
{
    public $type = 'boolean';
}
