<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: audit.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>leader_status</code>
 */
class leader_status extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 term = 1;</code>
     */
    private $term = 0;
    /**
     * Generated from protobuf field <code>string leader = 2;</code>
     */
    private $leader = '';
    /**
     * Generated from protobuf field <code>uint64 current_log_index = 3;</code>
     */
    private $current_log_index = 0;
    /**
     * Generated from protobuf field <code>uint64 current_commit_index = 4;</code>
     */
    private $current_commit_index = 0;

    public function __construct() {
        \GPBMetadata\Audit::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 term = 1;</code>
     * @return int|string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Generated from protobuf field <code>uint64 term = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTerm($var)
    {
        GPBUtil::checkUint64($var);
        $this->term = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string leader = 2;</code>
     * @return string
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * Generated from protobuf field <code>string leader = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->leader = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 current_log_index = 3;</code>
     * @return int|string
     */
    public function getCurrentLogIndex()
    {
        return $this->current_log_index;
    }

    /**
     * Generated from protobuf field <code>uint64 current_log_index = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrentLogIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->current_log_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 current_commit_index = 4;</code>
     * @return int|string
     */
    public function getCurrentCommitIndex()
    {
        return $this->current_commit_index;
    }

    /**
     * Generated from protobuf field <code>uint64 current_commit_index = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrentCommitIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->current_commit_index = $var;

        return $this;
    }

}

