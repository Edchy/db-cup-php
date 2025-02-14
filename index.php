<?php
include('connection.php');
include('Matcher/result.php');


mysqli_free_result($result);
mysqli_close($connection);

?>

<?php include('header.php'); ?>
  <h1 class="text-4xl text-center mt-4">Databas-Mästerskapet 2023 <span class="text-sm text-green-300">
     
    </span>
  </h1>
  <!-- Table-Wrapper -->
  <div class="table-wrapper text-sm">
    <?php include('grupper.php') ?>
    <div>
      <i class="fa-solid fa-futbol"></i>
      <?php echo "<a class='top' href='skytteligan.php?skytte=true'>Skytteligan</a>" ?>
    </div>
    <div>
      <i class="fa-solid fa-thumbs-down"></i>
      <?php echo "<a class='top' href='skytteligan.php?kort=true'>Kortligan</a>" ?>
    </div>
    <?php include('Matcher/table.php') ?>
  </div>
  <!-- Table-Wrapper end -->

</body>

</html>