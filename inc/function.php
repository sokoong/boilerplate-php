<?php

function dump($data) {
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function redirect($url = './', $time = 0) {
    echo '<meta http-equiv="refresh" content="' . $time . ';URL=' . $url . '" />';
    exit;
}