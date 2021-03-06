<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the action taken by eBay as a result of the dispute resolution. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeResolutionRecordTypeCodeType.html
 *
 * @property string StrikeBuyer
 * @property string SuspendBuyer
 * @property string FVFCredit
 * @property string InsertionFeeCredit
 * @property string AppealBuyerStrike
 * @property string UnsuspendBuyer
 * @property string ReverseFVFCredit
 * @property string ReverseInsertionFeeCredit
 * @property string GenerateCSTicketForSuspend
 * @property string FVFCreditNotGranted
 * @property string ItemNotReceivedClaimFiled
 * @property string FeatureFeeCredit
 * @property string FeatureFeeNotCredit
 * @property string ReverseFeatureFeeCredit
 * @property string CustomCode
 */
class DisputeResolutionRecordTypeCodeType extends EbatNs_FacetType
{
	const CodeType_StrikeBuyer = 'StrikeBuyer';
	const CodeType_SuspendBuyer = 'SuspendBuyer';
	const CodeType_FVFCredit = 'FVFCredit';
	const CodeType_InsertionFeeCredit = 'InsertionFeeCredit';
	const CodeType_AppealBuyerStrike = 'AppealBuyerStrike';
	const CodeType_UnsuspendBuyer = 'UnsuspendBuyer';
	const CodeType_ReverseFVFCredit = 'ReverseFVFCredit';
	const CodeType_ReverseInsertionFeeCredit = 'ReverseInsertionFeeCredit';
	const CodeType_GenerateCSTicketForSuspend = 'GenerateCSTicketForSuspend';
	const CodeType_FVFCreditNotGranted = 'FVFCreditNotGranted';
	const CodeType_ItemNotReceivedClaimFiled = 'ItemNotReceivedClaimFiled';
	const CodeType_FeatureFeeCredit = 'FeatureFeeCredit';
	const CodeType_FeatureFeeNotCredit = 'FeatureFeeNotCredit';
	const CodeType_ReverseFeatureFeeCredit = 'ReverseFeatureFeeCredit';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeResolutionRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeResolutionRecordTypeCodeType = new DisputeResolutionRecordTypeCodeType();

?>
