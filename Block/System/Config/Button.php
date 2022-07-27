<?php

namespace Friendsta\Logcleaner\Block\System\Config;

use Magento\Config\Block\System\Config\Form\Field;

class Button extends Field
{
    protected $_template = 'Friendsta_Logcleaner::system/config/button.phtml';

    public function getCustomUrl()
    {
        return $this->getUrl('logclean/clean/index');
    }
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('Magento\Backend\Block\Widget\Button')->setData(['id' => 'btn_id', 'label' => __('Clearn Now'),]);
        return $button->toHtml();
    }
}
