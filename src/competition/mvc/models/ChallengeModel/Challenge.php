<?php 
include_once "./mvc/models/ChallengeModel/ChallengeObj.php";
    class Challenge extends DB{
        function LoadChall($data){
                try {
                    $arr = [];
                    $db = new DB();
                    $sql = "SELECT TMP.*, TMP2.submit_time FROM (
                        SELECT CH.*, C.name FROM `Challenges` AS CH, Categories AS C 
                        WHERE CH.category_id = C.category_id AND CH.category_id = ?
                        ) AS TMP 
                        LEFT JOIN (
                            SELECT S.* FROM Solved AS S, Users AS U 
                            WHERE S.username = U.username AND U.username = ?
                            ) AS TMP2 ON TMP.chall_id = TMP2.chall_id";
                    $params = array($data['category_id'], $data['username']);
                    $sth = $db->select($sql, $params);
                    $arr = [];
                    $chall_from_DB = $sth->fetchAll();
                    foreach ($chall_from_DB as $row) {

                        // tạo sản phẩm
                        $obj = new ChallengeObj($row);
                        
                        // thêm obj vào mảng
                        $arr[] = $obj;
                    }
                    return $arr;
                } catch (PDOException $e) {
                    return  $sql . "<br>" . $e->getMessage();
                }
        }

        function checkFlag($data){
            try {
                $arr = [];
                $db = new DB();
                $sql = "SELECT CH.* FROM Challenges AS CH WHERE CH.chall_id = ? AND CH.flag = ? ";
                $params = array($data['chall_id'], $data['flag']);
                $sth = $db->select($sql, $params);
                $arr = [];
                $chall_from_DB = $sth->fetchAll();
                foreach ($chall_from_DB as $row) {
                    return true;
                }   
                return false;
            } catch (PDOException $e) {
                return  $sql . "<br>" . $e->getMessage();
            }
    }

        function addScore($data){
            try {
                $db = new DB();
                $sql = "UPDATE `Users` SET `score`= `score` + ? WHERE `username` = ?";
                $params = array($data['score'], $data['username']);
                $db->execute($sql, $params);
                echo "done";
            } catch (PDOException $e) {

                //echo "Lỗi khi thêm chall";
                echo  $sql . "<br>" . $e->getMessage();
            }
        }

        function solve($data){
            try {
                $db = new DB();
                $sql = "INSERT INTO `Solved`(`chall_id`,`username`) 
                VALUES (?,?)";
                $params = array($data['chall_id'], $data['username']);
                $db->execute($sql, $params);
                $this->addScore($data);
            } catch (PDOException $e) {

                //echo "Lỗi khi thêm chall";
                echo  $sql . "<br>" . $e->getMessage();
            }
        }

        function checkSubmit($data){
            try {
                $arr = [];
                $db = new DB();
                $sql = "SELECT * FROM `Solved` WHERE username = ? AND chall_id = ?";
                $params = array($data['username'], $data['chall_id']);
                $sth = $db->select($sql, $params);
                $submit_db = $sth->fetchAll();
                foreach ($submit_db as $row) {
                    return true;
                }   
                return false;
            } catch (PDOException $e) {
                return  $sql . "<br>" . $e->getMessage();
            }
    }
    }
?>