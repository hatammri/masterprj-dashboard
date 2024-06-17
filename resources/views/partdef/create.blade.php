@extends('index')
@section('csslink')
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../../assets/css/demo.css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/rtl.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css">
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../../assets/css/demo.css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/rtl.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">فرم‌ها /</span>
                موارد بیشتر</h4>

            <div class="row">


                <div class="card mb-4">
                    <h5 class="card-header heading-color">مشخصات pm</h5>
                    <form class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlReadOnlyInput1" class="form-label">
                                    شماره سریال تجهیز</label>
                                <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                    placeholder="ورودی فقط خواندنی ..." readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlReadOnlyInput1" class="form-label">
                                    شماره درخواست‌کار</label>
                                <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                    placeholder="ورودی فقط خواندنی ..." readonly>
                            </div>

                        </div>

                    </form>
                </div>

                <!-- Form Repeater -->
                <div class="card mb-4">
                    <h5 class="card-header heading-color">تکرار کننده فرم</h5>
                    <div class="card-body">
                        <form class="form-repeater">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label class="form-label" for="form-repeater-1-1">نام
                                                قطعه</label>
                                            <select name="semat" id="collapsible-UnitMeasurement"
                                                class="select2 form-select" data-allow-clear="true">
                                                @foreach ($Part as $itemPart)
                                                    <option value="{{ $itemPart->id }}">
                                                        {{ $itemPart->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="form-repeater-1-2">برند</label>
                                            <select name="semat" id="collapsible-UnitMeasurement"
                                            class="select2 form-select" data-allow-clear="true">
                                            @foreach ($Brand as $itemBrand)
                                                <option value="{{ $itemBrand->id }}">
                                                    {{ $itemBrand->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="form-repeater-1-3">تعداد
                                                استفاده شده</label>
                                                <input type="password" id="form-repeater-1-2" class="form-control text-start"
                                                placeholder="············" dir="ltr">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="form-repeater-1-4">تاریخ
                                                تعویض</label>
                                            <select id="form-repeater-1-4" class="form-select">
                                                <option value="Designer">طراح</option>
                                                <option value="Developer">توسعه دهنده</option>
                                                <option value="Tester">آزمایشگر</option>
                                                <option value="Manager">مدیر</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="form-repeater-1-4">تاریخ
                                                تعویض بعدی</label>
                                            <select id="form-repeater-1-4" class="form-select">
                                                <option value="Designer">طراح</option>
                                                <option value="Developer">توسعه دهنده</option>
                                                <option value="Tester">آزمایشگر</option>
                                                <option value="Manager">مدیر</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="form-repeater-1-4">ساعت کار
                                                مجاز</label>
                                            <select id="form-repeater-1-4" class="form-select">
                                                <option value="Designer">طراح</option>
                                                <option value="Developer">توسعه دهنده</option>
                                                <option value="Tester">آزمایشگر</option>
                                                <option value="Manager">مدیر</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                                            <button class="btn btn-label-danger mt-4" data-repeater-delete>
                                                <i class="bx bx-x me-1"></i>
                                                <span class="align-middle">حذف</span>
                                            </button>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="mb-0">
                                <button class="btn btn-primary" data-repeater-create>
                                    <i class="bx bx-plus me-1"></i>
                                    <span class="align-middle">افزودن</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Form Repeater -->
            </div>
        </div>
        <!-- / Content -->



        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
@section('scripts')
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>

    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/autosize/autosize.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="../../assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/forms-extras.js"></script>
@endsection
