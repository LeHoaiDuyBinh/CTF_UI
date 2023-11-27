<?php 
include_once "./mvc/models/ChallengeModel/ChallengeObj.php";
    class Challenge extends DB{
        function LoadChall(){
                try {
                    $arr = [];
                    $db = new DB();
                    $sql = "SELECT CH.*, C.name FROM Challenges AS CH, Categories AS C 
                    WHERE CH.category_id = C.category_id";
                    $sth = $db->select($sql);
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

        function LoadChallPath($id){
            try {
                $arr = [];
                $db = new DB();
                $sql = "SELECT CH.* FROM Challenges AS CH WHERE CH.chall_id = ?";
                $params = array($id);
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

        function InsertChall($data){
            try {
                $db = new DB();
                $sql = "INSERT INTO `Challenges`(`chall_name`,`description`, `score`, `author`, `flag`, `chall_path`, `category_id`) 
                VALUES (?,?,?,?,?,?, ?)";
                $params = array($data['chall_name'], $data['description'], $data['score'],$data['author'], $data['flag'], $data['chall_path'], $data['category_id']);
                $db->execute($sql, $params);

                echo "done";
            } catch (PDOException $e) {

                //echo "Lỗi khi thêm chall";
                echo  $sql . "<br>" . $e->getMessage();
            }
        }

        function EditChall($data){
            try {

                $db = new DB();
                $sql = "UPDATE `Challenges` SET `chall_name`=?,`description`=?,`score`=?,`author`=?,`flag`=?,`category_id`=? 
                WHERE `chall_id` = ?";
                $params = array($data['chall_name'], $data['description'], $data['score'],$data['author'], $data['flag'], $data['category_id'], $data['chall_id']);
                $db->execute($sql, $params);

                echo "done";
            } catch (PDOException $e) {

                //echo "Lỗi khi thêm chall";
                echo  $sql . "<br>" . $e->getMessage();
            }
        }

        function DeleteChall($data){
            try {
                $db = new DB();
                $sql = "DELETE FROM `Challenges` AS C WHERE C.chall_id = ?";
                $params = array($data['chall_id']);
                $db->execute($sql, $params);

                echo "done";
            } catch (PDOException $e) {

                //echo "Lỗi khi thêm chall";
                echo  $sql . "<br>" . $e->getMessage();
            }
        }
    }
?>