@extends('index')
{{-- @section('csslink')
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

<!-- Page CSS -->
<link rel="stylesheet" href="../../assets/vendor/css/pages/page-profile.css">
<!-- Helpers -->
<script src="../../assets/vendor/js/helpers.js"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="../../assets/vendor/js/template-customizer.js"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="../../assets/js/config.js"></script>
@endsection --}}
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">پرسنل( اپراتور )/</span> مراکز فعالیت
      </h4>


      <!-- Navbar pills -->
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-sm-row mb-4">
            <li class="nav-item">
              <a class="nav-link active my-1 my-md-0" href="javascript:void(0);"><i class="bx bx-group me-1"></i>مراکز فعالیت</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('personnels.list_personnels') }}"><i class="bx bx-link-alt me-1"></i> لیست پرسنل</a>
            </li>
          </ul>
        </div>
      </div>
      <!--/ Navbar pills -->

      <!-- Teams Cards -->
      <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/react-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">توسعه دهندگان React</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+254</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">React</span></a>
                  <a href="javascript:;"><span class="badge bg-label-warning">Vue.JS</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/vue-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">تیم توسعه Vue.js</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جان اسنو" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="کریس رونالدو" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/16.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو جابز" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/17.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+153</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;"><span class="badge bg-label-danger">توسعه دهنده</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/xd-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">طراحان خلاق</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="لیونل مسی" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/4.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="اولیور کویین" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/2.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="دیوید بکهام" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/8.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+55</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;" class="me-1"><span class="badge bg-label-warning">Sketch</span></a>
                  <a href="javascript:;"><span class="badge bg-label-danger">XD</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/support-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">تیم پشتیبانی</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="پیتر پارکر" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="امیلیا کلارک" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بروس وین" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+350</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;"><span class="badge bg-label-info">Zendesk</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/social-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">بازاریابی دیجیتال</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جسیکا آلبا" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بروس وین" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/13.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تامی مرلین" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+195</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">توییتر</span></a>
                  <a href="javascript:;"><span class="badge bg-label-success">ایمیل</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/event-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">رویداد</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/17.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/8.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="دیوید بکهام" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="آواتار">
                    </li>
                    <li><small class="text-muted ms-1">+550</small></li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;"><span class="badge bg-label-success">Hubilo</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/figma-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">منابع فیگما</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جیم کری" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جسیکا آلبا" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="روبرتو کارلوس" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/16.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="پیتر پارکر" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+45</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;" class="me-1"><span class="badge bg-label-success">لورم ایپسوم</span></a>
                  <a href="javascript:;"><span class="badge bg-label-secondary">فیگما</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <a href="javascript:;" class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="../../assets/img/icons/brands/html-label.png" alt="آواتار" class="rounded-circle">
                  </div>
                  <div class="me-2 text-body h5 mb-0">مبتدیان</div>
                </a>
                <div class="ms-auto">
                  <ul class="list-inline mb-0 d-flex align-items-center">
                    <li class="list-inline-item me-1">
                      <a href="javascript:void(0);" class="d-flex align-self-center text-body"><i class="bx bx-star"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">تغییر نام تیم</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">مشاهده جزئیات</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">افزودن به علاقه‌مندی‌ها</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">حذف تیم</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
              </p>
              <div class="d-flex align-items-center flex-wrap gap-1">
                <div class="d-flex align-items-center">
                  <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/3.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="کارول دنورز" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="روبرتو کارلوس" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="امیلیا کلارک" class="avatar avatar-sm pull-up">
                      <img class="rounded-circle" src="../../assets/img/avatars/20.png" alt="آواتار">
                    </li>
                    <li>
                      <small class="text-muted ms-1">+550</small>
                    </li>
                  </ul>
                </div>
                <div class="ms-auto">
                  <a href="javascript:;" class="me-1"><span class="badge bg-label-info">css</span></a>
                  <a href="javascript:;"><span class="badge bg-label-warning">HTML</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Teams Cards -->
    </div>
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
  </div>
@endsection

{{-- @section('scripts')
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

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
  @endsection --}}
