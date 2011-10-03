<?php
abstract class ShareAV_Model_Abstract
{
    private $_arrData;
    private $_arrUpdate;
    private $_modelParent;


    protected function __construct()
    {
        $helperField = ShareAV_Model_Helper_Structure::getInstance();
        $this->_objStructure = $helperField->getStructure($this);
    }

    private function _getStructure()
    {
        return $this->_objStructure;
    }

    protected function _getField($strFieldName)
    {
        return $this->_getStructure()->getField($strFieldName);
    }

    protected function _setField($strFieldName, $mixedData)
    {
        $this->_arrData = $this->_getStructure->setField($strFieldName, $mixedData);
    }

    protected function _getModelParent()
    {
        return $this->_modelParent;
    }
}
