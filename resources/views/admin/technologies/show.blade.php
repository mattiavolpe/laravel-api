@extends('layouts.admin')

@section('currentPage', __('View technology'))

@section('content')

<div class="show_page">
  @if(session("message"))
  <div class="alert alert-success" role="alert">
    <strong>{{ session("message") }}</strong>
  </div>
  @endif
  
  <div class="card border-0 overflow-hidden">
      <div class="card-header text-black">
          <h2 class="mb-0 fw-bold">Technology #{{$technology->id}}</h2>
      </div>
      <div class="card-body bg-black text-white">
          <h4>./technology name:
            <br>
            <span class="fw-normal">{{$technology->name}}</span>
          </h4>
          @if($technology->projects)
          <hr>
          @foreach($technology->projects as $project)
          <h4>./Project name:
            <span class="fw-normal">{{$project->name}}</span>
          </h4>
          @endforeach
          @endif
      </div>
  </div>
</div>
@endsection
