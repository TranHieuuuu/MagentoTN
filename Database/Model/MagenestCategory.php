<?php

namespace Magenest\Database\Model;

class MagenestCategory extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Magenest\Database\Model\ResourceModel\MagenestCategory');
    }
}
