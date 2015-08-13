<?php

namespace Vendor;


class Factory
{
    public static function createDatabase()
    {
        $db = Database::getInstance();
        Register::set('db1', $db);

        return $db;
    }

    public static function getUser($id){
        $userId = 'user_' . $id;
        $user = Register::get($userId);
        if ( ! $user) {
            $user = new User($id);
            Register::set($userId, $user);
        }
        return $user;
    }
}