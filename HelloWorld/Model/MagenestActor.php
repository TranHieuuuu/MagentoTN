<?php

namespace Magenest\HelloWorld\Model;

class MagenestActor extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Magenest\HelloWorld\Model\ResourceModel\MagenestActor');
    }
}
