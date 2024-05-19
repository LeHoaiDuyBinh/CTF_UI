<?php

    class ApiController extends Controller{
        function CheckFlag(){

            // lấy và validate data
            $data = [];
            $chall_id = '';
            $flag = '';
            $username = '';
            $score = '';
            if(isset($_POST['id_chall']) && isset($_POST['FLAG']) && isset($_POST['username']) && isset($_POST['score_chall'])){
                $chall_id = $_POST['id_chall'];
                $flag = $_POST['FLAG'];
                $username = $_POST['username'];
                $score = $_POST['score_chall'];
            }

            // array_push($data, $chall_id);
            // array_push($data, $flag);
            // array_push($data, $score);
            // array_push($data, $username);
            $data['chall_id'] = $chall_id;
            $data['flag'] = $flag;
            $data['score'] = $score;
            $data['username'] = $username;

            // var_dump($data);
            // die();
            //var_dump($data);
            // gọi model xử lý data
            $model = $this->model("Challenge");
            $result = $model->checkFlag($data);
            if($result == true){

                $result =  $model->checkSubmit($data);
                if($result == true){
                    echo $result;
                }else{
                    $model->solve($data);
                }
            }
            else{
                echo "wrong";
            }

        }
    }
?>