<?php
class Adodis_Customizeshirt_Block_Adminhtml_Cuff_Grid_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        if($row->getData($this->getColumn()->getIndex())==""){
            return "";
        }
        else{
            $html = '<img ';
            $html .= 'id="' . $this->getColumn()->getId() . '" ';
            $html .= 'width="85" ';
            $html .= 'height="75" ';
            $html .= 'src="' . Mage::getBaseUrl("media") . $row->getData($this->getColumn()->getIndex()) . '"';
            $html .= 'class="grid-image ' . $this->getColumn()->getInlineCss() . '"/>';
            
            return $html;
        }
    }
}