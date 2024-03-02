<?php

$json = file_get_contents('ips.json');
$data = json_decode($json, true);

print_r($data);

if (in_array($_SERVER['REMOTE_ADDR'], $data['reject'])) {
    echo "Invalid IP";
} elseif (in_array($_SERVER['REMOTE_ADDR'], $data['allow']) && !in_array($_SERVER['REMOTE_ADDR'], $data['reject'])) {
    echo "Response";
} else {
    echo "Invalid IP";
}
