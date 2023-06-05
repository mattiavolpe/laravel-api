@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-dark text-light">
        <h2 class="mb-0">Projects resume</h2>
    </div>
    <div class="card-body">
        <h4>Total projects:
            <span class="fw-normal">{{$totalProjects}}</span>
        </h4>
        <h4>Newest project:
            <span class="fw-normal">"{{$newestProject->name}}"</span>
        </h4>
        <h4>Oldest project:
            <span class="fw-normal">"{{$oldestProject->name}}"</span>
        </h4>
    </div>
</div>
@endsection
