@extends('layouts.admin')

@section('currentPage', __('Dashboard'))

@section('content')

<div class="dashboard card border-0 overflow-hidden">
    <div class="card-header">
        <h2 class="mb-0 fw-bold">Projects resume</h2>
    </div>
    <div class="card-body bg-black text-white">
        <h4>./Total projects:
            <span class="fw-normal">{{$totalProjects}}</span>
        </h4>
        @if($totalProjects > 0)
        <h4>./Newest project:
            <span class="fw-normal">"{{$newestProject->name}}" - {{$newestProject->starting_date}}</span>
        </h4>
        <h4>./Oldest project:
            <span class="fw-normal">"{{$oldestProject->name}}" - {{$oldestProject->starting_date}}</span>
        </h4>
        @endif
    </div>
</div>

@endsection
