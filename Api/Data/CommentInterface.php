<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Api\Data;

/**
 * MageToday comment interface.
 * @api
 * @since 1.0.2
 */
interface CommentInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const COMMENT_ID          = 'comment_id';
    const EMAIL               = 'email';
    const RATING              = 'rating';
    const WEBSITE_ID          = 'website_id';
    const COMMENT             = 'comment';

    /**#@-*/

    /**
     * Get Comment Id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Comment
     *
     * @return string
     */
    public function getComment();

    /**
     * Get Ratind
     *
     * @return string|null
     */
    public function getRating();

    /**
     * Get website id
     *
     * @return int|null
     */
    public function getWebsiteId();

    /**
     * Get Email
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Set Comment Id
     *
     * @param int $id
     * @return \MageToday\Comment\Api\Data\CommentInterface
     */
    public function setId($id);

    /**
     * Set comment
     *
     * @param string $comment
     * @return \MageToday\Comment\Api\Data\CommentInterface
     */
    public function setComment(string $comment);

    /**
     * Set rating
     *
     * @param string $rating
     * @return \MageToday\Comment\Api\Data\CommentInterface
     */
    public function setRating(int $rating);

    /**
     * Set website
     *
     * @param string $websiteId
     * @return \MageToday\Comment\Api\Data\CommentInterface
     */
    public function setWebsiteId(int $websiteId);

    /**
     * Set email
     *
     * @param string $email
     * @return \MageToday\Comment\Api\Data\CommentInterface
     */
    public function setEmail(string $email);
}
