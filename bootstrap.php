<?php
session_name('uptmsukan');
session_start();
date_default_timezone_set("Asia/Kuala_Lumpur");

if(empty($_SESSION['user_id']))
{    
   header('location:~/../../index.php');
}

error_reporting(E_ALL ^ E_NOTICE);
define('DOC_ROOT', realpath(dirname(__FILE__) . '/'));
define('BASE_URL', 'http://localhost/uptmsukan/');

require 'layout.php';
require_once("includes/dbconnect.php");




