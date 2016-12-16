<?php

/**
 * Converter controller
 *
 * @category   SQLI
 * @package    SQLI_CurrencyConverter
 * @author     Abderrahmane MEJDOUBI <amejdoubi@sqli.com>
 */
class SQLI_CurrencyConverter_ConverterController extends Mage_Core_Controller_Front_Action
{

    /**
     * Retrieve core session model object, frontend side
     *
     * @return Mage_Core_Model_Session
     */
    protected function _getSession()
    {
        return Mage::getSingleton('core/session', array("name"=>"frontend"));
    }

    /**
     * Converter index action
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * List of conversion action
     */
    public function listAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Save conversion action
     */
    public function saveAction()
    {
        if ($this->getRequest()->isPost()) {
            $currency_from = $this->getRequest()->getPost('currency_from');
            $currency_to   = $this->getRequest()->getPost('currency_to');
            $amount        = $this->getRequest()->getPost('amount');
            $rate          = $this->getRequest()->getPost('rate');

            $conversionModel = Mage::getModel('currencyconverter/conversion');

            $conversionModel->setCurrencyFrom($currency_from)
                            ->setCurrencyTo($currency_to)
                            ->setAmount($amount)
                            ->setRate($rate);

            try {
                $conversionModel->save();
            } catch (Exception $e) {
                echo $this->__('Cannot save the conversion.');
            }
        }
        die;
    }
}