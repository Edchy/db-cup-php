<?php

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = "SELECT
    CONCAT(LEFT(Spelare.fornamn, 1), '.', Spelare.efternamn) Spelare, 
    Statistik.mal Mål,
    Statistik.assist Assist,
        (SELECT lag_namn FROM Lag WHERE lag_id = (SELECT Lag FROM Spelare WHERE reg_id = Statistik.spelare)) AS Lag
    FROM
        Statistik
    JOIN
        Spelare ON Statistik.spelare = Spelare.reg_id
    WHERE Statistik.fmatch = '$id' AND (Statistik.mal > 0 OR Statistik.assist > 0)
    ORDER BY mal desc, assist desc";
    include("connection.php");

     $result = mysqli_query($connection, $q);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);
}

?>
 

<?php include('header.php'); ?>
<!-- Table start -->
<div class="table-wrapper">
<table>
  <caption>Statistik</caption>
  <tr>
    <th>Spelare</th>
    <th>Mål</th>
    <th>Assist</th>
    <th>Lag</th>
  </tr>
  <!-- insert DATA -->
  <?php foreach ($row as $r): ?>
    <tr>
      <td>
        <?php echo $r['Spelare']; ?>
      </td>
      <td>
        <?php echo $r['Mål']; ?>
      </td>
      <td>
        <?php echo $r['Assist']; ?>
      </td>
      <td>
        <?php echo $r['Lag']; ?>
      </td>

    </tr>
  <?php endforeach; ?>
  <!-- insert end -->
</table>
</div>
<!-- Table end -->