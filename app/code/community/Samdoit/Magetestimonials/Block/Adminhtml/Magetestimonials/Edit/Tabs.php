<?php

class Samdoit_Magetestimonials_Block_Adminhtml_Magetestimonials_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('magetestimonials_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('magetestimonials')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('magetestimonials')->__('Item Information'),
          'title'     => Mage::helper('magetestimonials')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('magetestimonials/adminhtml_magetestimonials_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}
