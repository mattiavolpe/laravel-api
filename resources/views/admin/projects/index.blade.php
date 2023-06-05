@extends('layouts.admin')

@section('content')
<div class="table-responsive">
  <table class="table table-primary align-middle text-center">
    <thead>
      <tr class="align-middle">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Repository URL</th>
        <th scope="col">Starting date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($projects as $project)
      <tr>
        <td scope="row">{{ $project->id }}</td>
        <td scope="row">{{ $project->name }}</td>
        <td scope="row">{{ $project->repositoryUrl }}</td>
        <td scope="row">{{ $project->starting_date }}</td>
        <td scope="row">
          Show/Edit/Delete
        </td>
      </tr>
      @empty
      <tr>
        <td scope="row">No projects found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
