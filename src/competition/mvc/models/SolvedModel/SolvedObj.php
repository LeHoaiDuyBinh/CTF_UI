<?php
 class SolvedObj{
    private $username;
    private $submit_time;

    public function __construct($row)
    {
        $this->username = $row['username'];
        $this->submit_time = $row['submit_time'];
    }

    public function getUsername()
        {
                return $this->username;
        }

        public function setUsername($username)
        {
                $this->username = $username;

        }

        public function getSubmit_time()
        {
                return $this->submit_time;
        }

        public function setSubmit_time($submit_time)
        {
                $this->submit_time = $submit_time;

        }
 }

?>