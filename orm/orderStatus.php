<?php 
    class OrderStatus
    {
        private $status;
        private $id;
        private $quantity;
        private $name;
        private $price;
            
        public function getStatus()     { return $this->status; }
        public function getId()  { return $this->id; }
        public function getQuantity()   { return $this->quantity; }
        public function getName() { return $this->name; }
        public function getPrice() { return $this->price; }
    }

    
?> 
