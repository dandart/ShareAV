<?php
class Api_UserController extends Zend_Controller_Action
{
    public function loginAction()
    {
        $this->view->arrData = array('Done' => 'That');
    }
}
