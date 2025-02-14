<?php

// $connection = mysqli_connect('localhost', 'edd', 'edd', 'db-cup');
$connection = mysqli_connect('localhost', 'edso0001', 'Airforce1hv', 'edso0001');

if (!$connection) {
  $stat = 'Connection error: ' . mysqli_connect_error();
} else {
  $stat = 'Connection OK';
}

?>