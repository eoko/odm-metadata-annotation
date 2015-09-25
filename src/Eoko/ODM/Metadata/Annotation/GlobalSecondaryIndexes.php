<?php

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target({"CLASS"})
 *
 */
class GlobalSecondaryIndexes extends Annotation
{

    public $indexes;
}
