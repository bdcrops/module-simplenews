<?php

namespace BDC\SimpleNews\Block\Adminhtml\News\Edit;

use Magento\Backend\Block\Widget\Tabs as WidgetTabs;

class Tabs extends WidgetTabs
{
    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('news_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('News Information'));
    }

    /**
     * @return $this
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'news_info',
            [
                'label' => __('General'),
                'title' => __('General'),
                'content' => $this->getLayout()->createBlock(
                    'BDC\SimpleNews\Block\Adminhtml\News\Edit\Tab\Info'
                )->toHtml(),
                'active' => true
            ]
        );

        return parent::_beforeToHtml();
    }
}
