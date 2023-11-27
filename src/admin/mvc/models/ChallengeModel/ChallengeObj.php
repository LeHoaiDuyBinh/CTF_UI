<?php 
    class ChallengeObj{
        private $chall_id;
        private $chall_name;
        private $description;
        private $score;
        private $author;
        private $chall_path;
        private $flag;
        private $category;
        private $category_id;

        public function __construct($row)
        {
            $this->chall_id = $row['chall_id'];
            $this->chall_name = $row['chall_name'];
            $this->description = $row['description'];
            $this->score = $row['score'];
            $this->flag = $row['flag'];
            $this->author = $row['author'];
            $this->chall_path = $row['chall_path'];
            $this->category = $row['name'];
            $this->category_id = $row['category_id'];

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

        public function getFlag()
        {
                return $this->flag;
        }

        public function setFlag($flag)
        {
                $this->flag = $flag;

        }

        public function getChall_path()
        {
                return $this->chall_path;
        }
        public function setChall_path($chall_path)
        {
                $this->chall_path = $chall_path;
        }

        public function getCategory()
        {
                return $this->category;
        }
        public function setCategory($category)
        {
                $this->category = $category;

        }
        public function getChall_name()
        {
                return $this->chall_name;
        }
        public function setChall_name($chall_name)
        {
                $this->chall_name = $chall_name;

        }

        public function getCategory_id()
        {
                return $this->category_id;
        }

        public function setCategory_id($category_id)
        {
                $this->category_id = $category_id;

        }
    };
?>