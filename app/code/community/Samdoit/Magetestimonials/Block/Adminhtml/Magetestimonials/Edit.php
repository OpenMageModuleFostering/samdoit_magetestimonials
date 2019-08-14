<?php

class Samdoit_Magetestimonials_Block_Adminhtml_Magetestimonials_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'magetestimonials';
        $this->_controller = 'adminhtml_magetestimonials';
        
        $this->_updateButton('save', 'label', Mage::helper('magetestimonials')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('magetestimonials')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('magetestimonials_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'magetestimonials_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'magetestimonials_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('magetestimonials_data') && Mage::registry('magetestimonials_data')->getId() ) {
            return Mage::helper('magetestimonials')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('magetestimonials_data')->getTitle()));
        } else {
            return Mage::helper('magetestimonials')->__('Add Item');
        }
    }
}
