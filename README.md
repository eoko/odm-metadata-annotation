dynamodb-odm
============

[![Build Status](https://travis-ci.org/eoko/odm-metadata-annotation.svg?branch=master)](https://travis-ci.org/eoko/odm-metadata-annotation)
[![Code Climate](https://codeclimate.com/github/eoko/dynamodb-odm/badges/gpa.svg)](https://codeclimate.com/github/eoko/dynamodb-odm)
[![Eoko Public Channel](http://slackin.eoko.fr/badge.svg)](http://slackin.eoko.fr/)

Overview
--------

DynamoDB ODM is a simple document manager a little inspired by Doctrine ORM/ODM. This document manager is mainly design
to manage interaction between entities and DynamoDB. It can handle other document server with a the creation of a new driver.

Comments
--------

This ODM cannot and will not manage association.

Requirements
------------
  
Please see the [composer.json](composer.json) file.

Installation
------------

Run the following `composer` command:

```console
$ composer require "eoko/dynamodb-odm"
```

Alternately, manually add the following to your `composer.json`, in the `require` section:

```javascript
"require": {
    "eoko/dynamodb-odm": "master-dev"
}
```

And then run `composer update` to ensure the module is installed.

Get Started
-----------

@todo

Annotation
----------

## Index

    @Index(name="username_email-verified_index", fields={"username", "email_verified"})

Events
------

@todo


Credits
-------

@todo
