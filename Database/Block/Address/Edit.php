<?php

namespace Magenest\Database\Block\Address;

use Magento\Framework\UrlInterface;

class Edit extends \Magento\Customer\Block\Address\Edit
{
    public function getAllOptions()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        return $objectManager
            ->create('Magenest\Database\Model\Region\Attribute\Source\Mode')
            ->getAllOptions();
    }
}
