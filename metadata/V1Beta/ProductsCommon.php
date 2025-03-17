<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/products_common.proto

namespace GPBMetadata\Google\Shopping\Merchant\Products\V1Beta;

class ProductsCommon
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�K
>google/shopping/merchant/products/v1beta/products_common.proto(google.shopping.merchant.products.v1betagoogle/protobuf/timestamp.proto google/shopping/type/types.protogoogle/type/interval.proto"�(

Attributes
identifier_exists (H �
	is_bundle (H�
title (	H�
description (	H�
link (	H�
mobile_link	 (	H�
canonical_link
 (	H�

image_link (	H�
additional_image_links (	3
expiration_date (2.google.protobuf.Timestamp3
disclosure_dateO (2.google.protobuf.Timestamp
adult (H�
	age_group (	H	�
availability (	H
�5
availability_date (2.google.protobuf.Timestamp
brand (	H�
color (	H�
	condition (	H�
gender (	H�$
google_product_category (	H�
gtin (	
item_group_id (	H�
material (	H�
mpn (	H�
pattern (	H�*
price (2.google.shopping.type.PriceJ
installment  (25.google.shopping.merchant.products.v1beta.InstallmentU
subscription_cost! (2:.google.shopping.merchant.products.v1beta.SubscriptionCostO
loyalty_points" (27.google.shopping.merchant.products.v1beta.LoyaltyPointsS
loyalty_programs� (28.google.shopping.merchant.products.v1beta.LoyaltyProgram
product_types# (	/

sale_price$ (2.google.shopping.type.Price8
sale_price_effective_date% (2.google.type.Interval$
sell_on_google_quantity& (H�R
product_heightw (2:.google.shopping.merchant.products.v1beta.ProductDimensionR
product_lengthx (2:.google.shopping.merchant.products.v1beta.ProductDimensionQ
product_widthy (2:.google.shopping.merchant.products.v1beta.ProductDimensionO
product_weightz (27.google.shopping.merchant.products.v1beta.ProductWeightD
shipping\' (22.google.shopping.merchant.products.v1beta.Shippinga
free_shipping_threshold� (2?.google.shopping.merchant.products.v1beta.FreeShippingThresholdQ
shipping_weight( (28.google.shopping.merchant.products.v1beta.ShippingWeightT
shipping_length) (2;.google.shopping.merchant.products.v1beta.ShippingDimensionS
shipping_width* (2;.google.shopping.merchant.products.v1beta.ShippingDimensionT
shipping_height+ (2;.google.shopping.merchant.products.v1beta.ShippingDimension
max_handling_time, (H�
min_handling_time- (H�
shipping_label. (	H�
transit_time_label/ (	H�
size0 (	H�
size_system1 (	H�

size_types2 (	<
taxes3 (2-.google.shopping.merchant.products.v1beta.Tax
tax_category4 (	H�$
energy_efficiency_class5 (	H�(
min_energy_efficiency_class6 (	H�(
max_energy_efficiency_class7 (	H�Z
unit_pricing_measure8 (2<.google.shopping.merchant.products.v1beta.UnitPricingMeasurec
unit_pricing_base_measure9 (2@.google.shopping.merchant.products.v1beta.UnitPricingBaseMeasure
	multipack: (H�
ads_grouping; (	H �

ads_labels< (	
ads_redirect= (	H!�7
cost_of_goods_sold> (2.google.shopping.type.PriceP
product_details? (27.google.shopping.merchant.products.v1beta.ProductDetail
product_highlights@ (	
display_ads_idA (	H"�
display_ads_similar_idsB (	
display_ads_titleC (	H#�
display_ads_linkD (	H$�
display_ads_valueE (H%�
promotion_idsF (	
pickup_methodP (	H&�

pickup_slaQ (	H\'�
link_templateR (	H(�!
mobile_link_templateS (	H)�
custom_label_0G (	H*�
custom_label_1H (	H+�
custom_label_2I (	H,�
custom_label_3J (	H-�
custom_label_4K (	H.�
included_destinationsL (	
excluded_destinationsM (	\'
shopping_ads_excluded_countriesN (	
external_seller_id (	H/�
pause (	H0�
lifestyle_image_links (	u
"cloud_export_additional_propertiesT (2I.google.shopping.merchant.products.v1beta.CloudExportAdditionalProperties 
virtual_model_link� (	H1�O
certifications{ (27.google.shopping.merchant.products.v1beta.Certification`
structured_title� (2@.google.shopping.merchant.products.v1beta.ProductStructuredTitleH2�l
structured_description� (2F.google.shopping.merchant.products.v1beta.ProductStructuredDescriptionH3�;
auto_pricing_min_price| (2.google.shopping.type.Pricel
sustainability_incentives� (2H.google.shopping.merchant.products.v1beta.ProductSustainabilityIncentiveB
_identifier_existsB

_is_bundleB
_titleB
_descriptionB
_linkB
_mobile_linkB
_canonical_linkB
_image_linkB
_adultB

_age_groupB
_availabilityB
_brandB
_colorB

_conditionB	
_genderB
_google_product_categoryB
_item_group_idB
	_materialB
_mpnB

_patternB
_sell_on_google_quantityB
_max_handling_timeB
_min_handling_timeB
_shipping_labelB
_transit_time_labelB
_sizeB
_size_systemB
_tax_categoryB
_energy_efficiency_classB
_min_energy_efficiency_classB
_max_energy_efficiency_classB

_multipackB
_ads_groupingB
_ads_redirectB
_display_ads_idB
_display_ads_titleB
_display_ads_linkB
_display_ads_valueB
_pickup_methodB
_pickup_slaB
_link_templateB
_mobile_link_templateB
_custom_label_0B
_custom_label_1B
_custom_label_2B
_custom_label_3B
_custom_label_4B
_external_seller_idB
_pauseB
_virtual_model_linkB
_structured_titleB
_structured_description"p
Tax
rate (
country (	
region (	
tax_ship (
location_id (
postal_code (	"-
ShippingWeight
value (
unit (	"0
ShippingDimension
value (
unit (	"5
UnitPricingBaseMeasure
value (
unit (	"1
UnitPricingMeasure
value (
unit (	"�
SubscriptionCostL
period (2<.google.shopping.merchant.products.v1beta.SubscriptionPeriod
period_length (+
amount (2.google.shopping.type.Price"�
Installment
months (+
amount (2.google.shopping.type.Price5
downpayment (2.google.shopping.type.PriceH �
credit_type (	H�B
_downpaymentB
_credit_type"B
LoyaltyPoints
name (	
points_value (
ratio ("�
LoyaltyProgram
program_label (	H �

tier_label (	H�/
price (2.google.shopping.type.PriceH�A
cashback_for_future_use (2.google.shopping.type.PriceH�
loyalty_points (H�?
member_price_effective_date (2.google.type.IntervalH�
shipping_label (	H�B
_program_labelB
_tier_labelB
_priceB
_cashback_for_future_useB
_loyalty_pointsB
_member_price_effective_dateB
_shipping_label"�
Shipping*
price (2.google.shopping.type.Price
country (	
region (	
service (	
location_id (
location_group_name (	
postal_code (	
min_handling_time (H �
max_handling_time	 (H�
min_transit_time
 (H�
max_transit_time (H�B
_min_handling_timeB
_max_handling_timeB
_min_transit_timeB
_max_transit_time"�
FreeShippingThreshold
country (	H �9
price_threshold (2.google.shopping.type.PriceH�B

_countryB
_price_threshold"V
ProductDetail
section_name (	
attribute_name (	
attribute_value (	"�
Certification$
certification_authority (	H �
certification_name (	H�
certification_code (	H� 
certification_value (	H�B
_certification_authorityB
_certification_nameB
_certification_codeB
_certification_value"t
ProductStructuredTitle 
digital_source_type (	H �
content (	H�B
_digital_source_typeB

_content"z
ProductStructuredDescription 
digital_source_type (	H �
content (	H�B
_digital_source_typeB

_content"9
ProductDimension
value (B�A
unit (	B�A"6
ProductWeight
value (B�A
unit (	B�A"�
ProductStatusg
destination_statuses (2I.google.shopping.merchant.products.v1beta.ProductStatus.DestinationStatusa
item_level_issues (2F.google.shopping.merchant.products.v1beta.ProductStatus.ItemLevelIssue1
creation_date (2.google.protobuf.Timestamp4
last_update_date (2.google.protobuf.Timestamp:
google_expiration_date (2.google.protobuf.Timestamp�
DestinationStatusV
reporting_context (2;.google.shopping.type.ReportingContext.ReportingContextEnum
approved_countries (	
pending_countries (	
disapproved_countries (	�
ItemLevelIssue
code (	a
severity (2O.google.shopping.merchant.products.v1beta.ProductStatus.ItemLevelIssue.Severity

resolution (	
	attribute (	V
reporting_context (2;.google.shopping.type.ReportingContext.ReportingContextEnum
description (	
detail (	
documentation (	
applicable_countries	 (	"T
Severity
SEVERITY_UNSPECIFIED 
NOT_IMPACTED
DEMOTED
DISAPPROVED"�
CloudExportAdditionalProperties
property_name (	H �

text_value (	

bool_value (H�
	int_value (
float_value (
	min_value (H�
	max_value (H�
	unit_code (	H�B
_property_nameB
_bool_valueB

_min_valueB

_max_valueB

_unit_code"�
ProductSustainabilityIncentive-
amount (2.google.shopping.type.PriceH 

percentage (H `
type (2M.google.shopping.merchant.products.v1beta.ProductSustainabilityIncentive.TypeH�"F
Type
TYPE_UNSPECIFIED 
EV_TAX_CREDIT
EV_PRICE_DISCOUNTB
valueB
_type*N
SubscriptionPeriod#
SUBSCRIPTION_PERIOD_UNSPECIFIED 	
MONTH
YEARB�
,com.google.shopping.merchant.products.v1betaBProductsCommonProtoPZNcloud.google.com/go/shopping/merchant/products/apiv1beta/productspb;productspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

