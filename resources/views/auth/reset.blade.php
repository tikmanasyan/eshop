@extends("layouts.app")
@section("title")Reset Password
@endsection
@section("content")
    <div class="wrapper-auth">
        <div class="reset">
            <h2 class="mt-2 mb-2 text-center">Reset Form</h2>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="******">
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="******">
                </div>
                <button class="btn btn-success">Reset</button>
            </form>
        </div>
    </div>
@endsection
