<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update-modal">
  Update
</button>

<!-- Modal -->
<div class="modal fade" id="update-modal" tabindex="-1" aria-labelledby="update-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update-modal-label">Update Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="post">
          <div class="form-group mb-3">
            <label for="username" class="form-label">Username</label>
            <div class="input-group">
              <input value="<?= isset($username) ? $username : generateRandomString() ?>" type="text" class="form-control" id="username" name="username">
              <button type="button" class="btn btn-outline-secondary" onclick="document.getElementById('username').value = '<?= generateRandomString() ?>'; document.getElementById('password').value = '<?= generateRandomString() ?>';">
                Generate Account
              </button>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input value="<?= isset($password) ? $password : generateRandomString() ?>" type="text" class="form-control" id="password" name="password">
          </div>
          <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
