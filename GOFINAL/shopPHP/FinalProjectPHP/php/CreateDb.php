<?php


class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $tablename;
    public $dbname;
    public $con;

    public function __construct(
        $dbname = "riseup",
        $tablename="products",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);


        }else{
            return false;
        }
        return false;

    }
        public function getData(){
            $sql="Select * from $this->tablename";
            $result=mysqli_query($this->con,$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }

    }
    function getQueryResult($sqlquery)
    {
        // $query='select...'
        //mysqli_query($conn,$query);

        // $this->connectTo();

        $resultDB = $this->dbvalues->query($sqlquery);

        if(!$resultDB)
        {
            $conn_array['message']='MysQL query error: '.$this->dbvalues->errno." ".$this->dbvalues->error;
        }
        else {

            $conn_array['message']='Successful connect to db';

            $productDB = $resultDB->fetch_all(MYSQLI_ASSOC);
            $conn_array['resultDB']=$productDB;

            $resultDB->free_result();



        }

        return $conn_array;

        function getQueryResult($sqlquery)
        {
            // $query='select...'
            //mysqli_query($conn,$query);

            // $this->connectTo();

            $resultDB = $this->dbvalues->query($sqlquery);

            if(!$resultDB)
            {
                $conn_array['message']='MysQL query error: '.$this->dbvalues->errno." ".$this->dbvalues->error;
            }
            else {

                $conn_array['message']='Successful connect to db';

                $productDB = $resultDB->fetch_all(MYSQLI_ASSOC);
                $conn_array['resultDB']=$productDB;

                $resultDB->free_result();



            }

            return $conn_array;


        }
    }
}