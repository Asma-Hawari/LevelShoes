<?php
namespace LevelShoes\Newsletterpopup\Block;

class Newsletterpopup extends \Magento\Framework\View\Element\Template
{
    protected $popupdatahelper;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                \LevelShoes\Newsletterpopup\Helper\Data $popupdatahelper
    ) {
        $this->popupdatahelper = $popupdatahelper;
        parent::__construct($context);
    }

    public function getPopupText() {
        return $this->popupdatahelper->getPopupText();
    }

    public function getPopupDelay() {
        return $this->popupdatahelper->getPopupDelayTime();
    }

    public function getPopupTitle() {
        return $this->popupdatahelper->getPopupTitle();
    }
}
