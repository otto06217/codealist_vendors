<?php


class Codealist_BackendModule_Block_Adminhtml_Order_Items_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();

        // Set a unique id for our grid
        $this->setId('order_items');

        // Default sort by column
        $this->setDefaultSort('item_id');
    }


    protected function _prepareCollection()
    {

        // Instantiate the collection of data to be display on the grid
        $collection = Mage::getModel('sales/order_item')->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }


    // Set every column to be displayed on the grid
    protected function _prepareColumns()
    {
        $this->addColumn('item_id', array(
            'header' => Mage::helper('codealist_backendmodule')->__('ID'),
            'sortable' => true,
            'width' => '60',
            'index' => 'item_id'
        ));

        // In this particular case, we create a custom renderer in order to show
        // html data on this column
        $this->addColumn('order_id', array(
            'header' => Mage::helper('codealist_backendmodule')->__('Order Id'),
            'sortable' => true,
            'width' => '60',
            'index' => 'order_id',
            'renderer' => 'Codealist_BackendModule_Block_Adminhtml_Order_Items_Grid_Renderer_Order',
        ));

        $this->addColumn('created_at', array(
            'header' => Mage::helper('codealist_backendmodule')->__('Created At'),
            'sortable' => true,
            'width' => '60',
            'index' => 'created_at',
            'type' => 'datetime'
        ));

        return parent::_prepareColumns();
    }


}
