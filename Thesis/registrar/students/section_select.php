<div class="col">
  <div class="form-group mb-3">
  
    <select class="form-select" id="section" name="section" style="height: 2rem;">
    <option value=""> </option>
      <?php
      // Replace "your_database_name" and "your_table_name" with your actual database and table names
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT DISTINCT name FROM section");
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
      }
      ?>
    </select>
  </div>
</div>
