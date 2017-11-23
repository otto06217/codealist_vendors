<?php


class Codealist_BackendModule_Model_Mysql4_Vendor extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        // We tell our resource model which is the primary key of the vendors table
        $this->_init('codealist_backendmodule/vendors', 'id');
    }

}
