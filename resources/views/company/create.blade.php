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
        <span class="text-muted fw-light">فرم‌ها /</span> طرح‌های عمودی
      </h4>

      <!-- Basic Layout -->
      <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">طرح پایه</h5>
              <small class="text-muted float-end primary-font">برچسب پیش‌فرض</small>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">نام کامل</label>
                  <input type="text" class="form-control" id="basic-default-fullname" placeholder="جان اسنو">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">شرکت</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="مایکروسافت">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-email">ایمیل</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text" id="basic-default-email2" dir="ltr">@example.com</span>
                    <input type="text" id="basic-default-email" class="form-control text-start" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" dir="ltr">
                  </div>
                  <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">شماره تلفن</label>
                  <input type="text" id="basic-default-phone" class="form-control phone-mask text-start" placeholder="658 799 8941" dir="ltr">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">پیام</label>
                  <textarea id="basic-default-message" class="form-control" placeholder="متن پیام را اینجا بنویسید"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ارسال</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">پایه با آیکن</h5>
              <small class="text-muted float-end primary-font">گروه ورودی ادغام شده</small>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-fullname">نام کامل</label>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="جان اسنو" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-company">شرکت</label>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                    <input type="text" id="basic-icon-default-company" class="form-control" placeholder="مایکروسافت" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-email">ایمیل</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <span id="basic-icon-default-email2" class="input-group-text" dir="ltr">@example.com</span>
                    <input type="text" id="basic-icon-default-email" class="form-control text-start" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" dir="ltr">
                  </div>
                  <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-phone">شماره تلفن</label>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask text-start" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" dir="ltr">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-message">پیام</label>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                    <textarea id="basic-icon-default-message" class="form-control" placeholder="متن پیام را اینجا بنویسید" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">ارسال</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Multi Column with Form Separator -->
      <div class="card mb-4">
        <h5 class="card-header heading-color">چند ستون با جداکننده فرم</h5>
        <form class="card-body">
          <h6 class="fw-normal">1. جزئیات حساب</h6>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="multicol-username">نام کاربری</label>
              <input type="text" id="multicol-username" class="form-control text-start" placeholder="john.doe" dir="ltr">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="multicol-email">ایمیل</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text" id="multicol-email2" dir="ltr">@example.com</span>
                <input type="text" id="multicol-email" class="form-control text-start" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2" dir="ltr">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label class="form-label" for="multicol-password">رمز عبور</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="multicol-password" class="form-control text-start" placeholder="············" dir="ltr" aria-describedby="multicol-password2">
                  <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label class="form-label" for="multicol-confirm-password">تایید رمز عبور</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="multicol-confirm-password" class="form-control text-start" placeholder="············" dir="ltr" aria-describedby="multicol-confirm-password2">
                  <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i class="bx bx-hide"></i></span>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4 mx-n4">
          <h6 class="fw-normal">2. اطلاعات شخصی</h6>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="multicol-first-name">نام</label>
              <input type="text" id="multicol-first-name" class="form-control" placeholder="جان">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="multicol-last-name">نام خانوادگی</label>
              <input type="text" id="multicol-last-name" class="form-control" placeholder="اسنو">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="multicol-country">کشور</label>
              <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
                <option value="">انتخاب</option>
                <option value="Australia">استرالیا</option>
                <option value="Bangladesh">بنگلادش</option>
                <option value="Belarus">بلاروس</option>
                <option value="Brazil">برزیل</option>
                <option value="Canada">کانادا</option>
                <option value="China">چین</option>
                <option value="France">فرانسه</option>
                <option value="Germany">آلمان</option>
                <option value="India">هندوستان</option>
                <option value="Indonesia">اندونزی</option>
                <option value="Israel">اسرائیل</option>
                <option value="Italy">ایتالیا</option>
                <option value="Japan">ژاپن</option>
                <option value="Korea">کره جنوبی</option>
                <option value="Mexico">مکزیک</option>
                <option value="Philippines">فیلیپین</option>
                <option value="Russia">روسیه</option>
                <option value="South Africa">آفریقای جنوبی</option>
                <option value="Thailand">تایلند</option>
                <option value="Turkey">ترکیه</option>
                <option value="Ukraine">اوکراین</option>
                <option value="United Arab Emirates">امارات</option>
                <option value="United Kingdom">انگلستان</option>
                <option value="United States">ایالات متحده</option>
              </select>
            </div>
            <div class="col-md-6 select2-primary">
              <label class="form-label" for="multicol-language">زبان</label>
              <select id="multicol-language" class="select2 form-select" multiple>
                <option value="en" selected>انگلیسی</option>
                <option value="fr" selected>فرانسوی</option>
                <option value="de">آلمانی</option>
                <option value="pt">پرتغالی</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="multicol-birthdate">تاریخ تولد</label>
              <input type="text" id="multicol-birthdate" class="form-control dob-picker" placeholder="YYYY/MM/DD">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="multicol-phone">شماره تلفن</label>
              <input type="text" id="multicol-phone" class="form-control phone-mask text-start" placeholder="658 799 8941" dir="ltr" aria-label="658 799 8941">
            </div>
          </div>
          <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
            <button type="reset" class="btn btn-label-secondary">انصراف</button>
          </div>
        </form>
      </div>

      <!-- Collapsible Section -->
      <div class="row my-4">
        <div class="col">
          <h6 class="secondary-font mt-4">بخش قابل جمع شدن</h6>
          <div class="accordion" id="collapsibleSection">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingDeliveryAddress">
                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryAddress" aria-expanded="true" aria-controls="collapseDeliveryAddress">
                  آدرس تحویل
                </button>
              </h2>
              <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                <div class="accordion-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label" for="collapsible-fullname">نام کامل</label>
                      <input type="text" id="collapsible-fullname" class="form-control" placeholder="جان اسنو">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="collapsible-phone">شماره تلفن</label>
                      <input type="text" id="collapsible-phone" class="form-control phone-mask text-start" placeholder="658 799 8941" dir="ltr" aria-label="658 799 8941">
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="collapsible-address">آدرس</label>
                      <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2" placeholder="بلوار نیایش"></textarea>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="collapsible-pincode">پین‌کد</label>
                      <input type="text" id="collapsible-pincode" class="form-control text-start" placeholder="658468" dir="ltr">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="collapsible-landmark">نشان اختصاصی</label>
                      <input type="text" id="collapsible-landmark" class="form-control" placeholder="ساختمان بنفشه">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="collapsible-city">شهر</label>
                      <input type="text" id="collapsible-city" class="form-control" placeholder="تبریز">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="collapsible-state">استان</label>
                      <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                        <option value="">انتخاب</option>
                        <option value="AL">آذربایجان شرقی</option>
                        <option value="AK">آذربایجان غربی</option>
                        <option value="AZ">اردبیل</option>
                        <option value="AR">اصفهان </option>
                        <option value="CA">البرز </option>
                        <option value="CO">ایلام </option>
                        <option value="CT">بوشهر </option>
                        <option value="DE">تهران </option>
                        <option value="DC">چهارمحال و بختیاری</option>
                        <option value="FL">خراسان جنوبی</option>
                        <option value="GA">خراسان رضوی</option>
                        <option value="HI">خراسان شمالی</option>
                        <option value="ID">خوزستان </option>
                        <option value="IL">زنجان </option>
                        <option value="IN">سمنان </option>
                        <option value="IA">سیستان و بلوچستان</option>
                        <option value="KS">فارس </option>
                        <option value="KY">قزوین </option>
                        <option value="LA">قم </option>
                        <option value="ME">کردستان </option>
                        <option value="MD">کرمان </option>
                        <option value="MA">کرمانشاه </option>
                        <option value="MI">کهگیلویه و بویراحمد</option>
                        <option value="MN">گلستان </option>
                        <option value="MS">گیلان </option>
                        <option value="MO">لرستان</option>
                        <option value="MT">مازندران </option>
                        <option value="NE">مرکزی </option>
                        <option value="NV">هرمزگان </option>
                        <option value="NH">همدان </option>
                        <option value="NJ">یزد</option>
                        <option value="NM">کرج</option>
                        <option value="NY">تبریز</option>
                        <option value="NC">لورم ایپسوم متن</option>
                        <option value="ND">قم</option>
                        <option value="OH">لورم</option>
                        <option value="OK">لورم ایپسوم</option>
                        <option value="OR">اصفهان</option>
                        <option value="PA">لورم ایپسوم متن</option>
                        <option value="RI">لورم ایپسوم متن</option>
                        <option value="SC">لورم ایپسوم متن</option>
                        <option value="SD">لورم ایپسوم متن</option>
                        <option value="TN">لورم ایپسوم</option>
                        <option value="TX">تبریز</option>
                        <option value="UT">بندرعباس</option>
                        <option value="VT">لورم ایپسوم</option>
                        <option value="VA">لورم ایپسوم</option>
                        <option value="WA">رشت</option>
                        <option value="WV">لورم ایپسوم متن</option>
                        <option value="WI">لورم ایپسوم</option>
                        <option value="WY">کرمان</option>
                      </select>
                    </div>

                    <label class="form-check-label">نوع آدرس</label>
                    <div class="col mt-2">
                      <div class="form-check form-check-inline">
                        <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked>
                        <label class="form-check-label" for="collapsible-address-type-home">منزل (تحویل کل روز)</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office">
                        <label class="form-check-label" for="collapsible-address-type-office">
                          دفتر (تحویل بین 10 صبح - 5 عصر)
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingDeliveryOptions">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryOptions" aria-expanded="false" aria-controls="collapseDeliveryOptions">
                  گزینه‌های تحویل
                </button>
              </h2>
              <div id="collapseDeliveryOptions" class="accordion-collapse collapse" aria-labelledby="headingDeliveryOptions" data-bs-parent="#collapsibleSection">
                <div class="accordion-body">
                  <div class="row">
                    <div class="col-md mb-md-0 mb-2">
                      <div class="form-check custom-option custom-option-basic">
                        <label class="form-check-label custom-option-content" for="radioStandard">
                          <input name="CustomRadioDelivery" class="form-check-input" type="radio" value="" id="radioStandard" checked>
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
                          <input name="CustomRadioDelivery" class="form-check-input" type="radio" value="" id="radioExpress">
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
                        <label class="form-check-label custom-option-content" for="radioOvernight">
                          <input name="CustomRadioDelivery" class="form-check-input" type="radio" value="" id="radioOvernight">
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
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePaymentMethod" aria-expanded="false" aria-controls="collapsePaymentMethod">
                  نحوه پرداخت
                </button>
              </h2>
              <div id="collapsePaymentMethod" class="accordion-collapse collapse" aria-labelledby="headingPaymentMethod" data-bs-parent="#collapsibleSection">
                <form>
                  <div class="accordion-body">
                    <div class="mb-3">
                      <div class="form-check form-check-inline">
                        <input name="collapsible-payment" class="form-check-input form-check-input-payment" type="radio" value="credit-card" id="collapsible-payment-cc" checked>
                        <label class="form-check-label" for="collapsible-payment-cc">
                          کارت اعتباری/Debit/ATM <i class="bx bx-credit-card-alt"></i>
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input name="collapsible-payment" class="form-check-input form-check-input-payment" type="radio" value="cash" id="collapsible-payment-cash">
                        <label class="form-check-label" for="collapsible-payment-cash">
                          پرداخت در محل
                          <i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="می‌توانید در هنگام تحویل محصول پرداخت کنید."></i>
                        </label>
                      </div>
                    </div>
                    <div id="form-credit-card" class="row">
                      <div class="col-12 col-md-8 col-xl-6">
                        <div class="mb-3">
                          <label class="form-label w-100" for="creditCardMask">شماره کارت</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="creditCardMask" name="creditCardMask" class="form-control credit-card-mask text-start" placeholder="1356 3215 6548 7898" aria-describedby="creditCardMask2" dir="ltr">
                            <span class="input-group-text cursor-pointer p-1" id="creditCardMask2"><span class="card-type"></span></span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="collapsible-payment-name">نام</label>
                              <input type="text" id="collapsible-payment-name" class="form-control" placeholder="جان اسنو">
                            </div>
                          </div>
                          <div class="col-6 col-md-3">
                            <div class="mb-3">
                              <label class="form-label" for="collapsible-payment-expiry-date">تاریخ انقضا</label>
                              <input type="text" id="collapsible-payment-expiry-date" class="form-control expiry-date-mask text-start" placeholder="YY/MM" dir="ltr">
                            </div>
                          </div>
                          <div class="col-6 col-md-3">
                            <div class="mb-3">
                              <label class="form-label" for="collapsible-payment-cvv">کد CVV</label>
                              <div class="input-group input-group-merge">
                                <input type="text" id="collapsible-payment-cvv" class="form-control cvv-code-mask text-start" maxlength="4" placeholder="654" dir="ltr">
                                <span class="input-group-text cursor-pointer" id="collapsible-payment-cvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="شماره CVV کارت"></i></span>
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
@endsection

