<?php

require_once file_exists('config.php') ? 'config.php' : '../config.php';
$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');
$action = (isset($_GET['action'])) ? $_GET['action'] : false;
$data = $_POST;

if ($action == '') {
    # code...
}