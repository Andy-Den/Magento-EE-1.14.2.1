<?php

/**
 *
 *
 * @category   SQLI
 * @package    SQLI_CurrencyConverter
 * @author     Abderrahmane MEJDOUBI <amejdoubi@sqli.com>
 */
class SQLI_CurrencyConverter_Model_Resource_Conversion extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('currencyconverter/conversion', 'conversion_id');
    }
}