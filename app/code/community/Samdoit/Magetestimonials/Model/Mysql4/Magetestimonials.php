<?php

class Samdoit_Magetestimonials_Model_Mysql4_Magetestimonials extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the magetestimonials_id refers to the key field in your database table.
        $this->_init('magetestimonials/magetestimonials', 'magetestimonials_id');
    }
}
