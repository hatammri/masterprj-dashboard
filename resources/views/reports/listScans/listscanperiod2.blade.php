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

            <!-- Advanced Search -->
            <div class="card">
                <h5 class="card-header heading-color">جستجوی پیشرفته</h5>
                <!--Search Form -->
                <div class="card-body">
                    <form class="dt_adv_search" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">نام گمرک:</label>
                                        {{-- <input type="text" class="form-control dt-input dt-full-name" data-column="1" placeholder="جان اسنو" data-column-index="0"> --}}
                                        <select class="select2 form-select dt-input dt-name" data-column="1"
                                            data-column-index="0">
                                            <option value="">همه موارد</option>
                                            <option value="میرجاوه">میرجاوه</option>
                                            <option value="جلفا">جلفا</option>
                                            <option value="لطف آباد">لطف آباد</option>
                                            <option value="بازرگان">بازرگان</option>
                                            <option value="پرویزخان">پرویزخان</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">نام دستگاه:</label>
                                        {{-- <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com" data-column-index="1"> --}}
                                        <select class="select2 form-select dt-input dt-Scanning_device" data-column="1"
                                            data-column-index="0">
                                            <option value="">همه موارد</option>
                                            <option value="بهیار۱">بهیار۱</option>
                                            <option value="بهیار۲">بهیار۲</option>
                                            <option value="ساپا1">ساپا 1</option>
                                            <option value="ساپا2">ساپا ۲</option>
                                            <option value="ساپا3">ساپا ۳</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">وضعیت دستگاه:</label>
                                        {{-- <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com" data-column-index="1"> --}}
                                        <select class="select2 form-select dt-input dt-status" data-column="1"
                                            data-column-index="0">
                                            <option value="">همه موارد</option>
                                            <option value="فعال">فعال</option>
                                            <option value="غیرفعال">غیرفعال</option>
                                            <option value="خراب">خراب</option>
                                            <option value="درحال‌تعمیر">درحال تعمیر</option>
                                            <option value="نامشخص">نامشخص</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">تاریخ نصب: </label>
                                        <div class="mb-0">
                                            <input type="text" class="form-control dt-date flatpickr-range dt-input"
                                                data-column="5" placeholder="تاریخ شروع تا پایان" data-column-index="4"
                                                name="dt_date">
                                            <input type="hidden" class="form-control dt-date start_date dt-input"
                                                data-column="5" data-column-index="4" name="value_from_start_date">
                                            <input type="hidden" class="form-control dt-date end_date dt-input"
                                                name="value_from_end_date" data-column="5" data-column-index="4">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">تاریخ : </label>
                                        <div class="mb-0">
                                            <input type="text" class="form-control dt-date flatpickr-range dt-input"
                                                data-column="5" placeholder="تاریخ شروع تا پایان" data-column-index="4"
                                                name="dt_date">
                                            <input type="hidden" class="form-control dt-date start_date dt-input"
                                                data-column="5" data-column-index="4" name="value_from_start_date">
                                            <input type="hidden" class="form-control dt-date end_date dt-input"
                                                name="value_from_end_date" data-column="5" data-column-index="4">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <hr class="mt-0">
                <div class="card-datatable table-responsive">
                    <table class="dt-advanced-search table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
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
                                <th></th>
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
            <!--/ Advanced Search -->
                   <!-- Column Search -->
                   <div class="card">
                    <h5 class="card-header heading-color">جستجوی ستون</h5>
                    <div class="card-datatable text-nowrap">
                      <table class="dt-column-search table table-bordered">
                        <thead>
                          <tr>
                            <th></th>
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
                            <th></th>
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
    <script src="../../assets/js/tables-datatables-scanners.js"></script>
@endsection
