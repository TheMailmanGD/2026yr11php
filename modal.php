<!-- Modal -->
<div class="modal fade" id="updateAllModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">CRUD Update</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="update_id">
        
        <div class="mb-3">
            <label>First Name</label>
            <input type="text" class="form-control" id="update_first_name">
        </div>
      
        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" class="form-control" id="update_last_name">
        </div>
        <!-- <form action="update.php" method="post">
            <input type="text" name="update" placeholder="id to update">
            <input type="text" name="id" placeholder="id">
            <input type="text" name="code" placeholder="code">
            <input type="text" name="first_name" placeholder="first_name">
            <input type="text" name="last_name" placeholder="last_name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="status" placeholder="status">
            <input type="submit" value="Save Changes">
        </form> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
let editButtons = document.querySelectorAll(".editBtn");
editButtons.forEach(function(btn){
    btn.addEventListener("click", function(){
        document.getElementById("update_id").value = this.dataset.id;
        document.getElementById("update_first_name").value = this.dataset.first_name;
        document.getElementById("update_last_name").value = this.dataset.last_name;
    });
});

document.getElementById("saveChangesBtn").addEventListener("click", function(){
    let id = document.getElementById("update_id").value;
    let first_name = document.getElementById("update_first_name").value;
    let last_name = document.getElementById("update_last_name").value;
    fetch("update_user.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${id}&first_name=${first_name}&last_name=${last_name}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        location.reload();
    });
});
</script>