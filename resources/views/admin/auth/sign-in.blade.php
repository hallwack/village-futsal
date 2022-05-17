@extends('admin.layouts.login-register')

@section('content')
<!--begin::Form-->
<form class="form w-100" id="form" action="{{ route('auth.login') }}" method="POST">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Sign In to Village Futsal Admin</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">New Here?
            <a href="{{ route('auth.register') }}" class="link-primary fw-bolder">Create an
                Account</a>
        </div>
        <!--end::Link-->
    </div>
    @error('invalid')
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z"
                    id="Path-117" fill="#000000" opacity="0.3"></path>
                <rect id="Rectangle-9" fill="#000000" x="11" y="9" width="2" height="7" rx="1"></rect>
                <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="17" width="2" height="2" rx="1"></rect>
            </svg></span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h4 class="fw-bold">Login Failed!</h4>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ $message }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button"
            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
            data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-1 svg-icon-danger">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z"
                        fill="#12131A" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z"
                        fill="#12131A" />
                </svg>
            </span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
    @enderror
    <!--begin::Heading-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark" for="username">Username</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
            type="text" id="username" name="username" />
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fw-bolder text-dark fs-6 mb-0" for="password">Password</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
            type="password" id="password" name="password" autocomplete="off" />
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" id="btn_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Login</span>
        </button>
        <!--end::Submit button-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection

@push('scripts')
<!--begin::Page Custom Javascript(used by this page)-->
{{-- <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script> --}}
<!--end::Page Custom Javascript-->
@endpush
