@extends('layouts.app')

@section('currentPage', __('Profile'))

@section('content')

    <div class="profile_page">
        <div class="card mb-4 border-0 overflow-hidden rounded-lg">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="card mb-4 border-0 overflow-hidden rounded-lg">
            @include('profile.partials.update-password-form')
        </div>
        <div class="card mb-4 border-0 overflow-hidden rounded-lg">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

@endsection
