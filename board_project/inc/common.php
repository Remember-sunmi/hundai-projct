<?php

class StringUtil{
    public static function nullToValue($field, $val){

        if(isset($_GET[$field]))
            return $_GET[$field];
        else if(isset($_POST[$field]))
            return $_POST[$field];
        else 
            return $val;
      }  
}

?>