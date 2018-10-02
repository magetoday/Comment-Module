<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Model\ResourceModel\Comment;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'comment_id';
	protected $_eventPrefix = 'comment_collection';
	protected $_eventObject = 'comment_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('MageToday\Comment\Model\Comment', 'MageToday\Comment\Model\ResourceModel\Comment');
	}

}
