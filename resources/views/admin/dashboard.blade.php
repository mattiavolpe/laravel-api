@extends('layouts.admin')

@section('content')
<div class="card overflow-hidden">
    <div class="card-header bg-primary text-light">
        <h2 class="mb-0">Projects resume</h2>
    </div>
    <div class="card-body bg-light text-dark">
        <h4 class="text-primary">Total projects:
            <span class="fw-normal text-dark">{{$totalProjects}}</span>
        </h4>
        <h4 class="text-primary">Newest project:
            <span class="fw-normal text-dark">"{{$newestProject->name}}" - {{$newestProject->starting_date}}</span>
        </h4>
        <h4 class="text-primary">Oldest project:
            <span class="fw-normal text-dark">"{{$oldestProject->name}}" - {{$oldestProject->starting_date}}</span>
        </h4>
    </div>
</div>
@endsection
