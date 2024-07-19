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
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">PM /</span> ثبت PM جدید
            </h4>


            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header heading-color">ثبت PM جدید</h5>

                <form action="{{ route('pm.update', ['pm' => $pm->id]) }}" method="POST"
                    class="card-body">
                    @csrf
                    @method('put')
                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="row g-3">


                        <div class="col-md-6">

                            <label class="form-label" for="collapsible-equipment_number">شماره سریال تجهیز </label>
                            <span onclick="RefreshEquipmentNumber()">
                                <i class="bx bx-refresh" id="refresh-equipment_number"></i>
                            </span>
                            <select name="equipment_number" id="collapsible-equipment_number" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">
                                    انتخاب کنید
                                </option>
                                @foreach ($requestwork as $itemRequestwork)
                                    <option value="{{ $itemRequestwork->equipment_number }}" {{ $itemRequestwork->equipment_number== $pm->equipment_number ? 'selected' : '' }}>
                                        {{ $itemRequestwork->equipment_number }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-request_number">شماره درخواست‌‌‌‌‌‌‌‌‌کار </label>
                            <select name="requestwork_id" id="collapsible-request_number" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">
                                    انتخاب کنید
                                </option>
                                @foreach ($requestworkwithoutunique as $itemRequestwork)
                                    <option value="{{ $itemRequestwork->id }}" {{ $itemRequestwork->request_number== $pm_request_number->request_number ? 'selected' : '' }}>
                                        {{ $itemRequestwork->request_number }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-equipment"> نام تجهیز</label>
                            <input name="equipment_name" type="text" id="equipment_name"
                                    class="form-control"  aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" disabled>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-equipment"> نام شرکت</label>
                            <input name="company_name" type="text" id="company_name"
                            class="form-control" aria-label="ACME Inc."
                            aria-describedby="basic-icon-default-company2" disabled>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">نام مستعار تجهیز</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-hard-hat"></i></span>
                                <input name="equipment_name_Alias" type="text" id="basic-icon-default-company"
                                    class="form-control" placeholder="مثال:گیربکس  " aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">محل نصب</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                        class="bx bx-comment"></i></span>
                                <textarea name="installation_location" id="basic-icon-default-message" class="form-control"
                                    placeholder="توضیحات را اینجا بنویسید" aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h5 class="card-header heading-color">تعریف قطعات اجزا تجهیز</h5>
                            <div class="card-body">
                                <div id="czContainer">
                                    <div id="first">
                                        <div class="recordset">
                                            <br />

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <label class="form-label" for="form-repeater-1-1">نام
                                                        قطعه</label>
                                                    <select name="FormData[part_id][]" id="collapsible-UnitMeasurement"
                                                        class="select2 form-select" data-allow-clear="true">
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
                                                    <select name="FormData[brand_id][]" id="collapsible-UnitMeasurement"
                                                        class="select2 form-select" data-allow-clear="true">
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
                                                    <input name="FormData[num_parts_used][]" type="text"
                                                        id="form-repeater-1-2" class="form-control text-start"
                                                        placeholder="مثال :3" dir="ltr">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="form-repeater-1-4">تاریخ
                                                        تعویض</label>
                                                    <input type="text" name="FormData[date_Replacement][]"
                                                        class="form-control" placeholder="YYYY/MM/DD - HH:MM"
                                                        id="form-repeater-1-3">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="form-repeater-1-4">تاریخ
                                                        تعویض بعدی</label>

                                                    <input type="text" name="FormData[date_Replacement_next][]"
                                                        class="form-control" placeholder="YYYY/MM/DD - HH:MM"
                                                        id="form-repeater-1-4">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="form-repeater-1-4">ساعت کار
                                                        مجاز</label>
                                                    <input name="FormData[Allowed_working_hours][]" type="text"
                                                        id="form-repeater-1-5" placeholder="HH:MM:SS"
                                                        class="form-control">

                                                </div>

                                            </div>
                                            <br />

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                            <button type="reset" class="btn btn-label-secondary">انصراف</button>
                            <br />
                </form>
                <br />

            </div>
            <br />

        </div>
    </div>

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection





@section('scripts')
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
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
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/jdate/jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr-jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/l10n/fa-jdate.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/select2/i18n/fa.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>
    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>
    <script src="../../assets/js/forms-pickers.js"></script>
    <script src="../../assets/js/jquery.czMore-latest.js"></script>
    <script type="text/javascript">
        //One-to-many relationship plugin by Yasir O. Atabani. Copyrights Reserved.
        $("#czContainer").czMore();
    </script>

    <script>
        console.log('script');

        $('#collapsible-equipment_number').change(function() {

            let equipment_number = $(this).val();

            var equipment_name = document.getElementById("equipment_name");
            var company_name = document.getElementById("company_name");

            console.log("equipment_name")

            $.get(`{{ url('/requestwork/get_requestwork/${equipment_number}') }}`, function(response,
                status) {
                if (status == 'success') {
                    console.log(response);
                    $('#collapsible-request_number').empty();

                    $.each(response, function(key, requestwork) {
                        console.log(requestwork, key);
                        console.log(requestwork.request_number, "item");

                        $("#collapsible-request_number").append('<option value="' +
                            requestwork.id + '">' + requestwork.request_number + '</option>');
                            equipment_name.value = requestwork.equipments.name
                            company_name.value=requestwork.customers.companies.name
                    });
                } else {
                    $('#collapsible-request_number').empty();
                    equipment_name.value ="";
                    company_name.value="";
                }
            }).fail(function() {
                $('#collapsible-request_number').empty();
                equipment_name.value ="";
                company_name.value="";
                     console.log("errorlist");
            })

        });
    </script>
    <script>
        console.log('script');

        $('#collapsible-request_number').change(function() {
            console.log('change');
            let request_id = $(this).val();
            var equipment_name = document.getElementById("equipment_name");
            var company_name = document.getElementById("company_name");


            $.get(`{{ url('/requestwork/get_equipmentnumber/${request_id}') }}`, function(response,
                status) {
                if (status == 'success') {
                    console.log(response);
                    $('#collapsible-equipment_number').empty();

                    $.each(response, function(key, requestwork) {

                        $("#collapsible-equipment_number").append('<option value="' +
                            requestwork.equipment_number + '">' + requestwork.equipment_number +
                            '</option>');
                            equipment_name.value = requestwork.equipments.name
                            company_name.value=requestwork.customers.companies.name
                    });
                } else {
                    $('#collapsible-equipment_number').empty();
                    console.log("error");
                    equipment_name.value ="";
                    company_name.value="";
                }
            }).fail(function() {
                $('#collapsible-equipment_number').empty();
                console.log("errorlist");
                equipment_name.value ="";
                company_name.value="";
            })

        });
    </script>

    <script>
        function RefreshEquipmentNumber() {
            equipment_name.value ="";
            company_name.value="";
            i = "null";
            info = "انتخاب ";
            console.log("refresh");
            $.get(`{{ url('/requestwork/getallrequestwork/') }}`, function(response,
                status) {
                if (status == 'success') {
                    console.log(response);
                    $('#collapsible-equipment_number').empty();
                    $('#collapsible-request_number').empty();

                    $("#collapsible-equipment_number").append('<option value="' +
                        i + '">' + info +
                        '</option>');
                    $("#collapsible-request_number").append('<option value="' +
                        i + '">' + info + '</option>');

                    $.each(response.requestwork, function(key, requestwork) {


                        $("#collapsible-request_number").append('<option value="' +
                            requestwork.id + '">' + requestwork.request_number + '</option>');
                    });
                    $.each(response.requestworkwithunique, function(key, requestwork) {
                        $("#collapsible-equipment_number").append('<option value="' +
                            requestwork.equipment_number + '">' + requestwork.equipment_number +
                            '</option>');
                    });

                } else {
                    $('#collapsible-equipment_number').empty();
                    $('#collapsible-request_number').empty();
                    console.log("error");
                }
            }).fail(function() {
                $('#collapsible-equipment_number').empty();
                $('#collapsible-request_number').empty();
                console.log("errorlist");
            })

        }
    </script>



    <script>
        // console.log('script');

        // $('#collapsible-equipment_number').change(function() {
        //     console.log('change');
        //      let equipment_number = $(this).val();

        //      if (equipment_number) {
        //       $.ajax({
        //              type: "Get",
        //              url: "{{ url('/requestwork/get_requestwork/') }}?equipment_number=" + equipment_number,
        //              success: function(res) {
        //             if (res) {
        //                 $('#collapsible-shahrestan').empty();
        //                 $.each(res, function(key, shahrestan) {

        //                     $("#collapsible-shahrestan").append('<option value="' +
        //                         shahrestan.id + '">' + shahrestan.name + '</option>');

        //                 });
        //             } else {
        //                 $('#collapsible-shahrestan').empty();
        //             }
        //         }
        //     })

        // } else {
        //     $('#collapsible-shahrestan').empty();
        // }

        // });
    </script>
@endsection
