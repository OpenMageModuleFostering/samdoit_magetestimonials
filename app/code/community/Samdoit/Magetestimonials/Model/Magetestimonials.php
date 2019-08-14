<?php
class Samdoit_Magetestimonials_Model_Magetestimonials extends Mage_Core_Model_Abstract
{
	public function _construct()
	{
		parent::_construct();
		$this->_init('magetestimonials/magetestimonials');
	}
/*	public getDetail()
	{
		$resource = Mage::getSingleton('core/resource');
		$readConnection = $resource->getConnection('core_read');
		$query = "SELECT *FROM magetestimonials";
		echo $query;
		$wppageCollection = $readConnection->fetchAll($query);
		foreach($wppageCollection as $key=>$value)
		{
			print_r($value);
		}
	}*/
}
