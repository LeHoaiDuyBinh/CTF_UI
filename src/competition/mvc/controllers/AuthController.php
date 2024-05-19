<?php

    class AuthController extends Controller{
        function Show(){
            $data = [];
            $page = $this->view("login", $data);
        }
        
        function Login(){

            // lấy và validate data
            $data = [];
            $username = '';
            $password = '';
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
            }

            array_push($data, $username);
            $pass_hash = hash('sha256', $password);
            array_push($data, $pass_hash);

            // gọi model xử lý data
            $model = $this->model("User");
            $result = $model->checkAccount($data);

            if($result === "done"){
                $_SESSION['usr'] = $username;

                // sinh một id khác nhưng data vẫn giữ nguyên
                session_regenerate_id(true);
                header("Location: /Challenge");
            }
            else{
                $_SESSION['message'] = "Wrong username or password";
                header("Location: /Auth");
                exit;
            }

        }

        function Registry(){

            // lấy và validate data
            $data = [];
            $username = '';
            $password = '';
            if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
                $data['username'] = $_POST['username'];
                $data['password'] = $_POST['password'];
                $data['email'] = $_POST['email'];
            }
            $pass_hash = hash('sha256', $data['password']);
            $data['password'] = $pass_hash;
            // gọi model xử lý data
            $model = $this->model("User");
            $result = $model->isHaveAccount($data);

            if($result == "no"){
                $result = $model->addUser($data);
                
                if($result == "done"){
                    echo "done";
                }
                else{
                    echo "error";
                }
            }
            else{
                echo "This username already exists";
                //echo $result;
            }
        }

        public function Logout(){
			// Hủy tất cả các biến session
			session_unset();

			// Xóa tất cả các session đã lưu trữ trên máy chủ
			//session_destroy(); // có thể dùng để buộc logout

			// Chuyển hướng đến trang chính hoặc trang đăng nhập
			header("Location: /Auth");
            exit;
		}
    }
?>