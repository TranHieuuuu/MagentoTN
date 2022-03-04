<?php

namespace Magenest\Database\Model\ResourceModel\MagenestBlog;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Magenest\Database\Model\MagenestBlog', 'Magenest\Database\Model\ResourceModel\MagenestBlog');
    }
}
