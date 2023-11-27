<?php
    class Dashboard_categoryController extends Controller{
        private $access = false;


        function Show(){
            $model = $this->model("Category");
            $data = $model->LoadCategories();
            //var_dump($data);
            $page = $this->view("dashboard_category", $data);
        }

        function ValidateData($data){
            // check thiếu data
            if($this->validateNull($data)){
                return "Vui lòng nhập đủ thông tin";
            }

            $arr_Str["category_name"] = $data['category_name'];

            $arr_Number['category_id'] = $data['category_id'] == null ? 0 : $data['category_id'];

            if($this->validateNumber($arr_Number)){
                //var_dump($arr_Number);
                return "Giá trị số không hợp lệ";
            }

            if($this->validateSpecialCharacter($arr_Str)){
                return "Dữ liệu không được chứa kí tự đặc biệt";
            }
            
            return 'validated';
        }

        function AddCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $this->access = true;
                $category_data = array(
                    "category_name" => $_POST['TenDanhMuc'],
                );
                    
                $check = $this->ValidateData($category_data);
                if($check == "validated"){
                    
                        $model = $this->model("Category");
                        $model->InsertCategory($category_data);
                }
                else{
                    echo $check;
                }
            }
        }

        function EditCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                //$this->access = true;
    
                $category_data = array(
                    "category_id" => $_POST['MaDanhMuc'],
                    "category_name" => $_POST['TenDanhMuc'],
                );
                    
                $check = $this->ValidateData($category_data);
                if($check == "validated"){
                        $model = $this->model("Category");
                        $model->EditCategory($category_data);
                }
                else{
                    echo $check;
                }
            }
        }

        function DeleteCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                $category_data = array(
                    "category_id" => $_POST['MaDanhMuc'],
                );

                $check = $this->validateNumber($category_data);
                if($check === false){
                        $model = $this->model("Category");
                        $model->DeleteCategory($category_data);
                    }
                else{
                    echo $check;
                }
            }
        }
    }
?>