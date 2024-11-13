<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
</head>
<body>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card shadow">
                        <div class="card-header text-center">Register Form</div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""></label>
                                    <input type="submit" class=" form-control btn btn-outline-success" value="Register"/>
                                </div>
                                <p class="text-sucess">Are you Already registered? please <b><a href="{{ route('login') }}">Login Now</a></b></p>
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
