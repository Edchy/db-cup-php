
<!-- Table start -->
<table>
  <caption>Matcher</caption>
  <tr>
    <th>Hemma</th>
    <th>Borta</th>
    <th>Avspark</th>
    <th>Plan</th>
    <th>Arena</th>  
    <th>Domare</th>
    <th>Status</th>
    <th>Resultat</th>

  </tr>
  <!-- insert DATA -->
  <?php foreach ($matcher as $m): ?>
    <tr>
      <td>
        <?php echo "<a href='spelare.php?lag={$m['Hemma']}'>{$m['Hemma']}</a>" ?>
      </td>
      <td>
        <?php echo "<a href='spelare.php?lag={$m['Borta']}'>{$m['Borta']}</a>" ?>
      </td>
      <td>
        <?php echo $m['Avspark']; ?>
      </td>
      <td>
        <?php echo $m['Plan']; ?>
      </td>
      <td>
        <?php echo $m['Arena']; ?>
      </td>
      <td>
        <?php echo "<a href='domare.php?domare={$m['Domare']}'>{$m['Domare']}</a>" ?>
      </td>
      <td>
        <?php echo $m['status']; ?>
      </td>
      <td>
        <?php //echo "<a href='stats.php?id={$m['match_id']}'>{$m['Resultat']}</a>" ?>
        <?php echo "<a href='stats.php?id={$m['match_id']}'>{$m['Resultat']}</a>" ?>
      </td>
    </tr>
  <?php endforeach; ?>
  <!-- insert end -->
</table>
<!-- Table end -->