@extends("layouts.app")
@section("title")Forgot Password
@endsection
@section("content")
    <div class="wrapper-auth">
        <div class="forgot">
            <h2 class="mt-2 mb-2 text-center">Forgot Form</h2>

            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                </div>
                <button class="btn btn-success">Forgot</button>
            </form>
        </div>
    </div>
@endsection
