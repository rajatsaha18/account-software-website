<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
</head>
<body>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card shadow">
                        <div class="card-header text-center">Login Form</div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""></label>
                                    <input type="submit" class=" form-control btn btn-outline-success" value="Login"/>
                                </div>
                                <p class="text-sucess">Are you New? please <b><a href="{{ route('register') }}">Register Now</a></b></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
</body>
</html>
