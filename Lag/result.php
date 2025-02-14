<?php

$query = "SELECT * FROM Lag";


$result = mysqli_query($connection, $query);
$lag = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>