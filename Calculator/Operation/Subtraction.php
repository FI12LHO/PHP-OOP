<?php
    namespace Operation;
    
    class Subtraction implements OperationInterface{
        public function operation($value1, $value2)
        {
            return $value1 - $value2;
        }
    }