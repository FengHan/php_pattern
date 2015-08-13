<?php

namespace Vendor;


class User
{
    public $id;
    public $username;
    public $email;
    public $regtime;

    protected $db;

    public function __construct($id)
    {
        $this->db = new \Vendor\Database\MySQLi();
        $this->db->connect('127.0.0.1', 'homestead', 'secret', 'homestead');
        $res = $this->db->query('SELECT * FROM user LIMIT 1');
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->regtime = $data['regtime'];
    }

    public function __destruct()
    {
        $sql ='UPDATE user
               SET username="%s",
               email="%s",
               regtime="%s"
               WHERE id= %d';
        $sql = sprintf($sql, $this->username, $this->email, $this->regtime, $this->id);
        echo $sql . '<br>';
        $this->db->query($sql);
    }

}