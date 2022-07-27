<?php

namespace Friendsta\Logcleaner\Block\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Button extends Field
{
    protected $_template = 'Friendsta_Logcleaner::system/config/button.phtml';

    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    public function getAjaxCheckUrl()
    {
        return $this->getUrl('logclean/clean/index');
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->addData(
            [
                'id' => 'clean_now_button',
                'button_label' => _('Clearn Now'),
                'onclick' => 'javascript:check(); return false;'
            ]
        );
        return $this->_toHtml();
    }
}
