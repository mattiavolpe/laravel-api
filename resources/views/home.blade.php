@extends('layouts.app')

@section('currentPage', 'My Projects')

@section('content')
<div class="row flex-column g-3">
  @forelse($projects as $project)
  <div class="col">
    <a href="" class="text-decoration-none text_custom_green">{{$project->name}}</a>
  </div>
  @empty
  <h1 class="text_custom_green">New projects are coming</h1>
  @endforelse
</div>
@endsection
