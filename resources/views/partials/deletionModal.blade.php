<div class="deletionModal text-black p-5 rounded-4 shadow text-center off">
  <h3>Deleting project "{{ $project->name }}"</h3>
  <h6 class="mb-3">Are you sure you want to delete the project?</h6>
  <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn">Delete</button>
    <a name="cancelDeletion" class="cancelDeletion btn" href="#" role="button">Preserve</a>
  </form>
</div>
