<?php


class Codealist_BackendModule_Model_Mysql4_Vendor_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        // Indicates which table will use this collection
        $this->_init('codealist_backendmodule/vendors');
    }

}
