<?php

namespace App\Models;

    class User{
        public $first_name;
        public $last_name;
        public $email;
        public $products;

        public function setFirstName($firstName){
            $this->first_name = trim($firstName); //this would be this.firstname = first_name; in java
        }
        public function getFirstName(){
            return $this->first_name;
        }

        public function setLastName($lastName){
            $this->last_name = $lastName;
        }
        public function getLastName(){
            return $this->last_name;
        }
        public function getFullName(){
            return "$this->first_name $this->last_name";
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getEmailVariables(){
            return[
                'full_name' => $this->getFullName(),
                'email' => $this->getEmail(),
            ];

        
        }
        public function setProducts($products){
            $this->products = $products;
              
                      
                }
        
        public function getProducts(){
            return $this->products;
        }
    }


