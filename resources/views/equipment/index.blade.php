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
                <span class="text-muted fw-light">جدول‌داده /</span> لیست تجهیز
            </h4>

            <!-- Column Search -->
            <div class="card">
                <h5 class="card-header heading-color">لیست تجهیز </h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5">

                        <div class="table-responsive">
                            <table class="dt-column-search table table-bordered dataTable" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info" style="width: 1094px;">

                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="نام تجهیز: فعال سازی نمایش به صورت نزولی" aria-sort="ascending"
                                            style="width: 203.36px;">نام تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="قیمت تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 64.36px;">قیمت تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="رنگ تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 51.36px;">رنگ تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="امنیت تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 63.36px;">امنیت تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="وزن تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 51.36px;">وزن تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="ابعاد تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 80.36px;">ابعاد تجهیز</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="توضیحات تجهیز: فعال سازی نمایش به صورت صعودی"
                                            style="width: 80.36px;">توضیحات تجهیز</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="نمایش جزئیات" style="width: 72px;">نمایش جزئیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipments as $equipment )
                                    <tr class="odd">
                                        <td class="sorting_1">{{ $equipment->name }}</td>
                                        <td>{{$equipment->price  }}</td>
                                        <td>{{ $equipment->color }}</td>
                                        <td>{{ $equipment->equipment_security }}</td>
                                        <td>{{ $equipment->weight}}</td>
                                        <td>{{ $equipment->dimensions}}</td>
                                        <td></td>
                                        <td>
                                            <div class="d-inline-block"><a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                        href="/equipment/edit/{{$equipment->id}}" class="dropdown-item">ویرایش اطلاعات
                                                        تجهیز</a></div>
                                            </div><a href="/equipment/edit/{{$equipment->id  }}" class="btn btn-sm btn-icon item-edit"><i
                                                    class="bx bxs-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">نام تجهیز</th>
                                        <th rowspan="1" colspan="1">قیمت تجهیز</th>
                                        <th rowspan="1" colspan="1">رنگ تجهیز</th>
                                        <th rowspan="1" colspan="1">امنیت تجهیز</th>
                                        <th rowspan="1" colspan="1">وزن تجهیز</th>
                                        <th rowspan="1" colspan="1">ابعاد تجهیز</th>
                                        <th rowspan="1" colspan="1">توضیحات تجهیز</th>
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
    <script src="../../assets/js/tables-datatables-equipment.js"></script>
@endsection
