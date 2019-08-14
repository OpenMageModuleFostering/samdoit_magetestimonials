<?php
class Samdoit_Magetestimonials_Block_Adminhtml_Magetestimonials extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_magetestimonials';
    $this->_blockGroup = 'magetestimonials';
    $this->_headerText = Mage::helper('magetestimonials')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('magetestimonials')->__('Add Item');
    parent::__construct();
  }
}
