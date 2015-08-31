<?php

namespace Eoko\ODM\Metadata\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class _String extends AbstractField
{
    public $type = 'string';
}
