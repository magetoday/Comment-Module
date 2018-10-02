<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Model;

use MageToday\Comment\Api\Data\CommentInterface;
use MageToday\Comment\Api\CommentRepositoryInterface;
use MageToday\Comment\Model\ResourceModel\Comment as CommentResource;
use MageToday\Comment\Model\ResourceModel\Comment\CollectionFactory;
use MageToday\Comment\Model\CommentFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class CommentRepository
 * @package MageToday\Comment\Model
 */
class CommentRepository implements CommentRepositoryInterface
{

    /**
     * @var commentResource
     */
    private $commentResource;

    /**
     * @var commentFactory
     */
    private $commentFactory;

    /**
     * @var commentCollectionFactory
     */
    private $commentCollectionFactory;

    /**
     * @var SampleSearchResultInterfaceFactory
     */
    private $searchResultFactory;

    /**
     * SampleRepository constructor.
     * @param SampleResource $sampleResource
     * @param SampleFactory $sampleFactory
     * @param CollectionFactory $commentCollectionFactory
     */
    public function __construct(
        CommentResource $sampleResource,
        CommentFactory $sampleFactory,
        CollectionFactory $commentCollectionFactory,
        SearchResultsInterface $searchResultFactory
    ) {
        $this->commentResource = $sampleResource;
        $this->commentFactory = $sampleFactory;
        $this->commentCollectionFactory = $commentCollectionFactory;
        $this->searchResultFactory = $searchResultFactory;
    }

    /**
     * @param \MageToday\Comment\Api\Data\CommentInterface $comment
     * @return void
     * @throws \Exception
     * @throws AlreadyExistsException
     */
    public function save(\MageToday\Comment\Api\Data\CommentInterface $comment)
    {
        return; /*TODO */
    }

    /**
     * @param int $id
     * @return \MageToday\Comment\Api\Data\CommentInterface $commentModel
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id): \MageToday\Comment\Api\Data\CommentInterface
    {
        /** @var Sample $sampleModel */
        $commentModel = $this->commentFactory->create();
        $this->commentResource->load($commentModel, $id);
        if (!$commentModel->getId()) {
            throw new NoSuchEntityException();
        }
        return $commentModel;
    }

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        return; /*TODO */
    }

    /**
     * @param \MageToday\Comment\Api\Data\CommentInterface $sample
     * @return void
     * @throws \Exception
     */
    public function delete(\MageToday\Comment\Api\Data\CommentInterface $comment)
    {
        return; /*TODO */
    }

    /**
     * @param int $id
     * @return void
     * @throws \Exception
     */
    public function deleteById($id)
    {
       return; /*TODO */
    }
}
