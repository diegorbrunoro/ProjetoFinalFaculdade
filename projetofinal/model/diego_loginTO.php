<?php

require_once 'model/dbConection.php';

class diego_loginTO extends dbConection{
    
        private $email="";
        private $password="";
        
        public function getCpf(){
            return $this->email;
        }
        public function setCpf ($email){
            $this->email = $email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword ($password){
            $this->password = $password;
        }
}
?>
