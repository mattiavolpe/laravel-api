@extends("layouts.admin")

@section('currentPage', __('New project'))

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

<form action="{{ route('admin.projects.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Project name">
    @error('name')
    <small class="text-danger">Please, fill the field correctly</small>
    @enderror
  </div>
  <div class="mb-3">
    <label for="repositoryUrl" class="form-label">Repository URL</label>
    <input type="text" name="repositoryUrl" id="repositoryUrl" class="form-control @error('repositoryUrl') is-invalid @enderror" value="{{ old('repositoryUrl') }}" placeholder="Project repository URL">
    <small>
      <span class="text_custom_green">If you leave it blank, will be generated a URL like "https://github.com/yourusername/your-project-name"</span>
    </small>
    @error('name')
    <small class="text-danger">Please, fill the field correctly.</small>
    @enderror
  </div>
  <div class="mb-3">
    <label for="type_id" class="form-label">Type</label>
    <select class="form-select form-select-lg" name="type_id" id="type_id">
      <option value="">--- Select type ---</option>
      @foreach($types as $type)
      <option value="{{ $type->id }}" {{ $type->id == old('type_id') ? 'selected' : '' }}>{{ $type->name }}</option>
      @endforeach
    </select>
  </div>
  @foreach($technologies as $technology)
  <div class="form-check">
    <label class="form-check-label" for="technology{{$technology->id}}">
    <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="technology{{$technology->id}}" {{ in_array($technology->id, old('technologies', [])) ? "checked" : "" }}>
      {{ $technology->name }}
    </label>
  </div>
  @endforeach
  <button type="submit" class="btn fw-bold">Insert project</button>
  <button type="reset" class="btn fw-bold mx-3">Reset fields</button>
</form>

@endsection
