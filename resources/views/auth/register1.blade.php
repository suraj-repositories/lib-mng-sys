@extends('layout.layout')
@section('title', Route::is('register') ? 'Sign Up' : '🟢🟢🟢')

@section('content')

    <body class="bg-login">
        <div class="wrapper">
            <div class="d-flex align-items-center justify-content-center my-3">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                        <div class="col mx-auto">

                            <div class="card">
                                <div class="card-body">
                                    <div class="p-4">
                                        <div class="text-center">
                                            <h3 class="">Sign Up</h3>
                                            <p>Already have an account? <a href="{{route('login')}}">Sign in
                                                    here</a>
                                            </p>
                                        </div>
                                        <div class="d-grid">
                                            <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                                    class="d-flex justify-content-center align-items-center">
                                                    <img class="me-2" src="assets/images/icons/search.svg" width="16"
                                                        alt="Image Description">
                                                    <span>Sign Up with Google</span>
                                                </span>
                                            </a> <a href="javascript:;" class="btn btn-facebook"><i
                                                    class="bx bxl-facebook"></i>Sign Up with Facebook</a>
                                        </div>
                                        <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                                            <hr />
                                        </div>
                                        <div class="form-body">
                                            <form class="row g-3" method="post" action="{{route('register')}}">
                                                @csrf
                                                <div class="col-sm-6">
                                                    <label for="inputFirstName" class="form-label">First Name</label>
                                                    <input type="text" name="first_name" class="form-control" id="inputFirstName"
                                                        placeholder="Jhon">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="inputLastName" class="form-label">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" id="inputLastName"
                                                        placeholder="Deo">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                    <input type="email" name="email" class="form-control" id="inputEmailAddress"
                                                        placeholder="example@user.com">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control border-end-0"
                                                            id="inputChoosePassword" name="password" value="12345678"
                                                            placeholder="Enter Password"> <a href="javascript:;"
                                                            class="input-group-text bg-transparent"><i
                                                                class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">I read
                                                            and agree to Terms & Conditions</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class='bx bx-user'></i>Sign up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </body>
@endsection
