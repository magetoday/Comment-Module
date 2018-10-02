<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Model;

use MageToday\Comment\Api\Data\CommentInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Comment extends \Magento\Framework\Model\AbstractModel implements IdentityInterface, CommentInterface
{
    const CACHE_TAG = 'comment';

    protected function _construct()
    {
        $this->_init(\MageToday\Comment\Model\ResourceModel\Comment::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::COMMENT_ID);
    }

    /**
     * @param int|null $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::COMMENT_ID, $id);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return (string)$this->getData(self::EMAIL);
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->setData(self::EMAIL, $email);
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return (string)$this->getData(self::COMMENT);
    }

    /**
     * @param string $rating
     * @return void
     */
    public function setComment(string $comment)
    {
        $this->setData(self::COMMENT, $comment);
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return (int)$this->getData(self::RATING);
    }

    /**
     * @param string $rating
     * @return void
     */
    public function setRating(int $rating)
    {
        $this->setData(self::RATING, $rating);
    }

    /**
     * @return string
     */
    public function getWebsiteId(): int
    {
        return (int)$this->getData(self::WEBSITE_ID);
    }

    /**
     * @param string $websiteId
     * @return void
     */
    public function setWebsiteId(int $websiteId)
    {
        $this->setData(self::WEBSITE_ID, $websiteId);
    }
}