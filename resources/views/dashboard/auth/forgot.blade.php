@extends('dashboard.auth.layout.main')

@section('form-section')
<!--begin::Forgot-->
<div class="login-form login-forgot pt-11">
    <!--begin::Form-->
    <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
        <!--begin::Title-->
        <div class="text-center pb-8">
            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">کلمه عبور خود
                را فراموش کرده اید؟</h2>
            <p class="text-muted font-weight-bold font-size-h4">ایمیل تان را وارد کنید تا
                پسوردتان ریست شود</p>
        </div>
        <!--end::Title-->

        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                type="email" placeholder="پست الکترونیک" name="email" autocomplete="off" />
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
            <button type="button" id="kt_login_forgot_submit"
                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">ارسال</button>
            <button type="button" id="kt_login_forgot_cancel"
                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">لغو</button>
        </div>
        <!--end::Form group-->
    </form>
    <!--end::Form-->
</div>
<!--end::Forgot-->
@endsection