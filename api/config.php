<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
require_once 'vendor/autoload.php';
require_once 'fn.php';

// $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
// $db = newADOConnection('mysqli');
// $db->debug = false;
// ($_SERVER['SERVER_NAME'] == 'localhost') ? $db->connect("localhost", "root", "", "local_db_name") : $db->connect("localhost", "root", "", "");
// $db->setCharset('utf8');