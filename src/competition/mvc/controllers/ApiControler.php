<?php

    class ApiController extends Controller{
        function CheckFlag(){

            // lấy và validate data
            $data = [];
            $chall_id = '';
            $flag = '';
            $user_id = '';
            if(isset($_POST['chall_id']) && isset($_POST['flag']) && isset($_POST['id_user'])){
                $chall_id = $_POST['id'];
                $flag = $_POST['flag'];
                $user_id = $_POST['id_user'];
            }

            array_push($data, $chall_id);
            array_push($data, $flag);
            array_push($data, $user_id);


            //var_dump($data);
            // gọi model xử lý data
            $model = $this->model("Challenge");
            $result = $model->checkFlag($data);

            if($result === true){
                $model->solve($data);
                echo "done";
            }
            else{
                echo "wrong";
            }

        }
    }
?>