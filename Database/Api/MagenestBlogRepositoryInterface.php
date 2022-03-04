<?php

namespace Magenest\Database\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magenest\Database\Api\Data\MagenestBlogInterface;

interface MagenestBlogRepositoryInterface
{
    /**
     * @param int $id
     * @return \Magenest\Database\Api\Data\MagenestBlogInterface
     */
    public function getById($id);

    /**
     * @param \Magenest\Database\Api\Data\MagenestBlogInterface $magenestBlog
     * @return \Magenest\Database\Api\Data\MagenestBlogInterface
     */
    public function save(MagenestBlogInterface $magenestBlog);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById($id);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magenest\Database\Api\Data\MagenestBlogSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
