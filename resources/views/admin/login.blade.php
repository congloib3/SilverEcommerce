<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jewelry Shop Admin</title>
        <link href="{{asset('css/styles_admin.css')}}" rel="stylesheet" />
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div
                                    class="card shadow-lg border-0 rounded-lg mt-5"
                                >
                                    <div class="card-header">
                                        <h3
                                            class="text-center font-weight-light my-4"
                                        >
                                            Login
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        @if (count($errors) >0)
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li class="text-danger">
                                                {{ $error }}
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif @if (session('status'))
                                        <ul>
                                            <li class="text-danger">
                                                {{ session('status') }}
                                            </li>
                                        </ul>
                                        @endif
                                        <form action="{{ route('getLogin') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label
                                                    class="small mb-1"
                                                    for="inputEmailAddress"
                                                    >Email</label
                                                >
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    name="txtEmail"
                                                    type="email"
                                                    placeholder="Enter email address"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    class="small mb-1"
                                                    for="inputPassword"
                                                    >Password</label
                                                >
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    name="txtPassword"
                                                    type="password"
                                                    placeholder="Enter password"
                                                />
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"
                                            >
                                                <a
                                                    class="small"
                                                    href="password.html"
                                                    >Forgot Password?</a
                                                ><input
                                                    class="btn btn-primary"
                                                        type="submit"
                                                        value="Login"
                                                        name="login"
                                                />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
