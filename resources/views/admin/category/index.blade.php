@extends('layouts.admin.master')

@section('title', 'Categoory List')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Card-->
            <div class="card">

                <!--begin::Header-->
                <div class="card-header border-0 pt-5">

                    <!-- START SEARCH ICON-->
                    <x-search />
                    <!-- END SEARCH ICON-->

                    <div class="card-toolbar">
                        <button id="openModal" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Add New
                        </button>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body py-4">

                    @include('message')

                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="data-table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted text-uppercase fw-bolder fs-7 gs-0">
                                    <th>#</th>
                                    <th>Division Name</th>
                                    <th>Support Zone Name</th>
                                    <th>District Name</th>
                                    <th>Short Code</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

    @include('admin.category.modal')

@endsection

@section('page_script')

    <!-- begin::Page Custom Stylesheets(used by this page) -->
    <script src="{{ asset('assets/custom/js/common/master/district/index.js') }}"></script>
    <!--end::Page Custom Stylesheets(used by this page)-->

@endsection
