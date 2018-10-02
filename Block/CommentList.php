<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Block;
 
class CommentList extends \Magento\Framework\View\Element\Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageToday\Comment\Model\CommentFactory $commentFactory,
        array $data = []
    ) {
        $this->_commentFactory = $commentFactory;
        parent::__construct($context, $data);
    }

    public function getComments()
    {
        $commentCollection = $this->_commentFactory->create();
        return $commentCollection->getCollection();
    }

    public function isTrue()
    {
       return true;
    }
}