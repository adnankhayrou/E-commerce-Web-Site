<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An AdGroup/Campaign pair that could not be used as a suggestion for keywords.
 * AdGroups may not be usable if the AdGroup
 * * belongs to a Campaign that is not ENABLED or PAUSED
 * * is itself not ENABLED
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.UnusableAdGroup</code>
 */
class UnusableAdGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The AdGroup resource name.
     * Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>string ad_group = 1;</code>
     */
    protected $ad_group = '';
    /**
     * The Campaign resource name.
     * Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string campaign = 2;</code>
     */
    protected $campaign = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ad_group
     *           The AdGroup resource name.
     *           Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *     @type string $campaign
     *           The Campaign resource name.
     *           Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The AdGroup resource name.
     * Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>string ad_group = 1;</code>
     * @return string
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * The AdGroup resource name.
     * Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>string ad_group = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * The Campaign resource name.
     * Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string campaign = 2;</code>
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The Campaign resource name.
     * Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string campaign = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

}

