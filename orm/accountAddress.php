<?php
        class AccountAddress
        {
            private $ID;
            private $UNITNUMBER;
            private $STREETNAME;
            private $CITY;
            private $COUNTRY;
            private $ZIPCODE;
            
            public function getId()     { return $this->ID; }
            public function getUnitNumber()  { return $this->UNITNUMBER; }
            public function getStreetName()   { return $this->STREETNAME; }
            public function getCity()   { return $this->CITY; }
            public function getCountry() { return $this->COUNTRY; }
            public function getZipcode() { return $this->ZIPCODE; }
        }
?>