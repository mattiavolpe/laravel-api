<div class="deletionModal bg-light p-5 rounded-4 shadow text-center off">
  <h3>Deleting comic "{{ $project->name }}"</h3>
  <h6 class="mb-3">Are you sure you want to delete the comic?</h6>
  <form action="{{ route('admin.projects.destroy', $project->id) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger">Delete</button>
    <a name="cancelDeletion" class="cancelDeletion btn btn-primary" href="#" role="button">Preserve</a>
  </form>
</div>
