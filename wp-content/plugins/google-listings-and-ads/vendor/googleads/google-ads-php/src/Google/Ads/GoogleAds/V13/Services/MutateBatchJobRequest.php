<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/batch_job_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [BatchJobService.MutateBatchJob][google.ads.googleads.v13.services.BatchJobService.MutateBatchJob].
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.MutateBatchJobRequest</code>
 */
class MutateBatchJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer for which to create a batch job.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The operation to perform on an individual batch job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.BatchJobOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer for which to create a batch job.
     *     @type \Google\Ads\GoogleAds\V13\Services\BatchJobOperation $operation
     *           Required. The operation to perform on an individual batch job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\BatchJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer for which to create a batch job.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer for which to create a batch job.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The operation to perform on an individual batch job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.BatchJobOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V13\Services\BatchJobOperation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Required. The operation to perform on an individual batch job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.BatchJobOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V13\Services\BatchJobOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Services\BatchJobOperation::class);
        $this->operation = $var;

        return $this;
    }

}

