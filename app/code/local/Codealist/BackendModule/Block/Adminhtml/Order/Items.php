<?php


class Codealist_BackendModule_Block_Adminhtml_Order_Items extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    // We declare the content of our items container
    public function __construct()
    {
        // This block is called as codealist_backendmodule/adminhtml_order_items

        // The blockGroup must match the first half of how we call the block
        $this->_blockGroup = 'codealist_backendmodule';

        // The controller must match the second half of how we call the block
        $this->_controller = 'adminhtml_order_items';

        $this->_headerText = Mage::helper('adminhtml')->__('Codealist Orders Items');

        parent::__construct();
        $this->_removeButton('add');
    }
}
