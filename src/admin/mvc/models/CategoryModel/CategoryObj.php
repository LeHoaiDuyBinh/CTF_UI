<?php
    class CategoryObj{
        private $category_id;
        private $name;

        public function __construct($row)
        {
            $this->category_id = $row['category_id'];
            $this->name = $row['name'];
        }

        public function getCategory_id()
        {
                return $this->category_id;
        }

        public function setCategory_id($category_id)
        {
                $this->category_id = $category_id;

        }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;
        }
    }
?>