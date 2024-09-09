<?php
// Get the current URL
$currentUrl = $_SERVER['REQUEST_URI'];

// Check if the URL contains 'cms'
if (strpos($currentUrl, 'cms') !== false) {
    $rootDir = '/home/multistream6/domains/thomas.matagram.com/public_html/cms/';
} else {
    $rootDir = '/home/multistream6/domains/thomas.matagram.com/public_html/';
}

include_once ($rootDir.'include/db_connect.php');
