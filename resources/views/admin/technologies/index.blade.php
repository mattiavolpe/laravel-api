@extends('layouts.admin')

@section('currentPage', __('Technologies'))

@section('content')
<a class="new_project btn text-black fw-bold mb-3" href="{{ route('admin.technologies.create') }}" role="button">New Technology</a>

@if(session("message"))
<div class="alert alert-success" role="alert">
  <strong>{{ session("message") }}</strong>
</div>
@endif

<div class="table-responsive bg-black mb-5">
  <table class="table align-middle text-center mb-0">
    <thead>
      <tr class="align-middle">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Projects</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($technologies as $technology)
      <tr>
        <td scope="row" class="text-white">{{ $technology->id }}</td>
        <td scope="row" class="text-white">{{ $technology->name }}</td>
        <th scope="row" class="text-white">{{count($technology->projects)}}</th>
        <td scope="row">
          <a class="show_button text-decoration-none btn" href="{{ route('admin.technologies.show', $technology) }}">
            <i class="fa-regular fa-eye fa-fw"></i>
          </a>
          <a class="edit_button text-decoration-none btn my-2" href="{{ route('admin.technologies.edit', $technology) }}">
            <i class="fa-regular fa-pen-to-square fa-fw"></i>
          </a>
          <button type="button" class="delete_button text-decoration-none btn">
            <i class="fa-regular fa-trash-can fa-fw"></i>
          </button>
        </td>
      </tr>
      @include("partials.technologyDeletionModal")
      @empty
      <tr>
        <td class="text_custom_green" scope="row">No technologies found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
  {{ $technologies->links("pagination::bootstrap-5") }}
</div>
@endsection
