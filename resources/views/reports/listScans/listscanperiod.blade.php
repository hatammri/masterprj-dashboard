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
                <span class="text-muted fw-light">جدول‌داده /</span> دوره‌های اسکن شده
            </h4>

                   <!-- Column Search -->
                   <div class="card">
                    <h5 class="card-header heading-color">لیست دوره های اسکن شده</h5>
                    <div class="card-datatable text-nowrap">
                      <table class="dt-column-search table table-bordered">

                        <thead>

                          <tr>
                            <th>نام گمرک</th>
                            <th>نام دستگاه</th>
                            <th>تاریخ نصب</th>
                            <th>تاریخ</th>
                            <th>اسکن</th>
                            <th>مغایرت</th>
                            <th>وضعیت</th>
                            <th>نمایش جزئیات</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                                <th>نام گمرک</th>
                                <th>نام دستگاه</th>
                                <th>تاریخ نصب</th>
                                <th>تاریخ</th>
                                <th>اسکن</th>
                                <th>مغایرت</th>
                                <th>وضعیت</th>
                                <th>نمایش جزئیات</th>
                          </tr>
                        </tfoot>
                      </table>
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
    <script src="../../assets/js/tables-datatables-scanners2.js"></script>
@endsection
