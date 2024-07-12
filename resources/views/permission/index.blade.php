@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">جدول‌داده /</span> لیست permission ها
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست permission ها</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">

                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 1366px;">

                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" aria-label="نام : فعال سازی نمایش به صورت نزولی"
                                            style="width: 414.2px;" aria-sort="ascending">نام </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" نام نمایشی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 356.2px;"> نام نمایشی</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نوع دسترسی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 187.2px;">نوع دسترسی</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="نمایش جزئیات"
                                            style="width: 200px;">نمایش جزئیات</th>
                                    </tr>
                                </thead>

                                @foreach ($permissions as $permission )

                                <tr class="odd">
                                    <td class="sorting_1">{{$permission->name}}</td>
                                    <td class="">{{ $permission->display_name }}</td>
                                    <td class="">{{ $permission->guard_name }}</td>
                                    <td>
                                        <div class="d-inline-block"><a href="javascript:;"
                                                class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                    href="/permission/edit/{{$permission->id}}" class="dropdown-item">ویرایش اطلاعات
                                                    شرکت</a></div>
                                        </div><a href="/permission/edit/{{$permission->id}}" class="btn btn-sm btn-icon item-edit"><i
                                                class="bx bxs-edit"></i></a>
                                    </td>
                                </tr>

                                @endforeach

                                <tbody>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">نام </th>
                                        <th rowspan="1" colspan="1"> نام نمایشی</th>
                                        <th rowspan="1" colspan="1">نوع دسترسی</th>
                                        <th rowspan="1" colspan="1">نمایش جزئیات</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!--/ Column Search -->
        </div>

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
@section('scripts')
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/i18n/fa.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/jdate/jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr-jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/l10n/fa-jdate.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/tables-datatables-permission.js"></script>
@endsection
