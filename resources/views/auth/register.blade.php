@extends("layouts.app")
@section("title")Register
@endsection
@section("content")
    <div class="wrapper-auth">
        <div class="register">
            <h2 class="mt-2 mb-2 text-center">Create Account</h2>

            <form action="{{route("register-store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="John Smith">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option selected disabled>--Select Gender--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">User Avatar</label>
                    <input type="file" id="avatar" name="avatar" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label">Birth Date</label>
                    <input type="date" id="birth_date" name="birth_date" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="******">
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control"  placeholder="******">
                </div>

                <button class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
@endsection
