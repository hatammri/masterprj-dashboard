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
                <span class="text-muted fw-light">جدول‌داده /</span> لیست pm ها
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست pm ها</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">

                            <div class="invoice_status mb-3 mb-md-0"></div>
                        </div>
                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 1383px;">

                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="شماره سریال تجهیز: فعال سازی نمایش به صورت نزولی"
                                            aria-sort="ascending" style="width: 181.2px;">شماره سریال تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1"
                                            aria-label=" شماره درخواست‌‌‌‌‌‌‌‌‌کار : فعال سازی نمایش به صورت صعودی"
                                            style="width: 180.2px;"> شماره درخواست‌‌‌‌‌‌‌‌‌کار </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" نام تجهیز : فعال سازی نمایش به صورت صعودی"
                                            style="width: 108.2px;"> نام تجهیز </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" نام شرکت : فعال سازی نمایش به صورت صعودی"
                                            style="width: 111.2px;"> نام شرکت </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" نام مستعار تجهیز : فعال سازی نمایش به صورت صعودی"
                                            style="width: 170.2px;"> نام مستعار تجهیز </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" محل نصب : فعال سازی نمایش به صورت صعودی"
                                            style="width: 114.2px;"> محل نصب </th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="نمایش جزئیات"
                                            style="width: 144px;">نمایش جزئیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                             @foreach ($pm as $item_pm)

                                    <tr class="odd">
                                        <td class="sorting_1">{{ $item_pm->equipment_number}}</td>
                                        <td>{{ $item_pm->requestworks->request_number }}</td>
                                        <td>{{ $item_pm->requestworks->equipments->name }}</td>
                                        <td>{{ $item_pm->requestworks->customers->companies->name }}</td>
                                        <td>{{$item_pm->equipment_name_Alias}}</td>
                                        <td>{{$item_pm->installation_location }}</td>
                                        <td>
                                            <div class="d-inline-block"><a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                        href="/partdef/create/{{$item_pm->id}}" class="dropdown-item"> تعریف قطعات زیر
                                                        مجموعه تجهیز</a>
                                                        <a
                                                        href="/partdef/index/{{$item_pm->id}}" class="dropdown-item"> مشاهده قطعات زیر مجموعه</a>
                                                        <a
                                                        href="/partdef/create/{{$item_pm->id}}" class="dropdown-item"> ویرایش قطعات زیر
                                                        مجموعه تجهیز</a>

                                                    </div>
                                            </div><a href="/pm/edit/{{$item_pm->id}}" class="btn btn-sm btn-icon item-edit"><i
                                                    class="bx bxs-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">شماره سریال تجهیز</th>
                                        <th rowspan="1" colspan="1"> شماره درخواست‌‌‌‌‌‌‌‌‌کار </th>
                                        <th rowspan="1" colspan="1"> نام تجهیز </th>
                                        <th rowspan="1" colspan="1"> نام شرکت </th>
                                        <th rowspan="1" colspan="1"> نام مستعار تجهیز </th>
                                        <th rowspan="1" colspan="1"> محل نصب </th>
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

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-pm.js"></script>
@endsection
