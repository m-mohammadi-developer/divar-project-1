@extends('dashboard.auth.layout.main')

@section('form-section')
<!--begin::ثبت نام-->
<div class="login-form login-signup pt-11">
    <!--begin::Form-->
    <form class="form" novalidate="novalidate" id="kt_login_signup_form">
        <!--begin::Title-->
        <div class="text-center pb-8">
            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ثبت نام</h2>
            <p class="text-muted font-weight-bold font-size-h4">برای ایجاد حساب کاربری ، جزئیات
                خود را وارد کنید</p>
        </div>
        <!--end::Title-->

        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                type="text" placeholder="نام و ناو خانوادگی" name="fullname"
                autocomplete="off" />
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                type="email" placeholder="پست الکترونیک" name="email" autocomplete="off" />
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                type="password" placeholder="کلمه عبور" name="password" autocomplete="off" />
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                type="password" placeholder="تکرار کلمه عبور" name="cpassword"
                autocomplete="off" />
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
            <label class="checkbox mb-0">
                <input type="checkbox" name="agree" />می پذیرم <a href="#">قوانین و مقررات</a>.
                <span></span>
            </label>
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
            <button type="button" id="kt_login_signup_submit"
                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">ارسال</button>
            <button type="button" id="kt_login_signup_cancel"
                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">لغو</button>
        </div>
        <!--end::Form group-->
    </form>
    <!--end::Form-->
</div>
<!--end::ثبت نام-->

@endsection