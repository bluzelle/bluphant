<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: database.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>database_create</code>
 */
class database_create extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    private $key = '';
    /**
     * Generated from protobuf field <code>bytes value = 3;</code>
     */
    private $value = '';

    public function __construct() {
        \GPBMetadata\Database::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes value = 3;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}

