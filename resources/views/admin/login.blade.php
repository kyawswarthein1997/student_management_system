<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Log in</title>
    {{-- <base href="{{asset('admin_assest')}}/"/> --}}

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{asset('admin_assest/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin_assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin_assest/dist/css/adminlte.min2167.css') }}">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>KST</b>LMS</a>
        </div>

        @if (Session::has("success"))
            <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif

        @if (Session::has("error"))
            <div class="alert alert-danger"> {{ Session::get('error') }} </div>
        @endif

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{route('admin.authenticate')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>

                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>


    <script src="{{asset("admin_assest/plugins/jquery/jquery.min.js")}}"></script>

    <script src="{{asset("admin_assest/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <script src="{{asset('admin_assest/dist/js/adminlte.min2167.js?v=3.2.0')}}"></script>
</body>

</html>
