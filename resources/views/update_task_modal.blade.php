<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <form action="" method="post" id="updateModalForm">
  @csrf
  <input type="hidden" name="u_id" id="u_id">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="uperrMsg"></div>
        <div class="form-group">
            <label for="name">Task</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Task">
        </div>

        <div class="form-group mt-2">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description here..">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_task">Update Task</button>
      </div>
    </div>
  </div>
  </form>
</div>

