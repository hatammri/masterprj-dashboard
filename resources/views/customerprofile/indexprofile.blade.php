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
            <span class="text-muted fw-light">تنظیمات حساب /</span> حساب
          </h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active my-1 my-md-0" href="javascript:void(0);"><i class="bx bx-user me-1"></i> حساب</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages-account-settings-security.html"><i class="bx bx-lock-alt me-1"></i> امنیت</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages-account-settings-billing.html"><i class="bx bx-detail me-1"></i> صورتحساب و پلن‌ها</a>
                </li>

              </ul>
              <div class="card mb-4">
                <h5 class="card-header heading-color">جزئیات پروفایل</h5>
                <!-- Account -->
                <div class="card-body">
                  <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="../../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
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
                <hr class="my-0">
                <div class="card-body">
                  <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">نام</label>
                        <input class="form-control" type="text" id="firstName" name="firstName" value="جان" autofocus>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">نام خانوادگی</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="اسنو">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">ایمیل</label>
                        <input class="form-control text-start" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" dir="ltr">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="collapsible-company">نام شرکت (چنانچه وجود ندارد سایر انتخاب کنید)</label>
                        <select name="company" id="collapsible-company" class="select2 form-select"
                            data-allow-clear="true">
                            @foreach ($company as $itemcompany)
                                <option value="{{ $itemcompany->id }}">
                                    {{ $itemcompany->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">شماره تلفن</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="phoneNumber" name="phoneNumber" class="form-control text-start"  dir="ltr" disabled>
                          <span class="input-group-text">IR (+98)</span>
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">آدرس</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="آدرس">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="state" class="form-label">استان</label>
                        <input class="form-control" type="text" id="state" name="state" placeholder="آذربایجان شرقی">
                      </div>


                    </div>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                      <button type="reset" class="btn btn-label-secondary">انصراف</button>
                    </div>
                  </form>
                </div>
                <!-- /Account -->
              </div>

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
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/select2/i18n/fa.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/pages-account-settings-account.js"></script>
    </script>
@endsection
