<?php 
include_once "./mvc/models/SolvedModel/SolvedObj.php";
    class Solved extends DB{

        function LoadUserSubmitted($chall_id){
                try {
                    $db = new DB();
                    $sql = "SELECT * FROM `Solved` AS S WHERE S.chall_id = ?";
                    $arr = [];
                    $params = array($chall_id);
                    $sth = $db->select($sql, $params);
                    foreach ($sth as $row) {

                        // tạo sản phẩm
                        $obj = new SolvedObj($row);
                        
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