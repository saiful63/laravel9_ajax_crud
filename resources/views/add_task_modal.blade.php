<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <form action="" method="post" id="addModalForm">
  @csrf

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="errMsg"></div>
        <div class="form-group">
            <label for="nm">Task</label>
            <input type="text" class="form-control" name="nm" id="nm" placeholder="Enter Task">
        </div>

        <div class="form-group mt-2">
            <label for="desc">Description</label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Description here..">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_task">Add Task</button>
      </div>
    </div>
  </div>
  </form>
</div>
