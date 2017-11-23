<?php


class Codealist_BackendModule_Adminhtml_OrderController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
//        Load the Adminhtml layout
        $this->loadLayout();

//        This block will point to the file Block/Adminhtml/Order/Items.php
        $this->_addContent($this->getLayout()->createBlock('codealist_backendmodule/adminhtml_order_items'));

//        Render the layout
        $this->renderLayout();
    }
}
