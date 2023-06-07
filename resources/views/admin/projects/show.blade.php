@extends('layouts.admin')

@section('currentPage')
{{ __('View project') }}
@endsection

@section('content')

<div class="show_page">
  @if(session("message"))
  <div class="alert alert-success" role="alert">
    <strong>{{ session("message") }}</strong>
  </div>
  @endif
  
  <div class="card border-0 overflow-hidden">
      <div class="card-header text-black">
          <h2 class="mb-0 fw-bold">Project #{{$project->id}}</h2>
      </div>
      <div class="card-body bg-black text-white">
          <h4>./Project name:
            <br>
            <span class="fw-normal">{{$project->name}}</span>
          </h4>
          <hr>
          <h4>./Repository URL:
            <br>
            <span class="fw-normal">{{$project->repositoryUrl}}</span>
          </h4>
          <hr>
          <h4>./Project starting date:
            <br>
            <span class="fw-normal">{{$project->starting_date}}</span>
          </h4>
          @if($project->type)
          <hr>
          <h4>./Project type:
            <br>
            <span class="fw-normal">{{$project->type?->name}}</span>
          </h4>
          @endif
      </div>
  </div>
</div>
@endsection
