<?php

/**
 *
 *
 * @category    SQLI
 * @package     SQLI_CurrencyConverter
 * @author      Abderrahmane MEJDOUBI <amejdoubi@sqli.com>
 */
class SQLI_CurrencyConverter_Block_Converter extends Mage_Core_Block_Template
{
    /**
     * Get the url of the currency converter save action
     *
     * @return string
     */
    public function getConverterFormAction()
    {
        return $this->getUrl('currency-converter/converter/save');
    }
}
