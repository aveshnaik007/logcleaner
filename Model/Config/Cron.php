<?php

namespace Friendsta\Logcleaner\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Cron extends AbstractSource
{

    const CRON_1DAY = '0 0 * * *';
    const CRON_7DAYS = '0 0 * * SAT';
    const CRON_1MONTH = '0 0 1 * *';
    const CRON_6MONTHS = '0 0 1 */6 *';
    const CRON_1YEAR = '0 0 1 1 *';

    public function getAllOptions()
    {
        $expresion = [
            [
                'label' => __('Every Day'),
                'value' => self::CRON_1DAY
            ],
            [
                'label' => __('Every Week'),
                'value' => self::CRON_7DAYS
            ],
            [
                'label' => __('Every Month'),
                'value' => self::CRON_1MONTH
            ],
            [
                'label' => __('Every 6 Months'),
                'value' => self::CRON_6MONTHS
            ],
            [
                'label' => __('Every Year'),
                'value' => self::CRON_1YEAR
            ]
        ];
        return $expresion;
    }
}
