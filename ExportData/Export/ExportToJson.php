<?php
    namespace Export;
    
    class ExportToJson implements ExportInterface{
        public function dataOutput($attr){
            $array = "{\n\ttitle: " . get_class($this);

            foreach($attr as $attribute => $value){
                $array .= ", $attribute : '$value'";
            }

            $array .= "\n}";

            return $array;
        }
    }