@extends('layouts.auth.master')

@section('auth-title', 'Register')

@section('auth-content')
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" action="{{ route('register.process') }}" method="POST">

                    @csrf

                    <!--begin::Heading-->
                    <div class="mb-10 text-center">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Create an Account</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">Already have an account?
                            <a href="/login" class="link-primary fw-bolder">Sign in here</a>
                        </div>
                        <!--end::Link-->
                    </div>

                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder text-dark fs-6">Name</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Enter "
                            name="name" autocomplete="off" />
                    </div>

                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder text-dark fs-6">Email</label>
                        <input class="form-control form-control-lg form-control-solid" type="email" placeholder=""
                            name="email" autocomplete="off" />
                    </div>

                    <div class="mb-7 fv-row" data-kt-password-meter="true">
                        <div class="mb-1">
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>

                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="Enter password" name="password" autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="fv-row mb-10">
                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                            <input class="form-check-input" type="checkbox" name="toc" value="1" />
                            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                <a href="javascript:void(0)" class="ms-1 link-primary">Terms and conditions</a>.</span>
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
            <!--begin::Links-->
            <div class="d-flex flex-center fw-bold fs-6">
                <a href="javascript:void(0)" class="text-muted text-hover-primary px-2" target="_blank">About</a>
                <a href="javascript:void(0)" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                <a href="javascript:void(0)" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
@endsection
