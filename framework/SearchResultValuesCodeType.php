<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchResultValuesCodeType.html
 *
 * @property string Escrow
 * @property string New
 * @property string CharityListing
 * @property string Picture
 * @property string Gift
 * @property string CustomCode
 */
class SearchResultValuesCodeType extends EbatNs_FacetType
{
	const CodeType_Escrow = 'Escrow';
	const CodeType_New = 'New';
	const CodeType_CharityListing = 'CharityListing';
	const CodeType_Picture = 'Picture';
	const CodeType_Gift = 'Gift';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchResultValuesCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchResultValuesCodeType = new SearchResultValuesCodeType();

?>
