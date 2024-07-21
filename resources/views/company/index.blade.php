@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">جدول‌داده /</span> لیست شرکت ها
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست شرکت ها</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">

                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 1582px;">

                                <thead>

                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="نام شرکت: فعال سازی نمایش به صورت نزولی" aria-sort="ascending"
                                            style="width: 138.36px;">نام شرکت</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ایمیل: فعال سازی نمایش به صورت صعودی"
                                            style="width: 144.36px;">ایمیل</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شماره تلفن: فعال سازی نمایش به صورت صعودی"
                                            style="width: 83.36px;">شماره تلفن</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="توضیحات: فعال سازی نمایش به صورت صعودی"
                                            style="width: 274.36px;">توضیحات</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="آدرس: فعال سازی نمایش به صورت صعودی"
                                            style="width: 356.36px;">آدرس</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="استان: فعال سازی نمایش به صورت صعودی"
                                            style="width: 42.36px;">استان</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شهر: فعال سازی نمایش به صورت صعودی"
                                            style="width: 47.36px;">شهر</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="نمایش جزئیات" style="width: 68px;">نمایش جزئیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companys as $company)

                                    <tr class="odd">
                                        <td class="sorting_1">{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->phonenumber }}</td>
                                        <td>{{ $company->description }}</td>
                                        <td>{{ $company->address}}</td>
                                        <td>{{ $company->state}}</td>
                                        <td>{{ $company->city}}</td>
                                        <td>
                                            <div class="d-inline-block"><a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="/company/edit/{{ $company->id}}"
                                                        class="dropdown-item">ویرایش اطلاعات شرکت</a></div>
                                            </div><a href="/company/edit/{{ $company->id}}" class="btn btn-sm btn-icon item-edit"><i
                                                    class="bx bxs-edit"></i></a>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">نام شرکت</th>
                                        <th rowspan="1" colspan="1">ایمیل</th>
                                        <th rowspan="1" colspan="1">شماره تلفن</th>
                                        <th rowspan="1" colspan="1">توضیحات</th>
                                        <th rowspan="1" colspan="1">آدرس</th>
                                        <th rowspan="1" colspan="1">استان</th>
                                        <th rowspan="1" colspan="1">شهر</th>
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

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-company.js"></script>
@endsection
