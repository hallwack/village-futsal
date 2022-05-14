@extends('admin.layouts.main')

@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Kategori</h1>
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
            <!--end::Separator-->
            {{ Breadcrumbs::view('admin.partials.breadcrumbs', 'booking-admin') }}
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <div class="row gy-5 g-xl-8">
            <div class="col-xxl-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title fs-2 fw-bolder">Booking</h3>
                        <div class="card-toolbar">
                            <a href="{{ url('admin/category/create') }}" class="btn btn-sm btn-primary">
                                Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="kt_datatable_example_1" class="table table-row-bordered table-hover gy-4 gx-8">
                            <thead>
                                <tr class="fw-bold fs-6 text-muted">
                                    <th width="5%">No</th>
                                    <th>Tanggal</th>
                                    <th>Lapangan</th>
                                    <th>Jam</th>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                    <th width="15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>11/12/2013</td>
                                    <td>Lapangan 1</td>
                                    <td>21.00</td>
                                    <td>Raihan</td>
                                    <td>081278780940</td>
                                    <td>
                                        <a href="1" class="badge badge-light-warning">Pending</a>
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_1" data-route="1"
                                            data-name="booking" id="btn-delete"
                                            class="badge badge-primary pe-auto">Lunas</a>
                                    </td>
                                </tr>
                                {{-- @foreach ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $item->id) }}"
                                        class="badge badge-warning">Edit</a>
                                    <a data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                        data-route="{{ route('category.destroy', $item->id) }}"
                                        data-name="{{ $item->category_name }}" id="btn-delete"
                                        class="badge badge-danger pe-auto">Delete</a>
                                </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->

    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Item</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <p id="confirm-delete"></p>
                </div>

                <div class="modal-footer">
                    <form method="POST" id="form">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('style')
<style>
    #btn-delete {
        cursor: pointer;
    }

</style>
@endpush

@push('scripts')
<script>
    $("#kt_datatable_example_1").DataTable();

    $(document).on('click', "#btn-delete", function () {
        var route = $(this).data('route');
        var name = $(this).data('name');
        $('#confirm-delete').html(`Are you sure to delete ${name} item?`);
        $('#form').attr('action', route);
    })

</script>
@endpush
<!--end::Post-->
@endsection
