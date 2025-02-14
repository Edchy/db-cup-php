<?php

if (isset($_GET['lag'])) {
  
  $lag = $_GET['lag'];
  include("connection.php");
$query = "SELECT
    Spelare.fornamn,
    Spelare.efternamn,
    Spelare.trojnummer,
    Spelare.position,
    Lag.lag_namn AS Lag
FROM
    Spelare
JOIN
    Lag ON Spelare.lag = Lag.lag_id
WHERE
    Lag.lag_namn = '$lag';";
$result = mysqli_query($connection, $query);
$spelare = mysqli_fetch_all($result, MYSQLI_ASSOC);
}



?>
<?php include("header.php");?>
<!-- Table start -->
<div class="table-wrapper">
<table>
  <caption>Spelare</caption>
  <tr>

    <th>Förnamn</th>
    <th>Efternamn</th>
    <th>Tröjnummer</th>
    <th>Position</th>
    <th>Lag</th>

  </tr>
  <!-- insert DATA -->
  <?php foreach ($spelare as $spelare): ?>
    <tr>

      <td>
        <?php echo $spelare['fornamn']; ?>
      </td>
      <td>
        <?php echo $spelare['efternamn']; ?>
      </td>
      <td>
        <?php echo $spelare['trojnummer']; ?>
      </td>
      <td>
        <?php echo $spelare['position']; ?>
      </td>
      <td>
        <?php echo $spelare['Lag']; ?>
      </td>

    </tr>
  <?php endforeach; ?>
  <!-- insert end -->
</table>
</div>
<!-- Table end -->