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
                <span class="text-muted fw-light">قطعه /</span> ویرایش قطعه
            </h4>


            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header heading-color">ویرایش قطعه </h5>
                <form action="{{ route('part.update' , ['part' => $part->id]) }}" method="POST" class="card-body">
                    @csrf
                    @method('put')                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-part">نام قطعه</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-part2" class="input-group-text"><i
                                        class="bx bx-buildings"></i></span>
                                <input name="name" type="text" id="basic-icon-default-part" value="{{$part->name}}"
                                    class="form-control" placeholder="مثال:آماده‌ساز " aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-part2">
                            </div>
                        </div>

                    </div>

                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                        <button type="reset" class="btn btn-label-secondary">انصراف</button>
                    </div>
                </form>
            </div>



            {{-- <!-- Collapsible Section -->
            <div class="row my-4">
                <div class="col">
                    <h6 class="secondary-font mt-4">بخش قابل جمع شدن</h6>
                    <div class="accordion" id="collapsibleSection">
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryOptions">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDeliveryOptions" aria-expanded="false"
                                    aria-controls="collapseDeliveryOptions">
                                    گزینه‌های تحویل
                                </button>
                            </h2>
                            <div id="collapseDeliveryOptions" class="accordion-collapse collapse"
                                aria-labelledby="headingDeliveryOptions" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md mb-md-0 mb-2">
                                            <div class="form-check custom-option custom-option-basic">
                                                <label class="form-check-label custom-option-content" for="radioStandard">
                                                    <input name="CustomRadioDelivery" class="form-check-input"
                                                        type="radio" value="" id="radioStandard" checked>
                                                    <span class="custom-option-header">
                                                        <span class="h6 mb-0">استاندارد 3-5 روز</span>
                                                        <span>رایگان</span>
                                                    </span>
                                                    <span class="custom-option-body">
                                                        <small> جمعه، 15 فروردین - دوشنبه، 18 فروردین </small>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md mb-md-0 mb-2">
                                            <div class="form-check custom-option custom-option-basic">
                                                <label class="form-check-label custom-option-content" for="radioExpress">
                                                    <input name="CustomRadioDelivery" class="form-check-input"
                                                        type="radio" value="" id="radioExpress">
                                                    <span class="custom-option-header">
                                                        <span class="h6 mb-0">سریع</span>
                                                        <span>5,000 تومان</span>
                                                    </span>
                                                    <span class="custom-option-body">
                                                        <small> جمعه، 15 فروردین - یکشنبه، 17 فروردین </small>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-basic">
                                                <label class="form-check-label custom-option-content"
                                                    for="radioOvernight">
                                                    <input name="CustomRadioDelivery" class="form-check-input"
                                                        type="radio" value="" id="radioOvernight">
                                                    <span class="custom-option-header">
                                                        <span class="h6 mb-0">شبانه</span>
                                                        <span>10,000 تومان</span>
                                                    </span>
                                                    <span class="custom-option-body">
                                                        <small>جمعه، 15 فروردین - شنبه، 16 فروردین</small>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingPaymentMethod">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePaymentMethod" aria-expanded="false"
                                    aria-controls="collapsePaymentMethod">
                                    نحوه پرداخت
                                </button>
                            </h2>
                            <div id="collapsePaymentMethod" class="accordion-collapse collapse"
                                aria-labelledby="headingPaymentMethod" data-bs-parent="#collapsibleSection">
                                <form>
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-payment"
                                                    class="form-check-input form-check-input-payment" type="radio"
                                                    value="credit-card" id="collapsible-payment-cc" checked>
                                                <label class="form-check-label" for="collapsible-payment-cc">
                                                    کارت اعتباری/Debit/ATM <i class="bx bx-credit-card-alt"></i>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-payment"
                                                    class="form-check-input form-check-input-payment" type="radio"
                                                    value="cash" id="collapsible-payment-cash">
                                                <label class="form-check-label" for="collapsible-payment-cash">
                                                    پرداخت در محل
                                                    <i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="می‌توانید در هنگام تحویل محصول پرداخت کنید."></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="form-credit-card" class="row">
                                            <div class="col-12 col-md-8 col-xl-6">
                                                <div class="mb-3">
                                                    <label class="form-label w-100" for="creditCardMask">شماره
                                                        کارت</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="creditCardMask" name="creditCardMask"
                                                            class="form-control credit-card-mask text-start"
                                                            placeholder="1356 3215 6548 7898"
                                                            aria-describedby="creditCardMask2" dir="ltr">
                                                        <span class="input-group-text cursor-pointer p-1"
                                                            id="creditCardMask2"><span class="card-type"></span></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="collapsible-payment-name">نام</label>
                                                            <input type="text" id="collapsible-payment-name"
                                                                class="form-control" placeholder="جان اسنو">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="collapsible-payment-expiry-date">تاریخ انقضا</label>
                                                            <input type="text" id="collapsible-payment-expiry-date"
                                                                class="form-control expiry-date-mask text-start"
                                                                placeholder="YY/MM" dir="ltr">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="collapsible-payment-cvv">کد
                                                                CVV</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="collapsible-payment-cvv"
                                                                    class="form-control cvv-code-mask text-start"
                                                                    maxlength="4" placeholder="654" dir="ltr">
                                                                <span class="input-group-text cursor-pointer"
                                                                    id="collapsible-payment-cvv2"><i
                                                                        class="bx bx-help-circle text-muted"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="شماره CVV کارت"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-1">
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                                            <button type="reset" class="btn btn-label-secondary">انصراف</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}



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
