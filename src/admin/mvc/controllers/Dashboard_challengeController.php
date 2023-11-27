<?php
    class Dashboard_challengeController extends Controller{
        private $access = false;

        function Show(){
            $model = $this->model("Challenge");
            $data['chall'] = $model->LoadChall();

            $model = $this->model("Category");
            $data['category'] = $model->LoadCategories();


            //var_dump($data['chall']);
            $page = $this->view("dashboard_challenge", $data);
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

                // Check if file already exists
                if (file_exists($path)) {
                    return false;
                }
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

            $arr_Number['score'] = $data['score'];
            $arr_Number['category_id'] = $data['category_id'];

            if($this->validateNumber($arr_Number)){
                //var_dump($arr_Number);
                return "Giá trị số không hợp lệ";
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
                        "author" => $_POST['TacGia'],
                        "flag" => $_POST['flag'],
                        "category_id" => $_POST['DanhMuc']
                    );
                    
                    // var_dump($chall_data);
                    // die();
                    $check = $this->ValidateData($chall_data);
                    if($check === "validated"){
                        
                        $uploadedFile = $_FILES["ChallFilePath"];
                        $fileNames = $this->UpLoadFiles($uploadedFile);
                        if($fileNames == false){
                            echo "Lỗi upload file, có thể do up file trùng";
                        }
                        else{
                            // thêm ảnh vào data
                            $chall_data["chall_path"] = $fileNames;

                            $model = $this->model("Challenge");
                            $model->InsertChall($chall_data);
                        }
                    }
                    else{
                        echo $check;
                    }
                }
            }
        }

        function EditChall(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $this->access = true;
    
                $chall_data = array(
                    "chall_name" => $_POST['TenThachThuc'],
                    "chall_name" => $_POST['TenThachThuc'],
                    "description" => $_POST['MoTa'],
                    "score" => $_POST['Diem'],
                    "author" => $_POST['TacGia'],
                    "flag" => $_POST['flag'],
                    "category_id" => $_POST['DanhMuc']
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

        function DeleteChall(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                $chall_data = array(
                    "chall_id" => $_POST['ID'],
                );

                $check = $this->validateNumber($chall_data);

                if($check == false){
                        $model = $this->model("Challenge");
                        $obj = $model->LoadChallPath($chall_data['chall_id']);

                        unlink($obj[0]->getChall_path());
                        
                        $model = $this->model("Challenge");
                        $model->DeleteChall($chall_data);}
                else{
                    echo $check;
                }
            }
        }
    }
?>