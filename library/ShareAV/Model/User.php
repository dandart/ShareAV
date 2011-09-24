<?php
class ShareAV_Model_User extends ShareAV_Model_Abstract_Base
{
    const FIELD_Username = 'Username';
    const FIELD_Password = 'Password';
    const FIELD_Nickname = 'Nickname';

    public static function create()
    {
        $user = new ShareAV_Model_User();
        return $user;
    }
}
