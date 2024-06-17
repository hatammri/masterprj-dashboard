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
                <span class="text-muted fw-light">شرکت /</span> ثبت شرکت جدید
            </h4>


            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header heading-color">ثبت شرکت جدید</h5>
                <form action="{{ route('company.store') }}" method="POST" class="card-body">
                    @csrf
                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">نام‌شرکت</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-buildings"></i></span>
                                <input name="name" type="text" id="basic-icon-default-company"
                                    class="form-control" placeholder="مثال:فولاد‌مبارکه" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-email">ایمیل</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <span id="basic-icon-default-email2" class="input-group-text"
                                    dir="ltr">@gmail.com</span>
                                <input name="email" type="text" id="basic-icon-default-email"
                                    class="form-control text-start" placeholder="john.doe" aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2" dir="ltr">
                            </div>
                            <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-phone">شماره تلفن</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input name="phonenumber" type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask text-start" placeholder="658 799 8941"
                                    aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">توضیحات</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                        class="bx bx-comment"></i></span>
                                <textarea name="description" id="basic-icon-default-message" class="form-control" placeholder="توضیحات را اینجا بنویسید"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="collapsible-address">آدرس</label>
                            <textarea name="address" class="form-control" id="collapsible-address" rows="2" placeholder="بلوار نیایش"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-ostan">استان</label>
                            <select name="state" id="collapsible-ostan" class="select2 form-select"
                                data-allow-clear="true">
                                @foreach ($ostan as $itemostan)
                                   <option value="{{ $itemostan->id }}" {{ $itemostan->id == 4 ? 'selected' : '' }}>
                                         {{ $itemostan->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="collapsible-shahrestan">شهرستان</label>
                            <select name="city" id="collapsible-shahrestan" class="select2 form-select"
                                data-allow-clear="true">
                                @foreach ($shahrestan as $itemshahrestan)
                                    <option value="{{ $itemshahrestan->id }}"
                                        {{ $itemshahrestan->id == 37 ? 'selected' : '' }}>
                                        {{ $itemshahrestan->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="col-md-6">
                            <label class="form-label" for="collapsible-city">شهر</label>
                            <input type="text" id="collapsible-city" class="form-control"
                                placeholder="تبریز">
                        </div> --}}

                        {{-- <label class="form-check-label">نوع آدرس</label>
                        <div class="col mt-2">
                            <div class="form-check form-check-inline">
                                <input name="collapsible-address-type" class="form-check-input"
                                    type="radio" value="" id="collapsible-address-type-home"
                                    checked>
                                <label class="form-check-label" for="collapsible-address-type-home">منزل
                                    (تحویل کل روز)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="collapsible-address-type" class="form-check-input"
                                    type="radio" value="" id="collapsible-address-type-office">
                                <label class="form-check-label" for="collapsible-address-type-office">
                                    دفتر (تحویل بین 10 صبح - 5 عصر)
                                </label>
                            </div>
                        </div> --}}
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
