<?php

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Eoko\ODM\DocumentManager\Metadata\IdentifierInterface;

/**
 * @Annotation
 * @Target({"CLASS"})
 *
 */
class GlobalSecondaryIndexes extends Annotation
{

    public $indexes;

}
