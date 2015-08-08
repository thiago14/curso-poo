<?php

namespace TMO\Connection;


class BancoPDO
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $con = '';

    public function __construct(){
        try{
            if($this->con instanceof \PDO){
                return $this->con;
            }else{
                $this->con = new \PDO("mysql:host=$this->host", $this->user, $this->pass);
                $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $install = file_get_contents(WWW.'\TMO\Connection\install.sql');
                $this->con->query($install);
                $this->con->query("use poo");
                return $this->con;
            }
        }catch (\PDOException $e){
            die('Ocorreu um erro: ' .$e->getMessage());
        }
    }

    public function getCon(){
        return $this->con;
    }
}