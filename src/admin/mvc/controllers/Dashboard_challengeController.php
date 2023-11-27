<?php
    class Dashboard_challengeController extends Controller{
        private $access = false;

        function Show(){
            $model = $this->model("Challenge");
            $data['chall'] = $model->LoadChall();

            $model = $this->model("Category");
            $data['category'] = $model->LoadCategories();


            var_dump($data['chall']);
            //$page = $this->view("dashboard_challenge", $data);
        }

        function UpLoadFiles($uploadedFile){

            if(!isset($uploadedFile)){
                return "Vui lòng chọn file";
            }

            // gộp các thuộc tính của file thành một cụm

            $uploadPath = './public/challenges';

            
            // di chuyển từng file vào dir vừa tạo
                // lưu lại dir
                $path = $uploadPath . "/" .  basename($uploadedFile["name"]);
                //var_dump($uploadedFile);
                if(move_uploaded_file($uploadedFile['tmp_name'], $path)){
                    return $path;
                }
            return false;
        }

        function ValidateData($data){


            // check thiếu data
            if($this->validateNull($data)){
                return "Vui lòng nhập đủ thông tin";
            }

            $arr_Str["category_name"] = $data['category_name'];

            $arr_Number['category_parent_id'] = $data['category_parent_id'];
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

        function AddChall(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // sinh mã sp
                if($_POST == NULL){
                    echo "reload";
                }
                else {
        
                    $chall_data = array(
                        "chall_name" => $_POST['TenThachThuc'],
                        "description" => $_POST['MoTa'],
                        "score" => $_POST['Diem'],
                        "author" => $_POST['Author'],
                        "flag" => $_POST['Flag']
                    );
                        
                    //$check = $this->ValidateProductData($product_data);
                    $check = 'validated';
                    if($check === "validated"){
                        
                        $uploadedFile = $_FILES["ChallFilePath"];
                        $fileNames = $this->UpLoadFiles($uploadedFile);
                        if($fileNames == false){
                            echo "Lỗi upload file";
                        }
                        else{
                            // thêm ảnh vào data
                            $chall_data["chall_path"] = $fileNames;

                            $model = $this->model("Challenge");
                            $model->InsertProduct($chall_data);
                        }
                    }
                    else{
                        echo $check;
                    }
                }
            }
        }

        function EditCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $this->access = true;
    
                $chall_data = array(
                    "category_id" => $_POST['CategoryID'],
                    "description" => $_POST['CategoryName'],
                    "score" => $_POST['CategoryParentID'],
                    "author" => $_POST['CategoryParentID'],
                    "chall_path" => $_POST['CategoryParentID'],
                    "category_id" => $_POST['CategoryParentID'],
                );
                    
                $check = $this->ValidateData($chall_data);
                if($check == "validated"){
                    if($chall_data["category_id"] <= 8){
                        echo "Không được sửa danh mục cha";
                    }
                    else if($chall_data["category_id"] > 8){
                        $model = $this->model("Category");
                        $model->EditCategory($chall_data);
                    }
                }
                else{
                    echo $check;
                }
            }
        }

        function DeleteCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                $category_data = array(
                    "category_id" => $_POST['category_id'],
                );

                $check = $this->validateNumber($category_data);

                if($check == false){
                    if($category_data["category_id"] <= 8){
                        echo "Không được xóa danh mục cha";
                    }
                    else if($category_data["category_id"] > 8){
                        $model = $this->model("Category");
                        $model->DeleteCategory($category_data);}
                    }
                else{
                    echo $check;
                }
            }
        }
    }
?>