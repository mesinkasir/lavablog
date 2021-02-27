@include('admin.layouts.header')
@section('title', 'Register')

    <body class="bg-gradient-primary">
        <div class="container">

            <div class="my-5 border-0 shadow-lg card o-hidden">
                <div class="p-0 card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="mb-4 text-gray-900 h4">Register</h1>
                                </div>
                                <form method="post" action="{{ route('register.post') }}" class="user">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="mb-3 col-sm-6 mb-sm-0">
                                            <input type="text" name="firstname" class="form-control form-control-user"
                                                id="exampleFirstName" placeholder="name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="lastname" class="form-control form-control-user"
                                                id="exampleLastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Email Addres">
                                    </div>
                                    <div class="form-group row">
                                        <div class="mb-3 col-sm-6 mb-sm-0">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        {{-- <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Confirm">
                                        </div> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html"></a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
    @include('admin.layouts.script')
