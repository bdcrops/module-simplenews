<?php

namespace BDC\SimpleNews\Block\Lastest;

use BDC\SimpleNews\Block\Lastest;
use BDC\SimpleNews\Model\System\Config\LastestNews\Position;

class Left extends Lastest
{
   public function _construct()
   {
      $position = $this->_dataHelper->getLastestNewsBlockPosition();
      // Check this position is applied or not
      if ($position == Position::LEFT) {
         $this->setTemplate('BDC_SimpleNews::lastest.phtml');
      }
   }
}
