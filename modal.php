<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">CRUD Update</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="post">
            <input type="text" name="update" placeholder="id to update">
            <input type="text" name="id" placeholder="id">
            <input type="text" name="code" placeholder="code">
            <input type="text" name="first_name" placeholder="first_name">
            <input type="text" name="last_name" placeholder="last_name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="status" placeholder="status">
            <input type="submit" value="Save Changes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>