<?php 
include("connection.php");

  // $test = ;


  $group_a = "SELECT * FROM Lag WHERE lag_id BETWEEN 1 AND 4";
  $group_b = "SELECT * FROM Lag WHERE lag_id BETWEEN 5 AND 8";

  $result = mysqli_query($connection, $group_a);
  $result2 = mysqli_query($connection, $group_b);

  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $row2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_free_result($result2);



?>
<?php include('header.php'); ?>
<!-- Table start -->
<div class="table-wrapper">
<div class="flex gap-8">
  <table>
    <caption>Grupp A</caption>
    <tr>
      <th>Lag</th>
      <th>Stad</th>
      <th>S</th>
      <th>V</th>
      <th>O</th>
      <th>F</th>
      <th>P</th>
    </tr>
    <!-- insert DATA -->
    <?php foreach ($row as $r): ?>
      <tr>
        <td>
          <?php echo "<a href='spelare.php?lag={$r['lag_namn']}'>{$r['lag_namn']}</a>" ?>
        </td>
        <td>
          <?php echo $r['stad']; ?>
        </td>
        <?php
          $row3 = mysqli_fetch_row(mysqli_query($connection, "SELECT count(*) FROM Matcher WHERE hemmalag = {$r['lag_id']} OR bortalag = {$r['lag_id']}"));
          echo "<td>$row3[0]</td>";

          $row4 = mysqli_fetch_row(mysqli_query($connection, "SELECT
                  COUNT(*) AS wins
              FROM
                  Matcher
              WHERE
                  (hemmalag = {$r['lag_id']} AND hemmamal > bortamal)
                  OR (bortalag = {$r['lag_id']} AND bortamal > hemmamal);"));
          echo "<td>$row4[0]</td>";
          $row5 = mysqli_fetch_row(mysqli_query($connection, "SELECT
                  COUNT(*) AS draws
              FROM
                  Matcher
              WHERE
                  (hemmalag = {$r['lag_id']} AND hemmamal = bortamal)
                  OR (bortalag = {$r['lag_id']} AND bortamal = hemmamal);"));
          echo "<td>$row5[0]</td>";
          $row6 = mysqli_fetch_row(mysqli_query($connection, "SELECT
                  COUNT(*) AS losses
              FROM
                  Matcher
              WHERE
                  (hemmalag = {$r['lag_id']} AND hemmamal < bortamal)
                  OR (bortalag = {$r['lag_id']} AND bortamal < hemmamal);"));
          echo "<td>$row6[0]</td>";
          // print_r($row4[0]+$row5[0]+$row6[0]);
          // $points_win = 3;
          // $points_draw = 1;
          // $points_loss = 0;
          // print_r($row4[0] * $points_win); //vinst
          // print_r($row5[0] * $points_draw); //draw
          // print_r($row6[0] * $points_loss); // losss
          // $total_points_wins = 3 * $row4[0];
          // $total_points_draws = 1 * $row5[0];
          // $total_points_losses = 0 * $row6[0];

          // Calculate the total points for each team
          $poang = ($row4[0] * 3) + ($row5[0] * 1)  + ($row6[0] * 0) ;
          echo "<td>$poang</td>";
        ?>
      </tr>
    <?php endforeach; ?>
    <!-- insert end -->
  </table>
  
  <!-- Table end -->
  <!-- Table start -->
  
   <table>
    <caption>Grupp B</caption>
    <tr>
      <th>Lag</th>
      <th>Stad</th>
      <th>S</th>
      <th>V</th>
      <th>O</th>
      <th>F</th>
      <th>P</th>
    </tr>
    <!-- insert DATA -->
    <?php foreach ($row2 as $r): ?>
      <tr>
        <td>
          <?php echo "<a href='spelare.php?lag={$r['lag_namn']}'>{$r['lag_namn']}</a>" ?>
        </td>
        <td>
          <?php echo $r['stad']; ?>
        </td>
        <?php
          $row3 = mysqli_fetch_row(mysqli_query($connection, "SELECT count(*) FROM Matcher WHERE hemmalag = {$r['lag_id']} OR bortalag = {$r['lag_id']}"));
          echo "<td>$row3[0]</td>";

          $row4 = mysqli_fetch_row(mysqli_query($connection, "SELECT
                  COUNT(*) AS wins
              FROM
                  Matcher
              WHERE
                  (hemmalag = {$r['lag_id']} AND hemmamal > bortamal)
                  OR (bortalag = {$r['lag_id']} AND bortamal > hemmamal);"));
          echo "<td>$row4[0]</td>";
          $row5 = mysqli_fetch_row(mysqli_query($connection, "SELECT
                  COUNT(*) AS draws
              FROM
                  Matcher
              WHERE
                  (hemmalag = {$r['lag_id']} AND hemmamal = bortamal)
                  OR (bortalag = {$r['lag_id']} AND bortamal = hemmamal);"));
          echo "<td>$row5[0]</td>";
          $row6 = mysqli_fetch_row(mysqli_query($connection, "SELECT
                  COUNT(*) AS losses
              FROM
                  Matcher
              WHERE
                  (hemmalag = {$r['lag_id']} AND hemmamal < bortamal)
                  OR (bortalag = {$r['lag_id']} AND bortamal < hemmamal);"));
          echo "<td>$row6[0]</td>";
          // print_r($row4[0]+$row5[0]+$row6[0]);
          // $points_win = 3;
          // $points_draw = 1;
          // $points_loss = 0;
          // print_r($row4[0] * $points_win); //vinst
          // print_r($row5[0] * $points_draw); //draw
          // print_r($row6[0] * $points_loss); // losss
          // $total_points_wins = 3 * $row4[0];
          // $total_points_draws = 1 * $row5[0];
          // $total_points_losses = 0 * $row6[0];

          // Calculate the total points for each team
          $poang = ($row4[0] * 3) + ($row5[0] * 1)  + ($row6[0] * 0) ;
          echo "<td>$poang</td>";
        ?>
      </tr>
    <?php endforeach; ?>
    <!-- insert end -->
  </table>
</div>
</div>
<!-- Table end -->
<?php mysqli_close($connection); ?>
