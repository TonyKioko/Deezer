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

        public function getError($error){
            if(!in_array($error,$this->errorArray)){
                $error="";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function validateUsername($un){
            // echo "validating username";
            if(strlen($un) > 25 || strlen($un) < 5){
                array_push($this->errorArray,Constants::$invalidUsername);
                return;
            }
        }
        private function validatefname($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray,Constants::$invalidFirstName);
                return;
            }
            
        }
        private function validatelname($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray,Constants::$invalidLastName);
                return;
            }
            
        }
        private function validateEmail($em){
            if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray,Constants::$invalidEmail);
                return;
            }
            
        }
        
        private function validatePasswords($pw,$pw2){
            if ($pw != $pw2) {
                array_push($this->errorArray, Constants::$passwordDoNotMatch);
                return;
            }
            if (preg_match("/[^A-Za-z0-9]/",$pw)) {
                array_push($this->errorArray,Constants::$passwordNotAlphanumeric);
                return;
            }
            if (strlen($pw) > 30 || strlen($pw) < 5) {
                array_push($this->errorArray,Constants::$invalidLengthPassword);
                return;
            }
            
        }
    }



?>