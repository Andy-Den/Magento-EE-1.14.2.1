<?php

/**
 *
 *
 * @category   SQLI
 * @package    SQLI_CurrencyConverter
 * @author     Abderrahmane MEJDOUBI <amejdoubi@sqli.com>
 */
class SQLI_CurrencyConverter_Model_Resource_Conversion_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
//        parent::_construct();
        $this->_init('currencyconverter/conversion');
    }
}