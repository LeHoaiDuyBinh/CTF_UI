<?php 
include_once "./mvc/models/AdminModel/AdminObj.php";
    class Admin extends DB{
        function checkAccount($data){
                try {
                    $arr = [];
                    $db = new DB();
                    $sql = "select * from Users where username=? and password=?";
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