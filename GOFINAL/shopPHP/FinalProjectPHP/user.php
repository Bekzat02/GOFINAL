<?php

require_once('connect_db.php');
require_once('user_interface.php');

class User extends CreateDb implements User_Interface
{
    private $connection;
    private $sql;


    public function __construct()
    {
        $this->connection=$this->connectTo();    
    }



    public function get_connect1()
    {
        return $this->connection;
    }

    private function select($sql)
    {
        $this->sql = $sql;
        $queryresult = $this->getQueryResult($this->sql);
        return $queryresult;
    }


    public function select_db()
    {
        $sqlquery = "SELECT * FROM users";
        return $this->select($sqlquery);
    }

    public function select_user($name)
    {
        $sqlquery = "SELECT * FROM users WHERE email='".$name."'";
        return $this->select($sqlquery);
    }

}


?>


