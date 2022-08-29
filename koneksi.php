<?php 
class database {


    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "db_pegawai";
    var $connection;


    function Connect(){
        $this->connection=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        return $this->connection;
    
    }
        var $con;
        var $query;
        var $data;
        var $result;

        function GetData_All ($q){

            $this->db = new database();
            $this->con=$this->db->Connect();

            $this->query=mysqli_query($this->con,$q);
            while($this->data=mysqli_fetch_array($this->query)){
                $this->result[]=$this->data;
            }
            return $this->result;
        } 

}