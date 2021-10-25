<?php
namespace Blusethink\Grid\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'bluethink_grid_post';

	protected $_cacheTag = 'bluethink_grid_post';

	protected $_eventPrefix = 'bluethink_grid_post';

	protected function _construct()
	{
		$this->_init(Bluethink\Grid\Model\ResourceModel\Post::class);
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}