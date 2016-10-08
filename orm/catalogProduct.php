<?php
        class CatalogProduct
        {
            private $id;
            private $catalogid;
            private $category;
            private $name;
            private $price;
            private $description;
            
            public function getId()     { return $this->id; }
            public function getCatalogid()  { return $this->catalogid; }
            public function getCategory()   { return $this->category; }
            public function getName()   { return $this->name; }
            public function getPrice() { return $this->price; }
            public function getDescription() { return $this->description; }
        }
?>