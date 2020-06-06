<?php
    require_once "vendor/autoload.php";

    use LoginMethod\LoginInterface;
    use LoginMethod\LoginFacebook;
    use LoginMethod\LoginGitHub;
    use LoginMethod\LoginGoogle;

    class Login{
        private $user, $password;
        private $loginMethod;

        public function setUser($user){
            $this -> user = $user;
        }

        public function getUser(){
            return $this -> user;
        }

        public function setPassword($password){
            $this -> user = $password;
        }

        public function getPassword(){
            // return $this -> password;
            return false;
        }

        public function setMethodLogin(LoginInterface $class){
            $user = $this -> user;
            $password = $this -> password;
            
            $this -> loginMethod = $class -> userValidation($user, $password);
        }
    }

    $login = new Login();

    $login -> setUser("");
    $login -> setPassword("");

    $login -> setMethodLogin(new LoginFacebook);

    echo "<br>";

    $login -> setMethodLogin(new LoginGitHub);
    
    echo "<br>";

    $login -> setMethodLogin(new LoginGoogle);