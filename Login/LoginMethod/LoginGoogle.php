<?php
    namespace LoginMethod;

    class LoginGoogle implements LoginInterface{
        public function userValidation($userName, $userPassword)
        {
            $userDefault = "";
            $passDefault = "";

            if($userName == $userDefault && $userPassword == $passDefault){
                echo "success when logging on Google";
                return true;
            }
            else{
                echo "failed to log on Google";
            }
            
            return false;
        }
    }