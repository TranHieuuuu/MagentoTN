<?php

namespace Magenest\HelloWorld\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Magenest\HelloWorld\Model\ResourceModel\Post');
    }
}
