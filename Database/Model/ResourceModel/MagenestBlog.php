<?php

namespace Magenest\Database\Model\ResourceModel;

class MagenestBlog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_blog', 'id');
    }
}
