<?php
class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;
    function __construct()
    {
        $this -> serverName = '127.0.0.1';
        $this -> userName = 'root';
        $this -> password = "";
        $this -> dbName = "polls";
    }
}