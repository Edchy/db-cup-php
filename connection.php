<?php

// $connection = mysqli_connect('localhost', 'edd', 'edd', 'db-cup');
$connection = mysqli_connect('localhost', 'so0001', 'rce1hv', 'so0001');

if (!$connection) {
  $stat = 'Connection error: ' . mysqli_connect_error();
} else {
  $stat = 'Connection OK';
}

?>
