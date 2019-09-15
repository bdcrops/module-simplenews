<?php
namespace BDC\SimpleNews\Helper;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

class BdcDebug extends Base{
    /**
     * @var string
     */
    protected $fileName = '/var/log/bdc_debug.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
}
