<?php
$query = '';
if (isset($_GET['skytte'])) {
    $query = "SELECT
    CONCAT(LEFT((SELECT fornamn FROM Spelare WHERE reg_id = Statistik.spelare), 1), '.', (SELECT efternamn FROM Spelare WHERE reg_id = Statistik.spelare)) AS Spelare,
    (SELECT lag_namn FROM Lag WHERE lag_id = (SELECT Lag FROM Spelare WHERE reg_id = Statistik.spelare)) AS Lag,
    Statistik.mal AS Mål,
    Statistik.assist AS Assist
FROM
    Statistik
WHERE
    Statistik.mal > 0 OR Statistik.assist > 0
ORDER BY
    Statistik.mal DESC, Statistik.assist DESC";
}
if (isset($_GET['kort'])) {
  $query = "SELECT
    CONCAT(LEFT((SELECT fornamn FROM Spelare WHERE reg_id = Statistik.spelare), 1), '.', (SELECT efternamn FROM Spelare WHERE reg_id = Statistik.spelare)) AS Spelare,
    (SELECT lag_namn FROM Lag WHERE lag_id = (SELECT Lag FROM Spelare WHERE reg_id = Statistik.spelare)) AS Lag,
    Statistik.rottkort AS Rött,
    Statistik.gulakort AS Gult
FROM
    Statistik
WHERE
    Statistik.rottkort > 0 OR Statistik.gulakort > 0
ORDER BY
    Statistik.rottkort DESC, Statistik.gulakort DESC";
}
  
  
include("connection.php");
$result = mysqli_query($connection, $query);
$stat = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>
<?php include("header.php");?>
<!-- Table start -->
<div class="table-wrapper">
<table>
  <caption><?php echo isset($_GET['kort']) ? "Kortligan" : "Skytteligan" ?></caption>
  <tr>

    <th>Spelare</th>
    <th>Lag</th>
    <th><?php echo isset($_GET['kort']) ? "Röda" : "Mål" ?></th>
    <th><?php echo isset($_GET['kort']) ? "Gula" : "Assist" ?></th>


  </tr>
  <!-- insert DATA -->
  <?php foreach ($stat as $s): ?>
    <tr>

      <td>
        <?php echo $s['Spelare']; ?>
      </td>
      <td>
        <?php echo $s['Lag']; ?>
      </td>
      <td>
        <?php echo isset($_GET['kort']) ? $s['Rött'] : $s['Mål'] ?>
      </td>
      <td>
        <?php echo isset($_GET['kort']) ? $s['Gult'] : $s['Assist'] ?>
      </td>


    </tr>
  <?php endforeach; ?>
  <!-- insert end -->
</table>
</div>
<!-- Table end -->