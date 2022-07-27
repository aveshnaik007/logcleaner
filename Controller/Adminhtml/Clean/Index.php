<?php

namespace Friendsta\Logcleaner\Controller\Adminhtml\Clean;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $clearLogs;

    public function __construct(
        \Friendsta\Logcleaner\Helper\Clearlogs $clearlogs,
        Context $context
    ) {
        $this->clearLogs = $clearlogs;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        try {
            $this->clearLogs->clearLogContent();
            $this->messageManager->addSuccessMessage("Logs are cleared successfully");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage("Something went wrong while clearing logs(".$exception->getMessage().")");
        }
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }
}
