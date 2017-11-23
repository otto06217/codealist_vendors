<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'codealist_vendors'
 */
$table = $installer->getConnection()
    // The following call to getTable('codealist_backendmodule/vendors')
    // will lookup the resource for codealist_backendmodule (codealist_backendmodule_mysql4), and look
    // for a corresponding entity called vendors. The table name in the XML is codealist_vendors,
    // so ths is what is created.
    ->newTable($installer->getTable('codealist_backendmodule/vendors'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
    ), 'ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 0, array(
        'nullable' => false,
    ), 'Name');
$installer->getConnection()->createTable($table);

$installer->endSetup();
