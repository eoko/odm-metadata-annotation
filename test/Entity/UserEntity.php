<?php

namespace Eoko\ODM\Metadata\Annotation\Test\Entity;

use Eoko\ODM\Metadata\Annotation\Document;
use Eoko\ODM\Metadata\Annotation\Index;
use Eoko\ODM\Metadata\Annotation\StringField;
use Eoko\ODM\Metadata\Annotation\DateTime;
use Eoko\ODM\Metadata\Annotation\KeySchema;
use Eoko\ODM\Metadata\Annotation\Boolean;

/**
 * @Document(table="oauth_users", provision={"ReadCapacityUnits" : 1, "WriteCapacityUnits" : 1})
 * @KeySchema(keys={"username" : "HASH"})
 * @Index(name="username_email-verified_index", fields={"username" : "hash", "email_verified" : "range"})
 * @Index(name="username_index", fields={"username"})
 */
class UserEntity
{

    /**
     * @StringField
     */
    protected $username;

    /**
     * @DateTime
     */
    protected $created_at;

    /**
     * @StringField
     */
    protected $email;

    /**
     * @Boolean
     */
    protected $email_verified = false;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmailVerified()
    {
        return $this->email_verified;
    }

    /**
     * @param mixed $email_verified
     */
    public function setEmailVerified($email_verified)
    {
        $this->email_verified = $email_verified;
    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
}
