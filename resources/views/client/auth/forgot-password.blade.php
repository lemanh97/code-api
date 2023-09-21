@extends('client.auth.layout.master-auth')
@section('title-auth')
    Đặt lại mật khẩu
@endsection
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- Theme-Layout -->

            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto">
                <div class="text-center">
                    <a href=""><img src="client/assets/images/brand/logo-white.png" class="header-brand-img m-0"
                            alt=""></a>
                </div>
            </div>

            <!-- CONTAINER OPEN -->
            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title pb-5">
                            ĐẶT LẠI MẬT KHẨU
                        </span>
                        <p class="text-muted">Nhập địa chỉ email đã đăng ký trên tài khoản của bạn</p>
                        <div class="wrap-input100 validate-input input-group"
                            data-bs-validate="Valid email is required: ex@abc.xyz">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 ms-0 form-control" type="email" placeholder="Email">
                        </div>
                        <div class="submit">
                            <a class="btn btn-primary d-grid" href="index.html">Submit</a>
                        </div>
                        <div class="text-center mt-4">
                            <p class="text-dark mb-0 d-inline-flex">Quay trở lại ?<a class="text-primary ms-1"
                                    href="{{ route('login') }}">Đăng Nhập</a></p>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END PAGE -->
@endsection
