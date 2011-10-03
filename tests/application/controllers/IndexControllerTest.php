<?php

class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{

    public function setUp()
    {
        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/application.ini');
        parent::setUp();
    }

    public function testA()
    {
        $this->markTestSkipped('No content yet');
    }
}

