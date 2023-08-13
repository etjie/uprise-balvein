<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/merchant_center_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\MerchantCenterErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing Merchant Center errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.MerchantCenterErrorEnum.MerchantCenterError</code>
 */
class MerchantCenterError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Merchant ID is either not found or not linked to the Google Ads customer.
     *
     * Generated from protobuf enum <code>MERCHANT_ID_CANNOT_BE_ACCESSED = 2;</code>
     */
    const MERCHANT_ID_CANNOT_BE_ACCESSED = 2;
    /**
     * Customer not allowlisted for Shopping in Performance Max Campaign.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX = 3;</code>
     */
    const CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MERCHANT_ID_CANNOT_BE_ACCESSED => 'MERCHANT_ID_CANNOT_BE_ACCESSED',
        self::CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX => 'CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MerchantCenterError::class, \Google\Ads\GoogleAds\V13\Errors\MerchantCenterErrorEnum_MerchantCenterError::class);

