<?php


class Codealist_BackendModule_Model_Vendor extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        // Here we tell which is the table associated to this model
        $this->_init('codealist_backendmodule/vendors');
    }
}
