<?php
       class ModeAddressAccount
        {
			private $id;
            private $email;
            private $address;
			private $type;
            private $cardnumber;
            
            public function getId()     { return $this->id; }
            public function getEmail()   { return $this->email; }
            public function getCardNumber()   { return $this->cardnumber; }
            public function getAddress() { return $this->address; }
			public function getType() { return $this->type; }
        }
?>