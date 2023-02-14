<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign forecast.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.KeywordPlanCampaignForecast</code>
 */
class KeywordPlanCampaignForecast extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 3;</code>
     */
    protected $keyword_plan_campaign = null;
    /**
     * The forecast for the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ForecastMetrics campaign_forecast = 2;</code>
     */
    protected $campaign_forecast = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_plan_campaign
     *           The resource name of the Keyword Plan campaign related to the forecast.
     *           `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *     @type \Google\Ads\GoogleAds\V9\Services\ForecastMetrics $campaign_forecast
     *           The forecast for the Keyword Plan campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 3;</code>
     * @return string
     */
    public function getKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign) ? $this->keyword_plan_campaign : '';
    }

    public function hasKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign);
    }

    public function clearKeywordPlanCampaign()
    {
        unset($this->keyword_plan_campaign);
    }

    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *
     * Generated from protobuf field <code>optional string keyword_plan_campaign = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * The forecast for the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ForecastMetrics campaign_forecast = 2;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ForecastMetrics|null
     */
    public function getCampaignForecast()
    {
        return $this->campaign_forecast;
    }

    public function hasCampaignForecast()
    {
        return isset($this->campaign_forecast);
    }

    public function clearCampaignForecast()
    {
        unset($this->campaign_forecast);
    }

    /**
     * The forecast for the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ForecastMetrics campaign_forecast = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ForecastMetrics $var
     * @return $this
     */
    public function setCampaignForecast($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ForecastMetrics::class);
        $this->campaign_forecast = $var;

        return $this;
    }

}

