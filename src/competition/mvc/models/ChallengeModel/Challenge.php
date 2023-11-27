<?php 
include_once "./mvc/models/ChallengeModel/ChallengeObj.php";
    class Challenge extends DB{
        function LoadChall($data){
                try {
                    $arr = [];
                    $db = new DB();
                    $sql = "SELECT * FROM `Challenges` AS CH, Categories AS C 
                    WHERE CH.category_id = C.category_id AND CH.category_id = ?";
                    $params = array($data['category_id']);
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

        function addScore($data){
            try {
                $db = new DB();
                $sql = "INSERT INTO `Challenges`(`chall_id`,`username`) 
                VALUES (?,?)";
                $params = array($data['chall_id'], $data['username']);
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
                $sql = "INSERT INTO `Challenges`(`chall_id`,`username`) 
                VALUES (?,?)";
                $params = array($data['chall_id'], $data['username']);
                $db->execute($sql, $params);
                $this->addScore($data);
                echo "done";
            } catch (PDOException $e) {

                //echo "Lỗi khi thêm chall";
                echo  $sql . "<br>" . $e->getMessage();
            }
        }
    }
?>