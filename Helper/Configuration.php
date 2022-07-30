<?php

namespace Friendsta\Logcleaner\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Configuration extends AbstractHelper
{
    public const XML_PATH_CONFIG = 'logclean/';

    private function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_CONFIG .'general/'. $code, $storeId);
    }
}
