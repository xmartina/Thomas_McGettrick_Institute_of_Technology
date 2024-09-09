<?php
session_start();
include_once($rootDir . 'cms/functions/main_function.php');

if (!isset($conn)) {
    die("Database connection error.");
}
