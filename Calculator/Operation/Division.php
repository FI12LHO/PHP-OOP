<?php
    namespace Operation;
    
    class Division implements OperationInterface{
        public function operation($value1, $value2)
        {
            return $value1 / $value2;
        }
    }