<?php
    require_once "vendor/autoload.php";
    
    use Operation\OperationInterface;
    use Operation\Addiction;
    use Operation\Subtraction;
    use Operation\Multiplication;
    use Operation\Division;
    
    // Client class
    class Calculator{
        public $valu1, $value2;
        private $operation;

        public function setValue1($value1){
            $this -> value1 = $value1;
        }

        public function getValue1(){
            return $this -> value1;
        }

        public function setValue2($value2){
            $this -> value2 = $value2;
        }

        public function getValue2(){
            return $this -> value2;
        }

        public function getResultOfOperation(OperationInterface $class){
            $value1 = $this -> value1;
            $value2 = $this -> value2;

            return $this -> operation = $class -> operation($value1, $value2);
        }
    }

    $client = new Calculator();
    $client -> setValue1( 10 );
    $client -> setValue2( 20 );

    // Values
    echo "First value: ";
    echo $client -> getValue1();
    echo "<br>";
    
    echo "Second value: ";
    echo $client -> getValue2();
    echo "<br>";

    // Addiction
    echo "Addiction: ";
    echo $client -> getResultOfOperation(new Addiction);
    echo "<br>";

    // Subtration
    echo "Subtration: ";
    echo $client -> getResultOfOperation(new Subtraction);
    echo "<br>";

    // Multiplication
    echo "Multiplication: ";
    echo $client -> getResultOfOperation(new Multiplication);
    echo "<br>";

    // Division
    echo "Division: ";
    echo $client -> getResultOfOperation(new Division);
    echo "<br>";