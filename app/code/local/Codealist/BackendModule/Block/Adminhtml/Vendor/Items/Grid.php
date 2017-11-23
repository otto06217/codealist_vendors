<?php


class Codealist_BackendModule_Block_Adminhtml_Vendor_Items_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();

        // Set a unique id for our grid
        $this->setId('vendor_items');

        // Default sort by column
        $this->setDefaultSort('id');
    }


    protected function _prepareCollection()
    {
        // Instantiate the collection of data to be display on the grid
        $collection = Mage::getModel('codealist_backendmodule/vendor')->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }


    // Set every column to be displayed on the grid
    protected function _prepareColumns()
    {

        $this->addColumn('id', array(
            'header' => Mage::helper('codealist_backendmodule')->__('Vendor Id'),
            'sortable' => true,
            'width' => '60',
            'index' => 'id'
        ));

        $this->addColumn('name', array(
            'header' => Mage::helper('codealist_backendmodule')->__('Name'),
            'sortable' => true,
            'width' => '60',
            'index' => 'name',
            'type'  => 'varchar'
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        // This is where our row data will link to
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

}
