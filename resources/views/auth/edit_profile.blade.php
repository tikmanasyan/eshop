@extends("layouts.app")
@section("title")Edit Profile
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <h2>Edit Profile</h2>
            <div class="col-md-4">
                <div class="profile-avatar">
                    <img src="{{ asset("assets/images/" . Auth::user()->avatar ) }}" alt="">
                </div>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>
@endsection
