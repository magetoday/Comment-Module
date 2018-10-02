<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '1.1.0', '<')) {

			$installer->getConnection()
			->addColumn(
	            $installer->getTable('magetoday_comment'),
	            'comment',
	            [
	                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
	                'length' => 255,
	                'nullable' => false,
	                'comment' => 'Comment'
	            ]
	        );

			$installer->getConnection()
			->addIndex(
	            $installer->getTable('magetoday_comment'),
	            $installer->getIdxName(
	                'magetoday_comment',
	                ['comment'],
	                AdapterInterface::INDEX_TYPE_FULLTEXT
	            ),
	            ['comment'],
	            AdapterInterface::INDEX_TYPE_FULLTEXT
	        );
		}
		$installer->endSetup();
	}
}