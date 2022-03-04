<?php

namespace Magenest\Database\Model\ResourceModel\MagenestCategory;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Magenest\Database\Model\MagenestCategory', 'Magenest\Database\Model\ResourceModel\MagenestCategory');
    }
}
