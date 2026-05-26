@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h2 class="mb-4 text-white fw-bold">
        Profile
    </h2>

    <div class="p-4 mb-4 bg-dark text-white rounded">
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="p-4 mb-4 bg-dark text-white rounded">
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="p-4 bg-dark text-white rounded">
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

</div>

@endsection