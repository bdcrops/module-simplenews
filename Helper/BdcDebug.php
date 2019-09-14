<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace BDC\SimpleNews\Helper;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

class BdcDebug extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/bdc_debug.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
}
