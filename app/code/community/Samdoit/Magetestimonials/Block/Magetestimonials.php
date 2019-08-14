<?php
class Samdoit_Magetestimonials_Block_Magetestimonials extends Mage_Core_Block_Template
{
	protected $_pageCollection;
	public function _prepareLayout()
	{
		return parent::_prepareLayout();
	}

	public function getMagetestimonials()     
	{
                $resource = Mage::getSingleton('core/resource');
                $readConnection = $resource->getConnection('core_read');
                $query = "SELECT *FROM ".$resource->getTableName('magetestimonials/magetestimonials')." WHERE status=1";
                $pageCollection = $readConnection->fetchAll($query);
		return $pageCollection;
	}
}
