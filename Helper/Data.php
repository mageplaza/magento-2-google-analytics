<?php

namespace Mageplaza\GoogleAnalytics\Helper;

use Mageplaza\Core\Helper\AbstractData;

class Data extends AbstractData
{
	const XML_PATH_GENERAL_ENABLED = 'googleanalytics/general/is_enabled';
	const XML_PATH_GENERAL_MAIN_TRACKING = 'googleanalytics/general/tracking_id';
	const XML_PATH_GENERAL_SECOND_TRACKING = 'googleanalytics/general/tracking_id2';
	const XML_PATH_GENERAL_LINK_ATTRIBUTION = 'googleanalytics/general/link_attribution';
	const XML_PATH_GENERAL_IP_ANONYMIZATION = 'googleanalytics/general/ip_anonymization';
	const XML_PATH_GENERAL_DEBUG = 'googleanalytics/general/debug';

	public function isEnabled($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_ENABLED, $storeId);

	}

	public function getMainTracking($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_MAIN_TRACKING, $storeId);
	}

	public function getSecondTracking($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_SECOND_TRACKING, $storeId);
	}

	public function getLinkAttribution($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_LINK_ATTRIBUTION, $storeId);
	}

	public function getIpAnonymization($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_IP_ANONYMIZATION, $storeId);
	}

	public function getDebug($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_DEBUG, $storeId);
	}
}
