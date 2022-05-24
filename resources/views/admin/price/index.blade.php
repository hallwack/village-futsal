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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Price</h1>
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
            <!--end::Separator-->
            {{ Breadcrumbs::view('admin.partials.breadcrumbs', 'price-admin') }}
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
                        <h3 class="card-title fs-2 fw-bolder">Harga Lapangan</h3>
                        {{-- <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24px" height="24px"
                                    viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Stockholm-icons-/-General-/-Search" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                        <path
                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                            id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path
                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                            id="Path" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                            </span>
                            <input type="text" data-kt-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search User" />
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <table id="kt_datatable_example_1" class="table table-row-bordered table-hover gy-4 gx-8">
                            <thead>
                                <tr class="fw-bold fs-6 text-muted">
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->price_type }}</td>
                                    <td>{{ $item->price_pricing }}</td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_2"
                                            data-route-edit="{{ route('admin.price.update', $item->id) }}"
                                            data-price="{{ $item->price_pricing }}"
                                            data-name-price="{{ $item->price_type }}" id="btn-edit"
                                            class="badge badge-warning">Edit</a>
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                            data-route-delete="{{ route('admin.user.destroy', $item->id) }}"
                                            data-name-delete="{{ $item->price_type }}" id="btn-delete"
                                            class="badge badge-danger pe-auto">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
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
                    <form method="POST" id="form-delete">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="form-edit">
                    @method('PUT')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Item</h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x"></span>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="form-label">Nama Harga</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Example input"
                                id="price-type" disabled />
                        </div>
                        <div class="mb-10">
                            <label for="pricing" class="form-label">Harga</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Example input"
                                name="pricing" id="price-pricing" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('style')
<style>
    #btn-delete {
        cursor: pointer;
    }

    #btn-edit {
        cursor: pointer;
    }

</style>
@endpush

@push('scripts')
<script>
    // $("#kt_datatable_example_1").DataTable();

    $(document).on('click', "#btn-delete", function () {
        var route = $(this).data('route-delete');
        var name = $(this).data('name-delete');
        $('#confirm-delete').html(`Are you sure to delete ${name}?`);
        $('#form-delete').attr('action', route);
    })

    $(document).on('click', "#btn-edit", function () {
        var route = $(this).data('route-edit');
        var name = $(this).data('name-price');
        var price = $(this).data('price');
        $('#confirm-delete').html(`Are you sure to delete ${name}?`);
        $('#price-type').val(name);
        $('#price-pricing').val(price);
        $('#form-edit').attr('action', route);
    })

    // Class definition
    var KTDatatablesButtons = function () {
        // Shared variables
        var table;
        var datatable;

        // Private functions
        var initDatatable = function () {
            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const dateRow = row.querySelectorAll('td');
                const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                    .format(); // select date from 4th column in table
                dateRow[3].setAttribute('data-order', realDate);
            });

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'pageLength': 10,
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Public methods
        return {
            init: function () {
                table = document.querySelector('#kt_datatable_example_1');

                if (!table) {
                    return;
                }

                initDatatable();
                handleSearchDatatable();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTDatatablesButtons.init();
    });

</script>
@endpush
<!--end::Post-->
@endsection
