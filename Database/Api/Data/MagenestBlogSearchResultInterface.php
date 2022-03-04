<?php

namespace Magenest\Database\Api\Data;

interface MagenestBlogSearchResultInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * @return \Magenest\Database\Api\Data\MagenestBlogInterface[]
     */
    public function getItems();

    /**
     * @param \Magenest\Database\Api\Data\MagenestBlogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
