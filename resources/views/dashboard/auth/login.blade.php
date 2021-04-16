@extends('dashboard.auth.layout.main')

@section('form-section')
    <!--begin::Signin-->
    <div class="login-form login-signin py-11">
        <!--begin::Form-->
        <form class="form" novalidate="novalidate" id="kt_login_signin_form">
            <!--begin::Title-->
            <div class="text-center pb-8">
                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ورود</h2>
                <span class="text-muted font-weight-bold font-size-h4">یا<a href="" class="text-primary font-weight-bolder"
                        id="kt_login_signup"> ساخت حساب
                        کاربری</a></span>
            </div>
            <!--end::Title-->

            <!--begin::Form group-->
            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark">پست الکترونیک</label>
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username"
                    autocomplete="off" />
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <div class="d-flex justify-content-between mt-n5">
                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">کلمه عبور</label>

                    <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                        id="kt_login_forgot">
                        رمز عبور خود را فراموش کردید؟
                    </a>
                </div>

                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password"
                    autocomplete="off" />
            </div>
            <!--end::Form group-->

            <!--begin::اکشن-->
            <div class="text-center pt-2">
                <button id="kt_login_signin_submit"
                    class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">ورود</button>
            </div>
            <!--end::اکشن-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signin-->
@endsection
