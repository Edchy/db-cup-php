<?php 
include("connection.php");

if (isset($_GET['domare'])) {
  // echo $_GET['domare'];
  // $domare = $_GET['domare'];
  $domare = substr($_GET['domare'], 2);
  // echo $domare;
  $q = "SELECT * FROM Domare WHERE efternamn = '$domare'";
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
  <caption>Domare</caption>
  <tr>
    <th>DomarID</th>
    <th>Förnamn</th>
    <th>Efternamn</th>
  </tr>
  <!-- insert DATA -->
  <?php foreach ($row as $r): ?>
    <tr>
      <td>
        <?php echo $r['id']; ?>
      </td>
      <td>
        <?php echo $r['fornamn']; ?>
      </td>
      <td>
        <?php echo $r['efternamn']; ?>
      </td>

    </tr>
  <?php endforeach; ?>
  <!-- insert end -->
</table>
</div>
<!-- Table end -->