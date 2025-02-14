<!-- Table start -->
<table>
  <caption>Lag</caption>
  <tr>
    <th class="pk">
      ID
      <i class='bx bxs-key bx-xs text-yellow-500'></i>
    </th>
    <th>Lagnamn</th>
    <th>Stad</th>

  </tr>
  <!-- insert DATA -->
  <?php foreach ($lag as $lag): ?>
    <tr>
      <td>
        <?php echo $lag['lag_id']; ?>
      </td>
      <td>
        <?php echo $lag['lag_namn']; ?>
      </td>
      <td>
        <?php echo $lag['stad']; ?>
      </td>

    </tr>
  <?php endforeach; ?>
  <!-- insert end -->
</table>
<!-- Table end -->