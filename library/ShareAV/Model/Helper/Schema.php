<?php
class ShareAV_Model_Helper_Schema
{
    const SCHEMA_PATH = 'library/ShareAV/Model/schema.xml';

    static $_schema;

    final private function __construct()
    {
        // Initialise schema here
    }

    final private function __clone()
    {
    }

    public static function getInstance()
    {
        if(is_null(self::$_schema))
            self::$_schema = new ShareAV_Model_Helper_Schema();
        return self::$_schema;
    }

    public function getFields(ShareAV_Model_Abstract $model)
    {
    }
}

