<?php
namespace Bluethink\Grid\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'bluethink_grid_post';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Bluethink\Grid\Model\Post', 'Bluethink\Grid\Model\ResourceModel\Post');
	}

}
