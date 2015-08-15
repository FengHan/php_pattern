<?php

namespace App\Controller;

use Vendor\Controller;
use Vendor\Factory;

class Home extends Controller
{
    public function index()
    {
        $model = Factory::getModel('User');
        $userId = $model->create(['name' => 'rango', 'mobile' => 132409336978]);
        return ['name' => 'rango', 'userId' => $userId];
    }

    public function index2()
    {
        $db = Factory::getDatabase();
        $db->query('SELECT * FROM user');
        $db->query('DELECT * FROM user LIMIT 1');
    }
}