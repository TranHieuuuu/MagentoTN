<?php
namespace Magenest\HelloWorld\Observer;
use Magento\Framework\Event\Observer;

class Test implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(Observer $observer)
    {
        $data = $observer->getData('product');
//        $data->setData('name', 'Tôi đã thay đổi dữ liệu cột name khi dữ liệu được gửi.');
//        $observer->setData('postData', $data);
    }
}
