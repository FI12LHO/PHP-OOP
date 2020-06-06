<?php
    namespace LoginMethod;

    class LoginGitHub implements LoginInterface{
        public function userValidation($userName, $userPassword)
        {
            $userDefault = "";
            $passDefault = "";

            if($userName == $userDefault && $userPassword == $passDefault){
                echo "success when logging on GitHub";
                return true;
            }
            else{
                echo "failed to log on GitHub";
            }

            return false;
        }
    }