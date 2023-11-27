<?php

    class ChallengeController extends Controller{
        function Show(){
            $data = [];
            $data['page'] = 'category';
            $page = $this->view("challenges", $data);
        }
        function Category($params){
            // localhost/Challenge/Network/FTP-chall/...
            $data = [];
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
                                $list_chall = $model->LoadChall($each->getCategory_id());
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