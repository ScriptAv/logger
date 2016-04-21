<?php
include_once "settings.php";
include_once "db.php";
include "logger.php";
include "db_logger.php";
include "console_logger.php";

ConsoleLogger::log_stdout(Logger::get_message("ervevrev"));
