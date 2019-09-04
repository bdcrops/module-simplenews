<?php
namespace BDC\SimpleNews\Model\Resource\News;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection {
    /**
     * Define model & resource model
     */
    protected function _construct(){
        $this->_init(
            'BDC\SimpleNews\Model\News',
            'BDC\SimpleNews\Model\Resource\News'
        );
    }
}
