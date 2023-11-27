<?php 
include_once "./mvc/models/CategoryModel/CategoryObj.php";
    class Category extends DB{

        function LoadCategories(){
                try {
                    $db = new DB();
                    $sql = "SELECT * FROM Categories";
                    $sth = $db->select($sql);
                    $arr = [];
                    $categories_from_DB = $sth->fetchAll();
                    foreach ($categories_from_DB as $row) {

                        // tạo sản phẩm
                        $obj = new CategoryObj($row);
                        
                        // thêm obj vào mảng
                        $arr[] = $obj;
                    }
                    return $arr;
                } catch (PDOException $e) {
                    return  $sql . "<br>" . $e->getMessage();
                }
        }

        function InsertCategory($data){
            try {
                $db = new DB();
                $sql = "INSERT INTO `Categories`(`name`) VALUES (?);";
                $params = array($data['category_name']);
                $db->execute($sql, $params);

                echo "done";
            } catch (PDOException $e) {

                echo "Lỗi khi thêm danh mục";
                //echo  $sql . "<br>" . $e->getMessage();
            }
        }

        function EditCategory($data){
            try {
                $db = new DB();
                $sql = "UPDATE `Categories` SET `name` = ?, `parent_category_id` = ? WHERE `category_id` = ?;";
                $params = array($data['category_name'], $data['category_parent_id'], $data['category_id']);
                $db->execute($sql, $params);

                echo "done";
            } catch (PDOException $e) {

                echo "Lỗi khi sửa danh mục";
                //echo  $sql . "<br>" . $e->getMessage();
            }
        }

        function DeleteCategory($data){
            try {
                $db = new DB();
                $sql = "DELETE FROM `Categories` WHERE `category_id` = ?;";
                $params = array($data['category_id']);
                $db->execute($sql, $params);

                echo "done";
            } catch (PDOException $e) {

                echo "Lỗi khi sửa danh mục";
                //echo  $sql . "<br>" . $e->getMessage();
            }
        }
    }
?>