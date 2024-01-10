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
                <span class="text-muted fw-light">جدول‌های داده /</span> پیشرفته
            </h4>
            <div class="row">

                <!-- Finance Summary -->
                <div class="col-md-12 col-lg-12 mb-4 order-2 order-lg-0">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center me-3">
                                <img src="../../assets/img/avatars/12.png" alt="آواتار" class="rounded-circle me-3"
                                    width="54">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0">گزارش مغایرت در بارنامه گمرک میرجاوه </h5>
                                    <small class="text-muted primary-font">جلال صادقی اپراتور اسکنر صاپا 1</small>
                                </div>
                            </div>
                            <div class="dropdown btn-pinned primary-font">
                                <button class="btn p-0" type="button" id="financoalReport" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="financoalReport">
                                    <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                                    <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                                    <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-4 mb-5 mt-4">
                                <div class="d-flex flex-column me-2">
                                    <h6>تاریخ شروع</h6>
                                    <span class="badge bg-label-success">2 آذر 1402</span>
                                </div>
                                <div class="d-flex flex-column me-2">
                                    <h6>تاریخ پایان</h6>
                                    <span class="badge bg-label-danger">2 آذر 1402</span>
                                </div>
                                <div class="d-flex flex-column me-2">
                                    <h6>اعضا</h6>
                                    <ul class="list-unstyled me-2 d-flex align-items-center avatar-group mb-0">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="محمدرضا عزیزی" class="avatar avatar-xs pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="آواتار">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="احسان اسدی" class="avatar avatar-xs pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/12.png"
                                                alt="آواتار">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="رضا عبدالهی" class="avatar avatar-xs pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="آواتار">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="جلال صادقی" class="avatar avatar-xs pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/14.png"
                                                alt="آواتار">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="محسن زمانی" class="avatar avatar-xs pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/10.png"
                                                alt="آواتار">
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-column me-2">
                                    <h6>نوع مغایرت</h6>
                                    <span>مغایرت در بار</span>
                                </div>
                                <div class="d-flex flex-column me-2">
                                    <h6>کد بارنامه</h6>
                                    <span>Br9654</span>
                                </div>
                                <div class="d-flex flex-column me-2">
                                    <h6>نام راننده</h6>
                                    <span>عباس مقارن عسگری</span>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="card-footer border-top">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><i class="bx bx-check"></i> 74 وظیفه</li>
                                <li class="list-inline-item"><i class="bx bx-chat"></i> 678 دیدگاه</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <!-- Finance Summary -->

            </div>
            <!-- Advanced Search -->
            <div class="card">
                <h5 class="card-header heading-color">جزئیات مغایرت بارنامه BR9654</h5>
                <!--Search Form -->
                <div class="card-datatable table-responsive">
                    <table class="dt-advanced-search table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>QR_Code</th>
                                <th>X_Ray</th>
                                <th>رفتار سگ</th>
                                <th>مشاهدات‌ کاربر</th>
                                <th>نتیجه</th>
                                <th>توضیحات</th>
                                <th>نمایش جزئیات</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>QR_Code</th>
                                <th>X_Ray</th>
                                <th>رفتار سگ</th>
                                <th>مشاهدات‌ کاربر</th>
                                <th>نتیجه</th>
                                <th>توضیحات</th>
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
    <script src="../../assets/js/tables-datatables-compaire.js"></script>
@endsection
