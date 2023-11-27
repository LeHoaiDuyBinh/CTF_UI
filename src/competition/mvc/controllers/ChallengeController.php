<?php

    class ChallengesController extends Controller{
        function Show(){
            $data = [];
            $page = $this->view("challenges", $data);
        }
    }
?>