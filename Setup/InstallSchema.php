<?php
/**
 * © MageToday.
 * Friend's developing 
 */

namespace MageToday\Comment\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        if (!$installer->tableExists('magetoday_comment')) {
        
	        $table = $installer->getConnection()->newTable(
	            $installer->getTable('magetoday_comment')
	        )->addColumn(
	            'comment_id',
	            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
	            null,
	            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
	            'Comment ID'
	        )->addColumn(
	            'email',
	            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
	            255,
	            [],
	            'Email'
	        )->addColumn(
	            'rating',
	            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
	            null,
	            ['unsigned' => true, 'nullable' => false, 'default' => 5],
	            'Comment Rating'
	        )->addColumn(
	            'website_id',
	            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
	            null,
	            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
	            'Website ID'
	        )->addIndex(
	            $installer->getIdxName('magetoday_comment', 'email'),
	            'email'
	        )->addIndex(
	            $installer->getIdxName('magetoday_comment', 'rating'),
	            'rating'
	        )->setComment(
	            'Comment Store Rating'
	        );
	        
	        $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
