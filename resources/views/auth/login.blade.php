@extends("layouts.app")
@section("title")Login
@endsection
@section("content")
    <div class="wrapper-auth">
        <div class="login">
            <h2 class="mt-2 mb-2 text-center">Login Form</h2>
            <form action="{{ route("login-store") }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="******">
                </div>
                <button class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
@endsection
