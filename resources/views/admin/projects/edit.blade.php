@extends("layouts.admin")

@section('currentPage', __('Edit project'))

@section("content")

@if(session("message"))
<div class="alert alert-danger" role="alert">
  <strong>{{ session("message") }}</strong>
</div>
@endif

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  <strong>{{$error}}</strong>
</div>
@endforeach
@endif

<form action="{{ route('admin.projects.update', $project) }}" method="post">
  @csrf
  @method("put")
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $project->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Project name">
    @error('name')
    <small class="text-danger">Please, fill the field correctly</small>
    @enderror
  </div>
  <div class="mb-3">
    <label for="type_id" class="form-label">Type</label>
    <select class="form-select form-select-lg" name="type_id" id="type_id">
      <option value="">--- Select type ---</option>
      @foreach($types as $type)
      <option value="{{ $type->id }}" {{ $project->type?->id == $type->id || $type->id == old('type_id') ? 'selected' : '' }}>{{ $type->name }}</option>
      @endforeach
    </select>
  </div>
  @foreach($technologies as $technology)
  <div class="form-check">
    <label class="form-check-label" for="technology{{$technology->id}}">
    @if(old('technologies'))
    <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="technology{{$technology->id}}" {{ in_array($technology->id, old('technologies')) ? "checked" : "" }}>
    @else
    <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="technology{{$technology->id}}" {{ $project->technologies->contains($technology->id) ? "checked" : "" }}>
    @endif
    {{ $technology->name }}
    </label>
  </div>
  @endforeach
  <button type="submit" class="btn fw-bold">Update project</button>
  <button type="reset" class="btn fw-bold mx-3">Reset fields</button>
</form>

@endsection
