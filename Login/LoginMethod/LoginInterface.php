<?php
    namespace LoginMethod;
    
    interface LoginInterface{
        public function userValidation($userName, $userPassword);
    }