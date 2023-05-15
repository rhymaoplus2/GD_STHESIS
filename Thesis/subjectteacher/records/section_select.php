<select class="form-select fw-bold" id="section" name="section">
  <option value="">Section</option>
  <?php
     include "../php/db_conn.php";
  // Assuming you have already established a database connection
  $query = "SELECT name FROM section";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $sectionName = $row['name'];
    echo "<option value=\"$sectionName\">$sectionName</option>";
  }
  ?>
</select>
