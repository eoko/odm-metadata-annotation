<?php

namespace Eoko\ODM\Metadata\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class StringField extends AbstractField
{
    public $type = 'string';
}
