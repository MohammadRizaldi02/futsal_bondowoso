<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    @include('layouts.partials.style')
</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                </div>
                <div class="login-form">
                    <form action="{{ route('register')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="name" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Daftar</button>
                        <div class="register-link m-t-15 text-center">
                            <p><a href="{{ route('login')}}"> kembali</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.script')
</body>
</html>
