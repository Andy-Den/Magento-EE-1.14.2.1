<?php

$installer = $this;
/* @var $installer Mage_Catalog_Model_Resource_Setup */

$installer->startSetup();

/**
 * Create table 'sqli_currency_conversion'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('currencyconverter/conversion'))
    ->addColumn('conversion_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'primary'   => true,
        'unsigned'  => false,
        'nullable'  => false,
    ), 'Conversion Id')
    ->addColumn('currency_from', Varien_Db_Ddl_Table::TYPE_TEXT, 3, array(
        'unsigned'  => false,
        'nullable'  => false,
    ), 'Currency From')
    ->addColumn('currency_to', Varien_Db_Ddl_Table::TYPE_TEXT, 3, array(
        'unsigned'  => false,
        'nullable'  => false,
    ), 'Currency To')
    ->addColumn('amount', Varien_Db_Ddl_Table::TYPE_FLOAT, array(
        'nullable'  => false,
    ), 'Amount to convert');

$installer->getConnection()->createTable($table);

$installer->endSetup();