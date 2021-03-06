<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BatchJobOpsService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Ad' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Ad',
      'AdCustomizerError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdCustomizerError',
      'AdError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdError',
      'AdGroup' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroup',
      'AdGroupAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAd',
      'AdGroupAdCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAdCountLimitExceeded',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAdError',
      'AdGroupAdLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAdLabel',
      'AdGroupAdLabelOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAdLabelOperation',
      'AdGroupAdOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAdOperation',
      'AdGroupAdPolicySummary' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupAdPolicySummary',
      'AdGroupBidModifier' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupBidModifier',
      'AdGroupBidModifierOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupBidModifierOperation',
      'AdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupCriterion',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupCriterionError',
      'AdGroupCriterionLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupCriterionLabel',
      'AdGroupCriterionLabelOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupCriterionLabelOperation',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupCriterionLimitExceeded',
      'AdGroupCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupCriterionOperation',
      'AdGroupExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupExtensionSetting',
      'AdGroupExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupExtensionSettingOperation',
      'AdGroupLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupLabel',
      'AdGroupLabelOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupLabelOperation',
      'AdGroupOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupOperation',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupServiceError',
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdSchedule',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdSharingError',
      'AdUnionId' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdUnionId',
      'Address' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Address',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiException',
      'AppFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AppFeedItem',
      'AppPaymentModel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AppPaymentModel',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AppUrl',
      'AppUrlList' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AppUrlList',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LabelAttribute',
      'Audio' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Audio',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthorizationError',
      'Bid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Bid',
      'BiddableAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddableAdGroupCriterion',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Bids',
      'Budget' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Budget',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BudgetError',
      'BudgetOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BudgetOperation',
      'BudgetOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BudgetOptimizerBiddingScheme',
      'CallConversionType' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CallConversionType',
      'CallFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CallFeedItem',
      'CallOnlyAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CallOnlyAd',
      'CalloutFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CalloutFeedItem',
      'Campaign' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Campaign',
      'CampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignCriterion',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignCriterionError',
      'CampaignCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignCriterionOperation',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignError',
      'CampaignExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignExtensionSetting',
      'CampaignExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignExtensionSettingOperation',
      'CampaignLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignLabel',
      'CampaignLabelOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignLabelOperation',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DisplayAttribute',
      'CampaignOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignOperation',
      'Carrier' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Carrier',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ComparableValue',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ConstantOperand',
      'ContentLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ContentLabel',
      'ConversionOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ConversionOptimizerBiddingScheme',
      'ConversionOptimizerEligibility' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ConversionOptimizerEligibility',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CpmBid',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionParameter',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionPolicyError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomParameters',
      'CustomerExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomerExtensionSetting',
      'CustomerExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomerExtensionSettingOperation',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateError',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateRangeError',
      'DeprecatedAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DeprecatedAd',
      'Dimensions' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Dimensions',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DoubleValue',
      'DynamicSearchAdsSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DynamicSearchAdsSetting',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EnhancedCpcBiddingScheme',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityNotFound',
      'ErrorList' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ErrorList',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExemptionRequest',
      'ExpandedTextAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExpandedTextAd',
      'ExplorerAutoOptimizerSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExplorerAutoOptimizerSetting',
      'ExtensionFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExtensionFeedItem',
      'ExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExtensionSetting',
      'ExtensionSettingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExtensionSettingError',
      'FeedAttributeReferenceError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedAttributeReferenceError',
      'FeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItem',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemAttributeError',
      'FeedItemAttributeValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemAttributeValue',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemDevicePreference',
      'FeedItemError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemError',
      'FeedItemGeoRestriction' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemGeoRestriction',
      'FeedItemOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemOperation',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemPolicyData',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemScheduling',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ForwardCompatibilityError',
      'FrequencyCap' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FrequencyCap',
      'Function' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FunctionError',
      'FunctionParsingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FunctionParsingError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Gender',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\GeoPoint',
      'GeoTargetOperand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\GeoTargetOperand',
      'GeoTargetTypeSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\GeoTargetTypeSetting',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\IdError',
      'Image' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Image',
      'ImageAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ImageAd',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ImageError',
      'IncomeOperand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\IncomeOperand',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\InternalApiError',
      'IpBlock' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\IpBlock',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Keyword',
      'Label' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Label',
      'Language' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Language',
      'ListError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ListError',
      'ListOperations' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ListOperations',
      'Location' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Location',
      'LocationExtensionOperand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LocationExtensionOperand',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ManualCpmBiddingScheme',
      'Media' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Media',
      'MediaBundle' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MediaBundle',
      'MediaBundleError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MediaBundleError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MediaError',
      'Media_Size_DimensionsMapEntry' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Media_Size_DimensionsMapEntry',
      'Media_Size_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Media_Size_StringMapEntry',
      'MessageFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MessageFeedItem',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MobileApplication',
      'MobileDevice' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MobileDevice',
      'Money' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Money',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MoneyWithCurrency',
      'UniversalAppCampaignSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UniversalAppCampaignSetting',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MultiplierError',
      'MutateResult' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MutateResult',
      'NegativeAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NegativeAdGroupCriterion',
      'NegativeCampaignCriterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NegativeCampaignCriterion',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NetworkSetting',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NumberValue',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FunctionArgumentOperand',
      'Operand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Operand',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperatingSystemVersion',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperatorError',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PageOnePromotedBiddingScheme',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Placement',
      'PlacesOfInterestOperand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PlacesOfInterestOperand',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Platform',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyData',
      'PolicyTopicEntry' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyTopicEntry',
      'PolicyTopicEvidence' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyTopicEvidence',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyViolationKey',
      'PriceFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PriceFeedItem',
      'PriceTableRow' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PriceTableRow',
      'ProductAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductAd',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductOfferId',
      'ProductPartition' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductPartition',
      'ProductScope' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductScope',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ProductTypeFull',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Proximity',
      'QualityInfo' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QualityInfo',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ReadOnlyError',
      'RealTimeBiddingSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RealTimeBiddingSetting',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequiredError',
      'ResponsiveDisplayAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ResponsiveDisplayAd',
      'ReviewFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ReviewFeedItem',
      'RichMediaAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RichMediaAd',
      'SelectiveOptimization' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SelectiveOptimization',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SelectorError',
      'LocationGroups' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LocationGroups',
      'Setting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Setting',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SettingError',
      'ShoppingSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ShoppingSetting',
      'ShowcaseAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ShowcaseAd',
      'SitelinkFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SitelinkFeedItem',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SizeLimitError',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\String_StringMapEntry',
      'StructuredSnippetFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StructuredSnippetFeedItem',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetOutrankShareBiddingScheme',
      'TargetingSettingDetail' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetingSettingDetail',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetSpendBiddingScheme',
      'TargetingSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetingSetting',
      'TempAdUnionId' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TempAdUnionId',
      'TemplateAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TemplateAd',
      'TemplateElement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TemplateElement',
      'TemplateElementField' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TemplateElementField',
      'TextAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TextAd',
      'ThirdPartyRedirectAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ThirdPartyRedirectAd',
      'TrackingSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TrackingSetting',
      'UniversalAppCampaignAdsPolicyDecisions' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UniversalAppCampaignAdsPolicyDecisions',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UnknownProductDimension',
      'UrlData' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UrlData',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionUserList',
      'VanityPharma' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\VanityPharma',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Vertical',
      'Video' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Video',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\WebpageParameter',
      'DynamicSearchAd' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DynamicSearchAd',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\YouTubeVideo',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201702/BatchJobOpsService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\cm\Operation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\cm\MutateResult[]
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
