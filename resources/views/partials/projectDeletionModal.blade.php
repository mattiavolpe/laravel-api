<div class="deletionModal text-black p-5 rounded-4 shadow text-center off">
  <h3 class="text-white">Deleting project "{{ $project->name }}"</h3>
  <h6 class="mb-0 text-white">Are you sure you want to delete the project?</h6>
  @if($project->image)
  <div class="text-center">
    <img width="100" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }} image">
  </div>
  @endif
  <form class="mt-3" action="{{ route('admin.projects.destroy', $project) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn">Delete</button>
    <a name="cancelDeletion" class="cancelDeletion btn" href="#" role="button">Preserve</a>
  </form>
</div>
