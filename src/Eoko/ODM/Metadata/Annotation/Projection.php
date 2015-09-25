<?php
/**
 * Created by PhpStorm.
 * User: merlin
 * Date: 08/09/15
 * Time: 23:12
 */

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target("ANNOTATION")
 */
final class Projection extends Annotation
{
    /**
     * @var string
     */
    public $projectionType;
}
