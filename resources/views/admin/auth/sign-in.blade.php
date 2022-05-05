@extends('admin.layouts.login-register')

@section('content')
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Sign In to Village Futsal Admin</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">New Here?
            <a href="{{ route('auth.sign-up') }}" class="link-primary fw-bolder">Create an
                Account</a>
        </div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark" for="username">Username</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid" type="text" id="username" name="username"
            autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack mb-2">
            <!--begin::Label-->
            <label class="form-label fw-bolder text-dark fs-6 mb-0" for="password">Password</label>
            <!--end::Label-->
            <!--begin::Link-->
            <a href="../../demo1/dist/authentication/flows/basic/password-reset.html"
                class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password"
            autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Continue</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <!--end::Submit button-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection

@push('scripts')
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
<!--end::Page Custom Javascript-->
@endpush
