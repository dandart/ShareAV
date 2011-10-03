<?php
class ShareAV_Model_Helper_StructureTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    public function testInstanceProvidesCorrectHelpers()
    {
        $instance = ShareAV_Model_Helper_Structure::getInstance();
    }
}
