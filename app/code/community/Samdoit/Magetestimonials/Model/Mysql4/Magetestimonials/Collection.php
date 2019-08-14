<?php

class Samdoit_Magetestimonials_Model_Mysql4_Magetestimonials_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('magetestimonials/magetestimonials');
    }
}
