<div class="deletionModal text-black p-5 rounded-4 shadow text-center off">
  <h3 class="text-white">Deleting technology "{{ $technology->name }}"</h3>
  <h6 class="mb-3 text-white">Are you sure you want to delete the technology?</h6>
  <form action="{{ route('admin.technologies.destroy', $technology) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn">Delete</button>
    <a name="cancelDeletion" class="cancelDeletion btn" href="#" role="button">Preserve</a>
  </form>
</div>
