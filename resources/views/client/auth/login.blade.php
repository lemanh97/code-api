@extends('client.auth.layout.master-auth')
@section('title-auth')
    Đăng Nhập Thành Viên
@endsection
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- Theme-Layout -->
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <a href="index.html"><img src="client/assets/images/brand/logo-white.png" class="header-brand-img"
                            alt=""></a>
                </div>
            </div>

            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title pb-5">
                            ĐĂNG NHẬP
                        </span>
                        <div class="panel panel-primary">

                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="wrap-input100 validate-input input-group"
                                            data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="mdi mdi-account text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="text"
                                                placeholder="Tên tài khoản">
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="password"
                                                placeholder="Nhập Mật khẩu">
                                        </div>
                                        <div class="text-end pt-4">
                                            <p class="mb-0"><a href="{{ route('forgotPassword') }}"
                                                    class="text-primary ms-1">Quên
                                                    Mật khẩu?</a></p>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <a href="index.html" class="login100-form-btn btn-primary">
                                                Đăng Nhập
                                            </a>
                                        </div>
                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Nếu chưa có tài khoản?<a
                                                    href="{{ route('register') }}" class="text-primary ms-1">Đăng Kí Ngay
                                                </a></p>
                                        </div>
                                        <label class="login-social-icon"><span>Đăng Nhập Tài Khoản MXH</span></label>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-google"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login text-center">
                                                    <i class="fa fa-github"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->
@endsection
