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
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css">

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

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css">

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
            <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">تعریف قطعات زیر مجموعه تجهیز /</span>
                pm شماره: {{ $pm->id }} </h4>

            <div class="card mb-4">
                <h5 class="card-header heading-color">ثبت قطعه جدید</h5>
                <form action="{{ route('partdef.store', ['pm' => $pm->id]) }}" method="POST" class="card-body">
                    @csrf
                    @method('put')
                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-brand">شماره سریال تجهیز pm مربوطه </label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-brand2" class="input-group-text"><i
                                        class="bx bx-award"></i></span>
                                <input name="name" value="{{ $pm->equipment_number }}" type="text"
                                    id="basic-icon-default-brand" class="form-control" placeholder="نامشخص"
                                    aria-label="ACME Inc." aria-describedby="basic-icon-default-brand2" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-brand">شماره درخواستکار pm مربوطه </label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-brand2" class="input-group-text"><i
                                        class="bx bx-award"></i></span>
                                <input name="name" value="{{ $pm->requestworks->request_number }}" type="text"
                                    id="basic-icon-default-brand" class="form-control" placeholder="نامشخص"
                                    aria-label="ACME Inc." aria-describedby="basic-icon-default-brand2" disabled>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-1">نام
                                قطعه</label>
                            <select name="part_id" id="collapsible-UnitMeasurement" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">
                                    انتخاب کنید
                                </option>
                                @foreach ($Part as $itemPart)
                                    <option value="{{ $itemPart->id }}">
                                        {{ $itemPart->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-2">برند</label>
                            <select name="brand_id" id="collapsible-UnitMeasurement" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">
                                    انتخاب کنید
                                </option>
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
                            <input name="num_parts_used" type="text" id="form-repeater-1-2"
                                class="form-control text-start" placeholder="مثال :3" dir="ltr">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">تاریخ
                                تعویض</label>
                            <div class="input-group input-group-merge">
                                <span id="span_date_Replacement" class="input-group-text"><i
                                        class="fas fa-clock"></i></span>
                                <input id="input_date_Replacement" name="date_Replacement" type="text"
                                    class="form-control" placeholder="مثال:1403/02/03">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">تاریخ
                                تعویض بعدی</label>
                            <div class="input-group input-group-merge">
                                <span id="span_date_Replacement_next" class="input-group-text"><i
                                        class="fas fa-clock"></i></span>
                                <input id="input_date_Replacement_next" name="date_Replacement_next" type="text"
                                    class="form-control" placeholder="مثال:1403/02/03">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-brand">ساعت کار مجاز</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-brand2" class="input-group-text"><i
                                        class="bx bx-clock"></i></span>
                                <input name="Allowed_working_hours" type="text" id="basic-icon-default-brand"
                                    class="form-control" placeholder=" مثال:20" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-brand2">
                            </div>
                        </div>

                    </div>

                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                        <button type="reset" class="btn btn-label-secondary">انصراف</button>
                    </div>
                </form>
            </div>
            <hr class="my-5">

            <!-- Bootstrap Table with Header - Dark -->
            <div class="card">
                <h5 class="card-header heading-color">تعریف قطعات زیر مجموعه این pm</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>شناسه </th>

                                <th>نام قطعه </th>
                                <th>برند</th>
                                <th>شماره درخواست‌کار</th>
                                <th>تعداد استفاده شده</th>
                                <th>تاریخ تعویض</th>
                                <th>تاریخ تعویض بعدی  </th>
                                <th>ساعت کار مجاز   </th>
                                <th>عمل‌ها</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($PmPart as $itemPmPart)
                                <tr>
                                    <td>{{ $itemPmPart->id}}</td>

                                    <td>{{ $itemPmPart->parts->name }}</td>
                                    <td>{{ $itemPmPart->brands->name }}</td>

                                    <td><span
                                            class="badge bg-label-primary me-1">{{ $itemPmPart->pms->requestworks->request_number }}</span>
                                    </td>
                                    <td>{{ $itemPmPart->num_parts_used }}</td>
                                    <td>{{ $itemPmPart->date_Replacement== null ? "نامشخص":App\Models\PmPart::GregoriantoJalali($itemPmPart->date_Replacement) }} </td>
                                     <td>{{ $itemPmPart->date_Replacement_next== null ? "نامشخص":App\Models\PmPart::GregoriantoJalali($itemPmPart->date_Replacement_next ) }} </td>
                                    <td>{{ $itemPmPart->Allowed_working_hours }}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> ویرایش</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>


        </div>


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
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/jdate/jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr-jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/l10n/fa-jdate.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <!-- Main JS -->
    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/autosize/autosize.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="../../assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>
    <script src="../../assets/js/forms-pickers.js"></script>
    <!-- Page JS -->
    {{-- <script src="../../assets/js/forms-pickers.js"></script> --}}
    <script src="../../assets/js/forms-extras.js"></script>
    <script src="../../assets/js/jquery.czMore-latest.js"></script>
    <script>
        new mds.MdsPersianDateTimePicker(document.querySelector('#span_date_Replacement_next'), {
            targetTextSelector: '#input_date_Replacement_next',
            persianNumber: false

        });
        new mds.MdsPersianDateTimePicker(document.querySelector('#span_date_Replacement'), {
            targetTextSelector: '#input_date_Replacement',
            persianNumber: false

        });
        new mds.MdsPersianDateTimePicker(document.querySelector('#span_date_out'), {
            targetTextSelector: '#input_date_out',
            persianNumber: false

        });
    </script>
@endsection
