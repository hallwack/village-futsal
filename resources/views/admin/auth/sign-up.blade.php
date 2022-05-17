@extends('admin.layouts.login-register')

@section('content')
<!--begin::Form-->
<form class="form w-100" id="form" method="POST" action="{{ route('auth.register') }}">
    @csrf
    <!--begin::Heading-->
    <div class="mb-10 text-center">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Create an Account</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">Already have an account?
            <a href="{{ route('auth.login') }}" class="link-primary fw-bolder">Sign in
                here</a>
        </div>
        <!--end::Link-->
    </div>
    <!--end::Heading-->
    <!--begin::Separator-->
    <div class="d-flex align-items-center mb-10">
        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
        <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
    </div>
    <!--end::Separator-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <label class="form-label fw-bolder text-dark fs-6" for="name">Nama</label>
        <input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" type="text"
            placeholder="" name="name" id="name" />
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <label class="form-label fw-bolder text-dark fs-6" for="username">Username</label>
        <input class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
            type="text" placeholder="" name="username" id="username" />
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <label class="form-label fw-bolder text-dark fs-6" for="email">Email</label>
        <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" type="email"
            placeholder="" name="email" id="email" />
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="mb-10 fv-row">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Label-->
            <label class="form-label fw-bolder text-dark fs-6" for="password">Password</label>
            <!--end::Label-->
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                    type="password" placeholder="" name="password" id="password" autocomplete="off" />
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <!--end::Input wrapper-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Hint-->
        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
            symbols.</div>
        <!--end::Hint-->
    </div>
    <!--end::Input group=-->
    <!--begin::Input group-->
    <div class="fv-row mb-5">
        <label class="form-label fw-bolder text-dark fs-6" for="password_confirmation">Confirm Password</label>
        <input
            class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror"
            type="password" placeholder="" name="password_confirmation" id="password_confirmation" autocomplete="off" />
        @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="text-center">
        <button type="submit" id="btn_submit" class="btn btn-lg btn-primary">
            <span class="indicator-label">Submit</span>
        </button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection

@push('scripts')
<!--begin::Page Custom Javascript(used by this page)-->
{{-- <script src="{{ asset('assets/js/custom/authentication/sign-up/general.js') }}"></script> --}}

{{-- <script>
    FormValidation.formValidation(document.querySelector("#form"), {
        fields: {
            "first_name": {
                validators: {
                    notEmpty: {
                        message: "First Name is required"
                    }
                }
            },
            "last_name": {
                validators: {
                    notEmpty: {
                        message: "Last Name is required"
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: "Email address is required"
                    },
                    emailAddress: {
                        message: "The value is not a valid email address"
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: "The password is required"
                    },
                    callback: {
                        message: "Please enter valid password",
                        callback: function (e) {
                            if (e.value.length > 0) return r()
                        }
                    }
                }
            },
            "password_confirmation": {
                validators: {
                    notEmpty: {
                        message: "The password confirmation is required"
                    },
                    identical: {
                        compare: function () {
                            return e.querySelector('[name="password"]').value
                        },
                        message: "The password and its confirm are not the same"
                    }
                }
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger({
                event: {
                    password: !1
                }
            }),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: ""
            })
        }
    })

</script> --}}

<!--end::Page Custom Javascript-->
@endpush
