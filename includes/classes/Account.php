<?php

    class Account {

        private $errorArray;

        public function __construct (){
           $this->errorArray = array();


        }
        public function register($un,$fn,$ln,$em,$pw,$pw2){
            $this->validateUsername($un);
            $this->validatefname($fn);
            $this->validatelname($ln);
            $this->validateEmail($em);
            $this->validatePasswords($pw,$pw2);

            if (empty($this->errorArray)){
                return true;
            } else {
                return false;

            }

        }

        private function validateUsername($un){
            // echo "validating username";
            if(strlen($un) > 25 || strlen($un) < 5){
                array_push($this->errorArray,'username must be between 5 and 25 characters');
                return;
            }
        }
        private function validatefname($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray,'firstname must be between 5 and 25 characters');
                return;
            }
            
        }
        private function validatelname($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray,'lastname must be between 5 and 25 characters');
                return;
            }
            
        }
        private function validateEmail($em){
            if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray,'Email is invalid');
                return;
            }
            
        }
        
        private function validatePasswords($pw,$pw2){
            if ($pw != $pw2) {
                array_push($this->errorArray, "Passwords do not match");
                return;
            }
            if (preg_match("/[^A-Za-z0-9]/",$pw)) {
                array_push($this->errorArray, 'Password can only contain numbers and letters');
                return;
            }
            if (strlen($pw) > 30 || strlen($pw) < 5) {
                array_push($this->errorArray, 'Password must be between 5 and 30 characters');
                return;
            }
            
        }
    }



?>