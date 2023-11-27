<?php 
    class AdminObj{
        private $chall_id;
        private $description;
        private $score;
        private $author;
        private $chall_path;

        public function __construct($row)
        {
            $this->chall_id = $row['chall_id'];
            $this->description = $row['description'];
            $this->score = $row['score'];
            $this->author = $row['author'];
            $this->chall_path = $row['chall_path'];
        }

        public function getChall_id()
        {
                return $this->chall_id;
        }

        public function setChall_id($chall_id)
        {
                $this->chall_id = $chall_id;

        }

        public function getDescription()
        {
                return $this->description;
        }
        public function setDescription($description)
        {
                $this->description = $description;
        }

        public function getScore()
        {
                return $this->score;
        }

        public function setScore($score)
        {
                $this->score = $score;
        }

        public function getAuthor()
        {
                return $this->author;
        }

        public function setAuthor($author)
        {
                $this->author = $author;
        }

        public function getChall_path()
        {
                return $this->chall_path;
        }
        public function setChall_path($chall_path)
        {
                $this->chall_path = $chall_path;
        }
    };
?>