<?php
    namespace Export;
    
    class ExportToArray implements ExportInterface{
        public function dataOutput($attr){
            $array = "[ [" . get_class($this) . "]";

            foreach($attr as $attribute => $value){
                $array .= ", [$attribute => $value]";
            }

            $array .= " ]";

            return $array;
        }
    }