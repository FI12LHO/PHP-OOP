<?php
    require_once "vendor/autoload.php";

    use Export\ExportInterface;
    use Export\ExportToArray;
    use Export\ExportToJson;
    use Export\ExportToXml;

    class ExportData{
        private $name;
        private $email;
        private $password;
        private $birthday;

        public function setName($name){
            $this -> name = $name;
        }

        public function getName(){
            return $this -> name;
        }

        public function setEmail($email){
            $this -> email = $email;
        }

        public function getEmail(){
            return $this -> email;
        }

        public function setPassword($password){
            $this -> password = $password;
        }

        public function getPassword(){
            // return $this -> password;
            return false;
        }

        public function setBirthday($birthday){
            $this -> birthday = $birthday;
        }

        public function getBirthday(){
            return $this -> birthday;
        }

        static function getAttributes(ExportData $exportData){
            return get_object_vars($exportData);
        }

        public function dataOutput(ExportInterface $class){
            $attr = ExportData::getAttributes($this);

            return $class -> dataOutput($attr);
        }
    }

    $client = new ExportData();

    $client -> setName("Programmer");
    $client -> setEmail("programmer@dev.com");
    $client -> setPassword("123456789");
    $client -> setBirthday("DD/MM/YYYY");

    echo $client -> dataOutput(new ExportToArray);

    echo "<br><br>";

    echo $client -> dataOutput(new ExportToXml);

    echo "<br><br>";

    echo $client -> dataOutput(new ExportToJson);