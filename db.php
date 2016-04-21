<?php

    class DbConnect
    {
        private static $instance = null;

        public static function getInstance()
        {
            if (null === self::$instance){
                self::$instance = new self();
            }
            return self::$instance;
        }
        private function __clone() {}

        private function __construct() {
            if (!mysql_connect(HOST, USER, PASS)) exit(mysql_error());
            if (!mysql_query("CREATE DATABASE IF NOT EXISTS ". DBNAME)) exit(mysql_error());
        }

        public function test()
        {
            var_dump($this);
        }
    }