<?php 
include_once "./mvc/models/UserModel/UserObj.php";
    class User extends DB{
        function checkAccount($data){
                try {
                    $arr = [];
                    $db = new DB();
                    $sql = "SELECT * FROM Users WHERE username=? AND password=?";
                    $params = array($data[0],$data[1]);
                    $sth = $db->select($sql, $params);
                    if ($sth->rowCount() > 0) {
                        return "done";
                    }
                    return "Wrong username or password";
                } catch (PDOException $e) {
                    return  $sql . "<br>" . $e->getMessage();
                }
        }

        function isHaveAccount($data){
            try {
                $arr = [];
                $db = new DB();
                $sql = "SELECT * FROM Users WHERE username=?";
                $params = array($data['username']);
                $sth = $db->select($sql, $params);
                if ($sth->rowCount() > 0) {
                    return "have";
                }
                return "no";
            } catch (PDOException $e) {
                return  $sql . "<br>" . $e->getMessage();
            }
    }

        function getScore($username){
            try {
                $arr = [];
                $db = new DB();
                $sql = "SELECT * FROM Users WHERE username=?";
                $params = array($username);
                $sth = $db->select($sql, $params);
                foreach ($sth as $row) {
                    return $row['score'];
                }
                return "0";
            } catch (PDOException $e) {
                return  $sql . "<br>" . $e->getMessage();
            }
    } 

    function addUser($data){
        try {
            $db = new DB();
            $sql = "INSERT INTO `Users`(`username`, `password`, `email`) 
            VALUES (?,?,?);";
            $params = array($data['username'],$data['password'], $data['email']);
            $db->execute($sql, $params);
            return "done";
        } catch (PDOException $e) {
            return  $sql . "<br>" . $e->getMessage();
        }
}
    }
?>