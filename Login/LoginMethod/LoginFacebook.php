<?php 
    namespace LoginMethod;

    class LoginFacebook implements LoginInterface{
        public function userValidation($userName, $userPassword)
        {
            $userDefault = "";
            $passDefault = "";

            if($userName == $userDefault && $userPassword == $passDefault){
                echo "success when logging on Facebook";
                return true;
            }
            else{
                echo "failed to log on Facebook";
            }
            
            return false;
        }
    }