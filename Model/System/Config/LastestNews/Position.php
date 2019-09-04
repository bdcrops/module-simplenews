<?php

namespace BDC\SimpleNews\Model\System\Config\LastestNews;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface{
    const LEFT      = 1;
    const RIGHT     = 2;
    const DISABLED  = 0;

    /**
     * Get positions of lastest news block
     *
     * @return array
     */
    public function toOptionArray(){
        return [
            self::LEFT => __('Left'),
            self::RIGHT => __('Right'),
            self::DISABLED => __('Disabled')
        ];
    }
}
