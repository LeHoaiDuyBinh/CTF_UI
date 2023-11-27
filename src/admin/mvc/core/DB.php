<?php
    class DB{
        public $conn;
        public function __construct() {
            //ini_set('display_errors', 'Off');
            $connectionString = "mysql:host=" . getenv('MYSQL_HOSTNAME') . ";port=" . getenv('MYSQL_PORT') . ";dbname=" . getenv('MYSQL_DATABASE');
            $conn = new \PDO($connectionString, getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
            $this->conn = $conn;
        }
        public function select($sql, $params = null)
        {
            $connect = $this->conn;
            if($params != null){

                $res = $connect->prepare($sql);
                $res->execute($params);
            }
            else {
                $res = $connect->query($sql);
            }
            $res->setFetchMode(PDO::FETCH_ASSOC);
            $connect = null;
            return $res;
        }

        public function execute($sql, $params){
            $connect = $this->conn;
            $res = $connect->prepare($sql);
            $res->execute($params);
            $connect = null;
        }
    }
?>