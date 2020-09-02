<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
require_once 'adodb5/adodb.inc.php';
require_once 'inc/function.php';

$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$db = newADOConnection('mysqli');
$db->debug = false;
$db->connect("localhost", "root", "", "database");
$db->setCharset('utf8');
