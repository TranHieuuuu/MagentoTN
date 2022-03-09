<?php
namespace Magenest\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $collection;
    public function __construct(
        Template\Context $context,
        \Magenest\HelloWorld\Model\MagenestActorFactory $magenestActorFactory,
        \Magenest\HelloWorld\Model\MagenestMovieFactory $magenestMovieFactory,
        \Magenest\HelloWorld\Model\MagenestDirectorFactory $magenestDirectorFactory,
        \Magenest\HelloWorld\Model\ResourceModel\MagenestMovie\CollectionFactory $collectionFactory,

        array $data = []
    )
    {
        $this->collection = $collectionFactory;
        $this->magenestActorFactory = $magenestActorFactory;
        $this->magenestMovieFactory = $magenestMovieFactory;
        $this->magenestDirectorFactory = $magenestDirectorFactory;
        parent::__construct($context, $data);
    }

    public function getDataMovie()
    {
        $data2 = $this->collection->create()->getData();
        $data = $this->magenestMovieFactory->create()->getCollection()->getData();
        return $data;
    }
}
