<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Block;

use Magento\Framework\View\Element\Template;

/**
 * Main Comment form block
 */
class CommentForm extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }

    /**
     * Returns action url for comment form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('comment/index/post', ['_secure' => true]);
    }
}
