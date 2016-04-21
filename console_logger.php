<?php

    class ConsoleLogger extends Logger
    {
        public function log_stdout($message) 
        {
            $fp = fopen("php://stdout", 'w');
            fputs($fp, $message);
            rewind($fp);
            echo stream_get_contents($fp);
            fclose($fp);
        }
    }