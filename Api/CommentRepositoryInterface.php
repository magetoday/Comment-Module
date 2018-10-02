<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MageToday\Comment\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Comment CRUD interface.
 * @api
 */
interface CommentRepositoryInterface
{
    /**
     * Save comment.
     *
     * @param \MageToday\Comment\Api\Data\CommentInterface $comment
     * @return \MageToday\Comment\Api\Data\CommentInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\CommentInterface $comment);

    /**
     * Retrieve comment.
     *
     * @param int $commentId
     * @return \MageToday\Comment\Api\Data\CommentInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve comments matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MageToday\Comment\Api\Data\commentSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete comment.
     *
     * @param \MageToday\Comment\Api\Data\CommentInterface $comment
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\CommentInterface $comment);

    /**
     * Delete comment by ID.
     *
     * @param int $commentId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($commentId);
}
