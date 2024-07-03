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
                <span class="text-muted fw-light">اپراتور /</span> ویرایش اپراتور
            </h4>


            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header heading-color">ویرایش اپراتور</h5>
                <form action="{{ route('operator.update' , ['operator' => $operator->id]) }}"  method="POST" class="card-body">
                    @csrf
                    @method('put')
                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="row g-3">

                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img src="../../assets/img/avatars/12.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                              <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                  <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                  <i class="bx bx-upload d-block d-sm-none"></i>
                                  <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg">
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                  <i class="bx bx-reset d-block d-sm-none"></i>
                                  <span class="d-none d-sm-block">بازنشانی</span>
                                </button>

                                <p class="mb-0">فایل‌های JPG، GIF یا PNG مجاز هستند. حداکثر اندازه فایل 800KB.</p>
                              </div>
                            </div>
                          </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">نام اپراتور</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-crosshair"></i></span>
                                <input name="name" type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="مثال: محمد امینی " aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" value="{{ $operator->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">نقش و سمت اپراتور</label>
                            <select name="semat" id="collapsible-UnitMeasurement" class="select2 form-select"
                                data-allow-clear="true">
                                @foreach ($Role as $itemRole)
                                    <option value="{{ $itemRole->id }}" {{ $itemRole->id == $operator->Sematdata->id ? 'selected' : '' }}>

                                        {{ $itemRole->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="select2Multiple" class="form-label">تخصص</label>
                            <select name="specialty[]" id="select2Multiple" class="select2 form-select" multiple>
                                @foreach ($Specialty as $itemSpecialty)
                                        <option value="{{ $itemSpecialty->id}}" @foreach ($operator->specialties as $itemselect) {{ $itemSpecialty->id == $itemselect->id ? 'selected' : '' }}   @endforeach>
                                        {{ $itemSpecialty->name }}
                                    </option>

                                @endforeach

                            </select>
                          </div>

                        <div class="col-md-6">

                            <label class="form-label" for="collapsible-role">وضعیت استفاده از اپراتور</label>
                            <select name="available" id="collapsible-role" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="0" {{ $operator->available == 0 ? 'selected' : '' }} >
                                    اپراتور غایب است
                                </option>
                                <option value="1" {{ $operator->available == 1 ? 'selected' : '' }} >
                                    اپراتور حاضر است
                                </option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">کد ملی</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-detail"></i></span>
                                <input name="codemeli" type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="مثال: 1272459854" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" value="{{ $operator->codemeli}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-company">میزان  (تومان)</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-coin"></i></span>
                                <input name="salery" type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="مثال: 10000000" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" value="{{ $operator->salery}}">
                            </div>
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
