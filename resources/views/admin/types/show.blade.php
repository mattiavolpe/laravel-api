@extends('layouts.admin')

@section('currentPage', __('View type'))

@section('content')

<div class="show_page pb-5">
  @if(session("message"))
  <div class="alert alert-success" role="alert">
    <strong>{{ session("message") }}</strong>
  </div>
  @endif
  
  <div class="card border-0 overflow-hidden">
      <div class="card-header text-black">
          <h2 class="mb-0 fw-bold">Type #{{$type->id}}</h2>
      </div>
      <div class="card-body bg-black text-white">
          <h4>./Type name:
            <br>
            <span class="fw-normal">{{$type->name}}</span>
          </h4>
          @if(count($type->projects) > 0)
          <hr>
          @foreach($type->projects as $project)
          <h4>./Project name:
            <span class="fw-normal">{{$project->name}}</span>
          </h4>
          @endforeach
          @endif
      </div>
  </div>
</div>
@endsection
