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
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">درخواست‌کار /</span> ویرایش درخواست‌کار جدید
            </h4>


            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header heading-color">ویرایش درخواست‌کار جدید</h5>
                <form action="{{ route('requestwork.update', ['requestwork' => $requestwork->id]) }}" method="POST"
                    class="card-body">
                    @csrf
                    @method('put')
                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-Customer">نام مشتری</label>
                            <select name="customer" id="collapsible-Customer" class="select2 form-select"
                                data-allow-clear="true">
                                @foreach ($customerall as $itemCustomer)
                                <option value="{{ $itemCustomer->id }}" {{ $itemCustomer->id == $customer->id ? 'selected' : '' }}>
                                        {{ $itemCustomer->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-equipment">تجهیز</label>
                            <select name="equipment" id="collapsible-equipment" class="select2 form-select"
                                data-allow-clear="true">
                                @foreach ($equipmentall as $itemEquipment)
                                <option value="{{ $itemEquipment->id }}" {{ $itemEquipment->id == $equipment->id ? 'selected' : '' }}>
                                        {{ $itemEquipment->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-serviceplace">سرویس در مکان</label>
                            <select name="serviceplace" id="collapsible-serviceplace" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="0">
                                    0
                                </option>
                                <option value="1">
                                    1
                                </option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">توضیحات</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                        class="bx bx-comment"></i></span>
                                <textarea name="description" id="basic-icon-default-message" class="form-control" placeholder="توضیحات را اینجا بنویسید"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2">{{ $requestwork->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-email">هزینه تقریبی</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-dollar"></i></span>

                                <input name="estimated_cost" type="text" id="basic-icon-default-email"
                                    class="form-control text-start" placeholder="10,000,000" aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2" dir="ltr" value="{{ $requestwork->estimated_cost}}">
                            </div>
                            <div class="form-text">قیمت تجهیز مورد نظر خود را به تومان وارد کنید</div>
                        </div>
                        <!-- Datetime Picker-->
                        <div class="col-md-6 col-12 mb-4">
                            <label for="flatpickr-datetime" class="form-label"> تاریخ ورود</label>
                            <input type="text"  name="date_enter" class="form-control" placeholder="YYYY/MM/DD - HH:MM"
                                id="flatpickr-datetime1" value="{{ $requestwork->date_enter }}">
                        </div>
                        <div class="col-md-6 col-12 mb-4">
                            <label for="flatpickr-datetime"  name="date_delivery"  class="form-label"> تاریخ تحویل</label>
                            <input type="text" name="date_delivery" class="form-control" placeholder="YYYY/MM/DD - HH:MM"
                                id="flatpickr-datetime2" value="{{ $requestwork->date_delivery }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-rule">فوریت انجام کار (عدد کمتر اهمیت بیشتری
                                دارد)</label>
                            <select name="Urgency_Work" id="collapsible-rule" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="1">
                                    (اضطراری) 1
                                </option>
                                <option value="2">

                                    (خیلی مهم) 2
                                </option>
                                <option value="3">
                                    (مهم) 3
                                </option>
                                <option value="4">
                                    (عادی) 4
                                </option>
                                <option value="5">
                                    5
                                </option>
                                <option value="6">
                                    6
                                </option>
                                <option value="7">
                                    7
                                </option>
                                <option value="8">
                                    8
                                </option>
                                <option value="9">
                                    9
                                </option>
                                <option value="10">
                                    10
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-rule">تغییر وضعیت درخواستکار</label>
                            <select name="Urgency_Work" id="collapsible-rule" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="1">
                                    (اضطراری) 1
                                </option>
                                <option value="
                                2">

                                    (خیلی مهم) 2
                                </option>
                                <option value="3">
                                    (مهم) 3
                                </option>
                                <option value="4">
                                    (عادی) 4
                                </option>
                                <option value="5">
                                    5
                                </option>
                                <option value="6">
                                    6
                                </option>
                                <option value="7">
                                    7
                                </option>
                                <option value="8">
                                    8
                                </option>
                                <option value="9">
                                    9
                                </option>
                                <option value="FF">
                                    FF
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                        <button type="reset" class="btn btn-label-secondary">انصراف</button>
                    </div>
                </form>
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

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>

    <script>
        console.log('script');

        $('#collapsible-ostan').change(function() {
            console.log('change');
            let ostanSelectedid = $(this).val();

            if (ostanSelectedid) {
                $.ajax({
                    type: "Get",
                    url: "{{ url('/getListShahrestan') }}?ostan=" + ostanSelectedid,
                    success: function(res) {
                        if (res) {
                            $('#collapsible-shahrestan').empty();
                            $.each(res, function(key, shahrestan) {

                                $("#collapsible-shahrestan").append('<option value="' +
                                    shahrestan.id + '">' + shahrestan.name + '</option>');

                            });
                        } else {
                            $('#collapsible-shahrestan').empty();
                        }
                    }
                })

            } else {
                $('#collapsible-shahrestan').empty();
            }

        });
    </script>
@endsection