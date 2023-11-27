<?php 
    class UserObj{
        private $admin_id;
        private $username;
        private $password;
        private $email;

        public function __construct($row)
        {
            $this->admin_id = $row['admin_id'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->email = $row['email'];
        }

        
        public function getAdmin_id()
        {
                return $this->admin_id;
        }

        public function getUsername()
        {
                return $this->username;
        }

        public function getPassword()
        {
                return $this->password;
        }


        public function setAdmin_id($admin_id)
        {
                $this->admin_id = $admin_id;

        }

        public function setUsername($username)
        {
                $this->username = $username;

        }

        public function setPassword($password)
        {
                $this->password = $password;

        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;
        }
    };
?>