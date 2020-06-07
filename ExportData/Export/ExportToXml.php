<?php
    namespace Export;
    
    class ExportToXml implements ExportInterface{
        public function dataOutput($attr){
            $array = "<" . get_class($this) . ">\n";

            foreach($attr as $attribute => $value){
                $array .= "\t<$attribute> $value </$attribute>\n";
            }
            
            $array .= "</" . get_class($this) . ">";

            return $array;
        }
    }
