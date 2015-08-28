<?php

namespace Eoko\ODM\Metadata\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Eoko\ODM\DocumentManager\Metadata\IdentifierInterface;

/**
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes({
 *   @Attribute("keys", type = "array<string>"),
 * })
 */
class KeySchema extends Annotation implements IdentifierInterface
{

    protected $keys = [];

    public function getIdentifier()
    {
        return $this->keys;
    }
}
