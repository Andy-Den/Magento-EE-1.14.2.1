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
}