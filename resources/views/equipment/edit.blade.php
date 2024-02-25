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
    <link rel="stylesheet" href="../../assets/vendor/libs/dropzone/dropzone.css">
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
                <span class="text-muted fw-light">تجهیز /</span>ویرایش تجهیز
            </h4>


            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header heading-color">ویرایش تجهیز </h5>
                <form action="{{ route('equipment.update', ['equipment' => $equipment->id]) }}" method="POST"
                    class="card-body">
                    @csrf
                    @method('put')
                    {{-- <h6 class="fw-normal">1. جزئیات حساب</h6> --}}
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="basic-icon-default-brand">نام تجهیز</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-brand2" class="input-group-text"><i
                                            class="bx bx-cube"></i></span>
                                    <input value="{{ $equipment->name }}" form="dropzone-multi" name="name"
                                        type="text" id="basic-icon-default-brand" class="form-control"
                                        placeholder="مثال: گیربکس" aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-brand2">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="basic-icon-default-price">قیمت تجهیز (تومان)</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-dollar"></i></span>

                                    <input value="{{ $equipment->price }}" form="dropzone-multi" name="price"
                                        type="text" id="basic-icon-default-price" class="form-control text-start"
                                        placeholder="10,000,000" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-price2" dir="ltr">
                                </div>
                                <div class="form-text">قیمت تجهیز مورد نظر خود را به تومان وارد کنید</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="basic-icon-default-brand">رنگ</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-brand2" class="input-group-text"><i
                                            class="bx bx-palette"></i></span>
                                    <input value="{{ $equipment->color }}" form="dropzone-multi" name="color"
                                        type="text" id="basic-icon-default-brand" class="form-control"
                                        placeholder="مثال: سفید" aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-brand2">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="d-block form-label">امنیت تجهیز</label>
                                <div class="form-check form-check-inline">
                                    <input form="dropzone-multi" type="radio" id="basic-default-radio-male"
                                        name="equipment_security" class="form-check-input" value="1"
                                        {{ $equipment->equipment_security == 1 ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="basic-default-radio-male">فعال</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input form="dropzone-multi" type="radio" id="basic-default-radio-female"
                                        name="equipment_security" class="form-check-input" value="0"
                                        {{ $equipment->equipment_security == 0 ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="basic-default-radio-female">غیرفعال</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="basic-icon-default-phone">وزن تجهیز (کیلوگرم)</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="bx bx-calculator"></i></span>
                                    <input value="{{ $equipment->weight }}" form="dropzone-multi" name="weight"
                                        type="text" id="basic-icon-default-phone"
                                        class="form-control phone-mask text-start" placeholder="1000" aria-label="1000"
                                        aria-describedby="basic-icon-default-phone2" dir="ltr">

                                </div>
                                <div class="form-text">وزن تجهیز مورد نظر خود را به کیلوگرم وارد کنید</div>

                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="basic-icon-default-brand">ابعاد تجهیز</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-brand2" class="input-group-text"><i
                                            class="bx bx-palette"></i></span>
                                    <input value="{{ $equipment->dimensions }}" form="dropzone-multi" name="dimensions"
                                        type="text" id="basic-icon-default-brand" class="form-control"
                                        placeholder="مثال: 10*20*30" aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-brand2">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="basic-icon-default-message">توضیحات</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i
                                            class="bx bx-comment"></i></span>
                                    <textarea form="dropzone-multi" name="description" id="basic-icon-default-message" class="form-control"
                                        placeholder="توضیحات را اینجا بنویسید" aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2">{{ $equipment->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="collapsible-brand">برند تجهیز</label>
                                <select form="dropzone-multi" name="brand_id" id="collapsible-brand"
                                    class="select2 form-select" data-allow-clear="true">
                                    @foreach ($brand as $itembrand)
                                        <option value="{{ $itembrand->id }}"
                                            {{ $equipment->brand_id == $itembrand->id ? 'selected' : '' }}>
                                            {{ $itembrand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="collapsible-typeEquipment">تیپ و نوع تجهیز</label>
                                <select form="dropzone-multi" name="type_equipment_id" id="collapsible-typeEquipment"
                                    class="select2 form-select" data-allow-clear="true">
                                    @foreach ($typeEquipment as $itemtypeEquipment)
                                    <option value="{{ $itemtypeEquipment->id }}"
                                        {{ $equipment->type_equipment_id == $itemtypeEquipment->id ? 'selected' : '' }}>
                                        {{ $itemtypeEquipment->name }}
                                    </option>
                                @endforeach

                                </select>
                            </div>
                        </div>
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
    <script src="../../assets/vendor/libs/dropzone/dropzone.js"></script>
    <script src="../../assets/js/forms-file-upload.js"></script>

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
