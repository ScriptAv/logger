<?php

    class Logger
    {
        static public $result;
        static public function get_message($var) 
        {
            if ($var){
                $date = '[ ' . date('Y-m-d H:i:s') . " ]\n";
                self::$result .= $date;
                if (is_array($var) || is_object($var)){
                    self::$result .= print_r($var, 1);
                }else{
                    self::$result .= $var;
                }
            self::$result.= "\n";
            return self::$result;
            }   
        }
    }
