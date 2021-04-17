@extends('dashboard.auth.layout.main')

@section('page-title', 'ثبت نام')

@section('form-section')

    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div
            class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->
                <a href="#" class="login-logo pb-xl-20 pb-15">
                    <img src="{{ asset('media/logos/logo-4.png') }}" class="max-h-70px" alt="">
                </a>
                <!--end::Logo-->

                <!--begin::Signin-->
                <div class="login-form">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_login_singin_form"
                        action="{{ route('register') }}" method="POST" novalidate="novalidate">
                        @csrf

                        <!--begin::Title-->
                        <div class="pb-5 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ثبت نام</h3>
                            <div class="text-muted font-weight-bold font-size-h4">
                                اکانت دارید؟
                                <a href="{{ route('login') }}" class="text-primary font-weight-bolder">وارد شوید</a>
                            </div>
                        </div>
                        <!--begin::Title-->

                        <div class="form-group fv-plugins-icon-container">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!--begin::Form group-->
                        <div class="form-group fv-plugins-icon-container">
                            <label class="font-size-h6 font-weight-bolder text-dark">نام و نام خانوادگی</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text"
                                name="name" autocomplete="off" required>
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group fv-plugins-icon-container">
                            <label class="font-size-h6 font-weight-bolder text-dark">ایمیل شما</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email"
                                name="email" autocomplete="on" value="{{ old('email') }}" required>
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group fv-plugins-icon-container">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">کلمه عبور</label>
                            </div>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0"
                                type="password" name="password" autocomplete="off">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group fv-plugins-icon-container">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">کلمه عبور</label>
                            </div>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0"
                                type="password" name="password_confirmation" autocomplete="off">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <!--end::Form group-->
                    

                        <!--begin::اکشن-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit" id="kt_login_singin_form_submit_button"
                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">ثبت نام</button>
                            
                        </div>
                        <!--end::اکشن-->
                        <input type="hidden">
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Content-->

        @include('dashboard.auth.layout.partial.aside')
    </div>

@endsection
