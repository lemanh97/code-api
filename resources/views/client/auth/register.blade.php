@extends('client.auth.layout.master-auth')
@section('title-auth')
    Đăng Kí Thành Viên
@endsection
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- Theme-Layout -->

            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <a href="index.html"><img src="client/assets/images/brand/logo-white.png" class="header-brand-img m-0"
                            alt=""></a>
                </div>
            </div>
            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title">
                            ĐĂNG KÍ
                        </span>
                        <div class="wrap-input100 validate-input input-group"
                            data-bs-validate="Valid email is required: ex@abc.xyz">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                <i class="mdi mdi-account-key" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 ms-0 form-control" type="text" name="username"
                                placeholder="Tên Tài khoản">
                        </div>
                        <div class="wrap-input100 validate-input input-group"
                            data-bs-validate="Valid email is required: ex@abc.xyz">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 ms-0 form-control" type="email" placeholder="Email"
                                name="email">
                        </div>
                        <div class="wrap-input100 validate-input input-group"
                            data-bs-validate="Valid email is required: ex@abc.xyz">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                <i class="mdi mdi-account-location" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 ms-0 form-control" type="text" name="name"
                                placeholder="Họ Và Tên">
                        </div>
                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 ms-0 form-control" type="password" placeholder="Password">
                        </div>
                        <label class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" class="custom-control-input" checked>
                            <span class="custom-control-label">Tôi đồng ý <a href="terms.html">
                                    điều khoản và chính sách</a></span>
                        </label>
                        <div class="container-login100-form-btn">
                            <a href="index.html" class="login100-form-btn btn-primary">
                                ĐĂNG KÍ
                            </a>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-dark mb-0 d-inline-flex">Already have account ?<a href="{{ route('login') }}"
                                    class="text-primary ms-1">Đăng nhập</a></p>
                        </div>

                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- END PAGE -->
@endsection
