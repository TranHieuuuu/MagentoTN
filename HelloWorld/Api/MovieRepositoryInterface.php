<?php
declare(strict_types=1);

namespace Magenest\HelloWorld\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface MovieRepositoryInterface
{

    /**
     * Save Movie
     * @param \Magenest\HelloWorld\Api\Data\MovieInterface $Movie
     * @return \Magenest\HelloWorld\Api\Data\MovieInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Magenest\HelloWorld\Api\Data\MovieInterface $Movie
    );

    /**
     * Retrieve Movie
     * @param string $MovieId
     * @return \Magenest\HelloWorld\Api\Data\MovieInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($MovieId);

    /**
     * Retrieve Movie matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magenest\HelloWorld\Api\Data\MovieSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Movie
     * @param \Magenest\HelloWorld\Api\Data\MovieInterface $Movie
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Magenest\HelloWorld\Api\Data\MovieInterface $Movie
    );

    /**
     * Delete Movie by ID
     * @param string $MovieId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($MovieId);
}

