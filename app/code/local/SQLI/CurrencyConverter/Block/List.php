<?php

/**
 * @category    SQLI
 * @package     SQLI_CurrencyConverter
 * @author      Abderrahmane MEJDOUBI <amejdoubi@sqli.com>
 */
class SQLI_CurrencyConverter_Block_List extends Mage_Core_Block_Template
{
    public function listOfConversion()
    {
        $collection = Mage::getModel('currencyconverter/conversion')
            ->getCollection()
            ->setOrder('currency_from', 'asc');

        $html = "";

        foreach($collection as $data) {
            $html .= "<tr>".
                         "<td>" . $data->getData('currency_from') . "</td>".
                         "<td>" . $data->getData('currency_to') . "</td>".
                         "<td>" . $data->getData('amount') . "</td>".
                         "<td>" . $data->getData('rate') . "</td>".
                         "<td>" . ($data->getData('amount')*$data->getData('rate')) . "</td>".
                     "</tr>";
        }

        return $html;
    }
}