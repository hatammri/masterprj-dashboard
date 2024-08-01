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
                <span class="text-muted fw-light">جدول‌داده /</span> لیست قطعات زیر مجموعه تجهیز pm
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست قطعات زیر مجموعه تجهیز pm</h5>
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
                                            aria-label="شناسه: فعال سازی نمایش به صورت نزولی"
                                            aria-sort="ascending" style="width: 181.2px;">شناسه</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1"
                                            aria-label=" نام قطعه: فعال سازی نمایش به صورت صعودی"
                                            style="width: 180.2px;">  نام قطعه </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" برند : فعال سازی نمایش به صورت صعودی"
                                            style="width: 108.2px;">برند</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" شماره درخواست‌کار: فعال سازی نمایش به صورت صعودی"
                                            style="width: 111.2px;">شماره درخواست‌کار</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" تعداد استفاده شده : فعال سازی نمایش به صورت صعودی"
                                            style="width: 170.2px;"> تعداد استفاده شده</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" تاریخ تعویض: فعال سازی نمایش به صورت صعودی"
                                            style="width: 114.2px;">تاریخ تعویض</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" تاریخ تعویض بعدی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 114.2px;">تاریخ تعویض بعدی</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label=" ساعت کار مجاز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 114.2px;">ساعت کار مجاز</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="نمایش جزئیات"
                                            style="width: 144px;">نمایش جزئیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                             @foreach ($PmPart as $itemPmPart)

                                    <tr class="odd">
                                        <td class="sorting_1">{{ $itemPmPart->id}}</td>
                                        <td>{{ $itemPmPart->parts->name }}</td>
                                        <td>{{ $itemPmPart->brands->name }}</td>
                                        <td>{{ $itemPmPart->pms->requestworks->request_number }}</td>
                                        <td>{{ $itemPmPart->num_parts_used }}</td>
                                        <td>{{ $itemPmPart->date_Replacement }}</td>
                                        <td>{{ $itemPmPart->date_Replacement_next }}</td>
                                        <td>{{ $itemPmPart->Allowed_working_hours }}</td>
                                        <td>
                                            {{-- <div class="d-inline-block"><a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                        href="/partdef/create/{{$itemPmPart->id}}" class="dropdown-item"> تعریف قطعات زیر
                                                        مجموعه تجهیز</a>
                                                        <a
                                                        href="/partdef/index/{{$itemPmPart->id}}" class="dropdown-item"> مشاهده قطعات زیر مجموعه</a>
                                                        <a
                                                        href="/partdef/create/{{$itemPmPart->id}}" class="dropdown-item"> ویرایش
                                                        مجموعه تجهیز</a>

                                                    </div> --}}
                                            </div><a href="/pm/edit/{{$itemPmPart->id}}" class="btn btn-sm btn-icon item-edit"><i
                                                    class="bx bxs-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">شناسه</th>
                                        <th rowspan="1" colspan="1">نام قطعه</th>
                                        <th rowspan="1" colspan="1">برند</th>
                                        <th rowspan="1" colspan="1">شماره درخواست‌کار</th>
                                        <th rowspan="1" colspan="1">تعداد استفاده شده</th>
                                        <th rowspan="1" colspan="1">  تاریخ تعویض </th>
                                        <th rowspan="1" colspan="1">  تاریخ تعویض بعدی</th>
                                        <th rowspan="1" colspan="1">  ساعت کار مجاز  </th>
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
