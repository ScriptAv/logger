<?php

    class DbLogger extends Logger
    {
        public function log_db() 
        {
            $db_connect = DbConnect::getInstance();

        }
    }