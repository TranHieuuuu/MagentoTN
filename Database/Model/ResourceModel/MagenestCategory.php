<?php

namespace Magenest\Database\Model\ResourceModel;

class MagenestCategory extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_category', 'id');
    }
}
