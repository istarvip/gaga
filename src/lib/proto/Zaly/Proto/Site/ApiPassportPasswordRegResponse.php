<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_passport_password_reg.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiPassportPasswordRegResponse</code>
 */
class ApiPassportPasswordRegResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     */
    private $preSessionId = '';

    public function __construct() {
        \GPBMetadata\Site\ApiPassportPasswordReg::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @return string
     */
    public function getPreSessionId()
    {
        return $this->preSessionId;
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->preSessionId = $var;

        return $this;
    }

}
