@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-profile.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">جدول‌  /</span> ‌ مغایرت بارنامه‌ها
            </h4>

              <!-- Header -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="user-profile-header-banner">
                      <img src="../../assets/img/pages/mirjave.png" alt="Banner image" class="rounded-top">
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                      <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="../../assets/img/sascan/behyar1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
                      </div>

                      <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                          <div class="user-profile-info">
                            <h4>پایانه مرزی گمرک میرجاوه</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                              <li class="list-inline-item fw-semibold"><i class="bx bx-pen"></i>دستگاه صاپا 1 </li>
                              <li class="list-inline-item fw-semibold"><i class="bx bx-map"></i>استان سیستان و بلوچستان</li>
                              <li class="list-inline-item fw-semibold">
                                <i class="bx bx-calendar-alt"></i> شروع فعالیت با اسکنر 1399/08/01
                              </li>
                            </ul>
                          </div>
                          <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
                            <i class="bx bx-user-check me-1"></i>متصل
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Header -->
            <!-- Advanced Search -->

            <div class="card">
                <h5 class="card-header heading-color">لیست مغایرت‌های ثبت شده</h5>

                <hr class="mt-0">
                <div class="card-datatable table-responsive">
                    <table class="dt-advanced-search table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>شماره بارنامه</th>
                                <th>نام دستگاه</th>
                                <th>اپراتور مربوطه</th>
                                <th>نام راننده</th>
                                <th>تاریخ مغایرت</th>
                                <th>توضیحات کارشناس</th>
                                <th>نمایش جزئیات</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th></th>
                                <th>شماره بارنامه</th>
                                <th>نام دستگاه</th>
                                <th>اپراتور مربوطه</th>
                                <th>نام راننده</th>
                                <th>تاریخ مغایرت</th>
                                <th>توضیحات کارشناس</th>
                                <th>نمایش جزئیات</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--/ Advanced Search -->
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
    <script src="../../assets/js/tables-datatables-contradictions.js"></script>
@endsection
