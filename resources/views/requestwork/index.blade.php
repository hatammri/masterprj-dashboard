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
                <span class="text-muted fw-light">جدول‌داده /</span> لیست درخواست‌کار ها
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست درخواست‌کار ها</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">

                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 2336px;">

                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شماره درخواست‌کار: فعال سازی نمایش به صورت صعودی"
                                            style="width: 91.36px;">شماره درخواست‌کار</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نام تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 204.36px;">نام تجهیز</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="وضعیت درخواست‌کار: فعال سازی نمایش به صورت صعودی"
                                            style="width: 102.36px;">وضعیت درخواست‌کار</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="نمایش جزئیات" style="width: 72px;">نمایش جزئیات</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="توضیحات: فعال سازی نمایش به صورت صعودی" style="width: 189.36px;">
                                            توضیحات</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="هزینه تقریبی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 64.36px;">هزینه تقریبی</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="هزینه واقعی: فعال سازی نمایش به صورت صعودی"
                                            style="width: 61.36px;">هزینه واقعی</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="فوریت درخواست‌کار: فعال سازی نمایش به صورت صعودی"
                                            style="width: 96.36px;">فوریت درخواست‌کار</th>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نام مشتری: فعال سازی نمایش به صورت صعودی"
                                            style="width: 53.36px;">نام مشتری</th>

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="نام تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 204.36px;">برند تجهیز</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تیپ تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 204.36px;">تیپ تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="شماره سریال تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 93.36px;">شماره سریال تجهیز</th>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تاریخ ورود: فعال سازی نمایش به صورت صعودی"
                                            style="width: 93.36px;">تاریخ ورود</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تاریخ خروج: فعال سازی نمایش به صورت صعودی"
                                            style="width: 54.36px;">تاریخ شروع به کار</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="تاریخ تحویل: فعال سازی نمایش به صورت صعودی"
                                            style="width: 97.36px;">تاریخ تحویل</th>



                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="ایجاد شده توسط: فعال سازی نمایش به صورت نزولی"
                                            style="width: 81.36px;" aria-sort="ascending">ایجاد شده توسط</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="وضعیت: فعال سازی نمایش به صورت صعودی" style="width: 38.36px;">
                                            وضعیت</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="سرویس در محل: فعال سازی نمایش به صورت صعودی"
                                            style="width: 78.36px;">سرویس در محل</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requestworks as $requestwork)

                                    <tr class="odd">
                                        <td class="">{{ $requestwork->request_number }}</td>
                                        <td>{{ $requestwork->equipments->name }}</td>
                                        <td class="">{{ $requestwork->request_status }}</td>
                                        <td>
                                            <div class="d-inline-block"><a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                        href="/requestwork/edit/{{ $requestwork->id }}" class="dropdown-item">ویرایش اطلاعات
                                                        درخواست‌کار</a></div>
                                            </div><a href="/requestwork/edit/{{ $requestwork->id }}" class="btn btn-sm btn-icon item-edit"><i
                                                    class="bx bxs-edit"></i></a>
                                        </td>
                                        <td>{{  $requestwork->description }}</td>
                                        <td>{{ $requestwork->estimated_cost}}</td>
                                        <td>{{  $requestwork->real_cost }}</td>
                                        <td>{{  $requestwork->Urgency_Work }}</td>
                                        <td class="">{{ $requestwork->customers->userID->name}}</td>
                                        <td>{{ $requestwork->barnds->name }}</td>
                                        <td>{{ $requestwork->typeEqupments->name }}</td>
                                        <td class="">{{ $requestwork->equipment_number }}</td>
                                        <td class="">{{ $requestwork->date_enter== null ? "نامشخص":App\Models\RequestWork::GregoriantoJalali($requestwork->date_enter) }}</td>
                                        <td>{{ $requestwork->date_delivery== null ? "نامشخص": App\Models\RequestWork::GregoriantoJalali($requestwork->date_delivery) }}</td>
                                        <td>{{ $requestwork->date_out== null ? "نامشخص": App\Models\RequestWork::GregoriantoJalali($requestwork->date_out) }}</td>
                                        <td class="sorting_1"></td>
                                        <td class="">{{$requestwork->is_active }}</td>
                                        <td class="">{{ $requestwork->serviceplace }}</td>

                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">شماره درخواست‌کار</th>
                                        <th rowspan="1" colspan="1">نام تجهیز</th>
                                        <th rowspan="1" colspan="1">وضعیت درخواست‌کار</th>
                                        <th rowspan="1" colspan="1">نمایش جزئیات</th>
                                        <th rowspan="1" colspan="1">توضیحات</th>
                                        <th rowspan="1" colspan="1">هزینه تقریبی</th>
                                        <th rowspan="1" colspan="1">هزینه واقعی</th>
                                        <th rowspan="1" colspan="1">فوریت درخواست‌کار</th>
                                        <th rowspan="1" colspan="1">نام مشتری</th>
                                        <th rowspan="1" colspan="1">برند تجهیز</th>
                                        <th rowspan="1" colspan="1">تیپ تجهیز</th>
                                        <th rowspan="1" colspan="1">شماره سریال تجهیز</th>
                                        <th rowspan="1" colspan="1">تاریخ ورود</th>
                                        <th rowspan="1" colspan="1">تاریخ شروع به کار</th>
                                        <th rowspan="1" colspan="1">تاریخ تحویل</th>
                                        <th rowspan="1" colspan="1">ایجاد شده توسط</th>
                                        <th rowspan="1" colspan="1">وضعیت</th>
                                        <th rowspan="1" colspan="1">سرویس در محل</th>
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
    <script src="../../assets/js/tables-datatables-requestwork.js"></script>
@endsection
