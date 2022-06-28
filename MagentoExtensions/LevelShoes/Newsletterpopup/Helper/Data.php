<?php
namespace LevelShoes\Newsletterpopup\Helper;

use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const NEWSLETTERPOPUP_GENERAL_ENABLED = 'newsletterpopup/general/enable';
    const NEWSLETTERPOPUP_GENERAL_DELAYTIME = 'newsletterpopup/general/delaytime';
    const NEWSLETTERPOPUP_GENERAL_TITLE = 'newsletterpopup/general/title';
    const NEWSLETTERPOPUP_GENERAL_TEXT = 'newsletterpopup/general/text';

    protected $_storeManager;

    public function __construct(\Magento\Framework\App\Helper\Context $context,
                                \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getStoreid()
    {
        return $this->_storeManager->getStore()->getId();
    }

    public function isEnabled()
    {
        return $this->scopeConfig->getValue(self::NEWSLETTERPOPUP_GENERAL_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $this->getStoreid());
    }

    public function getPopupDelayTime()
    {
        return $this->scopeConfig->getValue(self::NEWSLETTERPOPUP_GENERAL_DELAYTIME,
            ScopeInterface::SCOPE_STORE,
            $this->getStoreid());
    }

    public function getPopupTitle()
    {
        return $this->scopeConfig->getValue(self::NEWSLETTERPOPUP_GENERAL_TITLE,
            ScopeInterface::SCOPE_STORE,
            $this->getStoreid());
    }

    public function getPopupText()
    {
        return $this->scopeConfig->getValue(self::NEWSLETTERPOPUP_GENERAL_TEXT,
            ScopeInterface::SCOPE_STORE,
            $this->getStoreid());
    }
}
