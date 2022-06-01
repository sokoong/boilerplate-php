<?php

function dump($data) {
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function redirect($url = './', $time = 0) {
    echo '<meta http-equiv="refresh" content="' . $time . ';URL=' . $url . '" />';
    exit;
}

function curpage() {
    return basename($_SERVER['SCRIPT_NAME']);
}

function renderTable($data, $heading = true) {
    echo "<table style=\"font-family:sans-serif;font-size:12px;\" cellpadding=\"0\" border=\"1\" cellspacing=\"0\">";
    if ($heading) {
        echo "<thead>";
        echo "<tr>";
        foreach ($data[0] as $key => $value) {
            echo "<th style=\"padding:1px 4px;background:#eee;\">" . $key . "</th>";
        }
        echo "</tr>";
        echo "</thead>";
    }
    echo "<tbody>";
    foreach ($data as $key => $value) {
        echo "<tr>";
        foreach ($value as $k => $v) {
            if (is_numeric($v)) {
                echo "<td style=\"padding:1px 4px;text-align:right\">" . $v . "</td>";
            } else {
                echo "<td style=\"padding:1px 4px;\">" . $v . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}