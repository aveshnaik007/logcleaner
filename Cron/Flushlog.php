<?php

namespace Friendsta\Logcleaner\Cron;

class Flushlog
{
    protected $clearHelper;

    public function __construct(
      \Friendsta\Logcleaner\Helper\Clearlogs $clearHelper
    ) {
        $this->clearHelper = $clearHelper;
    }

    public function execute()
    {
        $this->clearHelper->clearLogContent();
    }
}
