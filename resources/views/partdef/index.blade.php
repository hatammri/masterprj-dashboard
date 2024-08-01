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
                <span class="text-muted fw-light">جدول‌داده /</span> لیست ریز قطعات مربوط به تجهیز PM (شناسه:
                {{ $id }})
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست قطعه ها</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <div class="row mx-2">
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-3">

                                <div
                                    class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
                                    <div class="dt-buttons btn-group flex-wrap"><a href="/partdef/create/{{$id }}"><button
                                            class="btn btn-secondary btn-primary" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button"><span ><i
                                                    class="bx bx-plus me-md-2"></i><span
                                                    class="d-md-inline-block d-none">
                                                    ایجاد قطعه مربوط به زیر مجموعه این
                                                    تجهیز</span></span></button></a> </div>
                                </div>
                            </div>
                            <div class="invoice_status mb-3 mb-md-0"></div>
                        </div>
                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 1386px;">

                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" aria-label="شناسه: فعال سازی نمایش به صورت نزولی"
                                            aria-sort="ascending" style="width: 42.2px;">شناسه</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="نمایش جزئیات"
                                            style="width: 81.2px;">نمایش جزئیات</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نام قطعه: فعال سازی نمایش به صورت صعودی"
                                            style="width: 57.2px;">نام قطعه</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="برند: فعال سازی نمایش به صورت صعودی"
                                            style="width: 71.2px;">برند</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شماره درخواست‌کار: فعال سازی نمایش به صورت صعودی"
                                            style="width: 111.2px;">شماره درخواست‌کار</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شماره سریال تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 108.2px;">شماره سریال تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تعداد استفاده شده: فعال سازی نمایش به صورت صعودی"
                                            style="width: 108.2px;">تعداد استفاده شده</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تاریخ تعویض: فعال سازی نمایش به صورت صعودی"
                                            style="width: 78.2px;">تاریخ تعویض</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تاریخ تعویض بعدی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 110.2px;">تاریخ تعویض بعدی</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ساعت کار مجاز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 87px;">ساعت کار مجاز</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PmPart as $itemPmPart)
                                        <tr class="odd">
                                            <td class="sorting_1">{{ $itemPmPart->id }}</td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                </div><a href="/part/edit/1" class="btn btn-sm btn-icon item-edit"><i
                                                        class="bx bxs-edit"></i></a>
                                            </td>
                                            <td>{{ $itemPmPart->parts->name }}</td>
                                            <td>{{ $itemPmPart->brands->name }}</td>
                                            <td>{{ $itemPmPart->pms->requestworks->request_number }}</td>
                                            <td>{{ $itemPmPart->pms->equipment_number }}</td>
                                            <td>{{ $itemPmPart->num_parts_used }}</td>
                                            <td>{{ $itemPmPart->date_Replacement }}</td>
                                            <td>{{ $itemPmPart->date_Replacement_next }}</td>
                                            <td>{{ $itemPmPart->Allowed_working_hours }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">شناسه</th>
                                        <th rowspan="1" colspan="1">نمایش جزئیات</th>
                                        <th rowspan="1" colspan="1">نام قطعه</th>
                                        <th rowspan="1" colspan="1">برند</th>
                                        <th rowspan="1" colspan="1">شماره درخواست‌کار</th>
                                        <th rowspan="1" colspan="1">شماره سریال تجهیز</th>
                                        <th rowspan="1" colspan="1">تعداد استفاده شده</th>
                                        <th rowspan="1" colspan="1">تاریخ تعویض</th>
                                        <th rowspan="1" colspan="1">تاریخ تعویض بعدی</th>
                                        <th rowspan="1" colspan="1">ساعت کار مجاز</th>
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
    <script src="../../assets/js/tables-datatables-partdef.js"></script>
@endsection
