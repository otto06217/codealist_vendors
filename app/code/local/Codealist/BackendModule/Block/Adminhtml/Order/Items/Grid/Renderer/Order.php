<?php


class Codealist_BackendModule_Block_Adminhtml_Order_Items_Grid_Renderer_Order
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    // Here we create a link to point the Order View page for the current value
    public function render(Varien_Object $row)
    {
        $value = $row->getData($this->getColumn()->getIndex());
        $html = '<a href="' . $this->getUrl('adminhtml/sales_order/view', array('order_id' => $value, 'key' => $this->getCacheKey())) . '" target="_blank" title="' . $value . '" >' . $value . '</a>';
        return $html;
    }
}
