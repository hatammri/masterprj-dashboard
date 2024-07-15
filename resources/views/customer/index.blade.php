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
                <span class="text-muted fw-light">جدول‌داده /</span> لیست مشتری ها
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست مشتری ها</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">

                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 1262px;">

                                <thead>

                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="نام مشتری: فعال سازی نمایش به صورت نزولی" aria-sort="ascending"
                                            style="width: 99.2px;">نام مشتری</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ایمیل: فعال سازی نمایش به صورت صعودی"
                                            style="width: 140.2px;">ایمیل</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شماره همراه: فعال سازی نمایش به صورت صعودی"
                                            style="width: 77.2px;">شماره همراه</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="توضیحات: فعال سازی نمایش به صورت صعودی"
                                            style="width: 48.2px;">توضیحات</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نام شرکت: فعال سازی نمایش به صورت صعودی"
                                            style="width: 111.2px;">نام شرکت</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="سمت در شرکت: فعال سازی نمایش به صورت صعودی"
                                            style="width: 75.2px;">سمت در شرکت</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نوع دسترسی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 62.2px;">نوع دسترسی</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="وضعیت در سیستم: فعال سازی نمایش به صورت صعودی"
                                            style="width: 93.2px;">وضعیت در سیستم</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="نمایش جزئیات"
                                            style="width: 72px;">نمایش جزئیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr class="odd">
                                            <td class="sorting_1">{{$customer->userID->name}}</td>
                                            <td>{{$customer->userID->email}}</td>
                                            <td>{{$customer->userID->phonenumber}}</td>
                                            <td>{{$customer->description}}</td>
                                            <td>{{$customer->companies->name}}</td>
                                            <td>{{$customer->postCompany->display_name}}</td>
                                            <td>{{$customer->userID->getrole->display_name}}</td>
                                            <td>{{$customer->userID->is_active}}</td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                                href="/customer/edit/{{$customer->id}}" class="dropdown-item">ویرایش اطلاعات
                                                                شرکت</a></div>
                                                    </div><a href="/customer/edit/{{$customer->id}}" class="btn btn-sm btn-icon item-edit"><i
                                                            class="bx bxs-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">نام مشتری</th>
                                        <th rowspan="1" colspan="1">ایمیل</th>
                                        <th rowspan="1" colspan="1">شماره همراه</th>
                                        <th rowspan="1" colspan="1">توضیحات</th>
                                        <th rowspan="1" colspan="1">نام شرکت</th>
                                        <th rowspan="1" colspan="1">سمت در شرکت</th>
                                        <th rowspan="1" colspan="1">نوع دسترسی</th>
                                        <th rowspan="1" colspan="1">وضعیت در سیستم</th>
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
    </div>z
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

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-customer.js"></script>
@endsection
