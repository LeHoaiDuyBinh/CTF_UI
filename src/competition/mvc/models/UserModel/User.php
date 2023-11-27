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
    }
?>