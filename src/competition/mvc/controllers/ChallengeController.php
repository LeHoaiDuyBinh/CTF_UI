<?php

    class ChallengeController extends Controller{
        function Show(){
            $data = [];

            $model = $this->model('User');
            $score = $model->getScore($_SESSION['usr']);

            $data['score'] = $score;
            $data['page'] = 'category';
            $page = $this->view("challenges", $data);
        }
        function Category($params){
            // localhost/Challenge/Network/FTP-chall/...
            $data = [];
            $model = $this->model('User');
            $score = $model->getScore($_SESSION['usr']);

            $data['score'] = $score;
            if($params == null || $params[0] == '')
            {
                $data['page'] = 'category';
                $page = $this->view("challenges", $data);
            }
            else{
                        $model = $this->model('Category');
                        $list = $model->LoadCategories();
                        $list_chall = [];
                        foreach($list as $each){
                            if($each->getName() == $params[0]){
                                $model = $this->model('Challenge');
                                $data_chall['category_id'] = $each->getCategory_id();
                                $data_chall['username'] = $_SESSION['usr'];
                                $list_chall = $model->LoadChall($data_chall);
                                break;
                            }
                        }
                        if($list_chall == null){
                            $page = $this->view("404", $data);
                        }
                        else{
                            $chall_details = null;
                            if($params[1] != ''){

                                foreach($list_chall as $each){
                                    if($params[1] === str_replace(' ', '', $each->getChall_name())){
                                        $chall_details = $each;
                                        $data['page'] = 'chall_details';
                                        $data['chall_details'] = $chall_details;
                                        $model = $this->model('Solved');
                                        $data['user_submitted'] = $model->LoadUserSubmitted($each->getChall_id());
                                        if(empty($data['user_submitted'])){
                                            $data['user_submitted'] = "None";
                                        }
                                        $this->view("challenges", $data);
                                        break;
                                    }
                                }
                                if($chall_details === null){
                                    $page = $this->view("404", $data);
                                }
                            }
                            else{
                                $data['page'] = 'list_chall';
                                $data['list_chall'] = $list_chall;
                                $page = $this->view("challenges", $data);
                            }
                        }
                    }
        }
    }
?>