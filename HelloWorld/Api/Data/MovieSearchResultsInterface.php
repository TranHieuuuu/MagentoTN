<?php
declare(strict_types=1);

namespace Magenest\HelloWorld\Api\Data;

interface MovieSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Student list.
     * @return \Magenest\HelloWorld\Api\Data\MovieInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \Magenest\HelloWorld\Api\Data\MovieInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

