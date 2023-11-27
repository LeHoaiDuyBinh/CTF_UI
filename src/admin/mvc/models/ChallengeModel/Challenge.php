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
    }
?>