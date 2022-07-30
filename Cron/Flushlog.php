<?php

namespace Friendsta\Logcleaner\Cron;

class Flushlog
{
    protected $clearHelper;

    protected $configuration;

    public function __construct(
      \Friendsta\Logcleaner\Helper\Clearlogs $clearHelper,
      \Friendsta\Logcleaner\Helper\Configuration $config
    ) {
        $this->clearHelper = $clearHelper;
        $this->configuration = $config;
    }

    public function execute()
    {
        if($this->configuration->getGeneralConfig("enable_cron")) {
            $this->clearHelper->clearLogContent();
        }
    }
}
