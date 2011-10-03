<?php
class ShareAV_Model_Helper_Structure
{
    // TODO config.ini this

    private static $_instance;
    private $_schemaLocation;
    private $_objSchema;

    final private function __construct()
    {
        $this->_schemaLocation = APPLICATION_PATH. '/../library/ShareAV/Model/Helper/schema.xml';
        $strXml = file_get_contents($this->_schemaLocation);
        $objSimpleXML = new SimpleXMLElement($strXml);
        foreach($objSimpleXML as $id => $element) {
            echo $id .' for '. print_r($element,true);
        }
    }

    final private function __clone()
    {
    }

    public static function getInstance()
    {
        if(is_null(self::$_instance))
            self::$_instance = new self();
        return self::$_instance;
    }
    
    public function getStructure(ShareAV_Model_Abstract $model)
    {
    }
}
