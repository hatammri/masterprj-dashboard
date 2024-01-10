@extends('index')
@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">پرسنل( اپراتور )/</span> لیست پرسنل
      </h4>

      <!-- Navbar pills -->
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-sm-row mb-4">

            <li class="nav-item">
              <a class="nav-link" href="{{ route('personnels.list_centers') }}"><i class="bx bx-group me-1"></i> مراکز فعالیت</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active my-1 my-md-0" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i> لیست پرسنل</a>
            </li>
          </ul>
        </div>
      </div>
      <!--/ Navbar pills -->

      <!-- Connection Cards -->
      <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری اتصال</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">مسدود کردن اتصال</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف</a></li>
                </ul>
              </div>
              <div class="mx-auto mb-3">
                <img src="../../assets/img/avatars/19.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h5 class="mb-1 card-title primary-font">تونی استارک</h5>
              <span class="lh-1-85">طراح UI</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-secondary">فیگما</span></a>
                <a href="javascript:;"><span class="badge bg-label-warning">Sketch</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-4 py-2">
                <div>
                  <h4 class="mb-1">18</h4>
                  <span>پروژه‌ها</span>
                </div>
                <div>
                  <h4 class="mb-1">834</h4>
                  <span>وظایف</span>
                </div>
                <div>
                  <h4 class="mb-1">129</h4>
                  <span>اتصالات</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>متصل</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری اتصال</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">مسدود کردن اتصال</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف</a></li>
                </ul>
              </div>
              <div class="mx-auto mb-3">
                <img src="../../assets/img/avatars/2.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h5 class="mb-1 card-title primary-font">استیو راجرز</h5>
              <span class="lh-1-85">توسعه دهنده</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">انگولار</span></a>
                <a href="javascript:;"><span class="badge bg-label-info">React</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-4 py-2">
                <div>
                  <h4 class="mb-1">112</h4>
                  <span>پروژه‌ها</span>
                </div>
                <div>
                  <h4 class="mb-1">23.1k</h4>
                  <span>وظایف</span>
                </div>
                <div>
                  <h4 class="mb-1">1.28k</h4>
                  <span>اتصالات</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>اتصال</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری اتصال</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">مسدود کردن اتصال</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف</a></li>
                </ul>
              </div>
              <div class="mx-auto mb-3">
                <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h5 class="mb-1 card-title primary-font">کریس رونالدو</h5>
              <span class="lh-1-85">توسعه دهنده</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-info">React</span></a>
                <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-4 py-2">
                <div>
                  <h4 class="mb-1">32</h4>
                  <span>پروژه‌ها</span>
                </div>
                <div>
                  <h4 class="mb-1">1.25k</h4>
                  <span>وظایف</span>
                </div>
                <div>
                  <h4 class="mb-1">890</h4>
                  <span>اتصالات</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>اتصال</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری اتصال</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">مسدود کردن اتصال</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف</a></li>
                </ul>
              </div>
              <div class="mx-auto mb-3">
                <img src="../../assets/img/avatars/4.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h5 class="mb-1 card-title primary-font">استیو راجرز</h5>
              <span class="lh-1-85">طراح رابط کاربری</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-secondary">فیگما</span></a>
                <a href="javascript:;" class="me-1"><span class="badge bg-label-warning">Sketch</span></a>
                <a href="javascript:;"><span class="badge bg-label-primary">فتوشاپ</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-4 py-2">
                <div>
                  <h4 class="mb-1">86</h4>
                  <span>پروژه‌ها</span>
                </div>
                <div>
                  <h4 class="mb-1">12.4k</h4>
                  <span>وظایف</span>
                </div>
                <div>
                  <h4 class="mb-1">890</h4>
                  <span>اتصالات</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>اتصال</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری اتصال</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">مسدود کردن اتصال</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف</a></li>
                </ul>
              </div>
              <div class="mx-auto mb-3">
                <img src="../../assets/img/avatars/5.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h5 class="mb-1 card-title primary-font">بیل گیتس</h5>
              <span class="lh-1-85">توسعه دهنده تمام وقت</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-info">React</span></a>
                <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">انگولار</span></a>
                <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-4 py-2">
                <div>
                  <h4 class="mb-1">244</h4>
                  <span>پروژه‌ها</span>
                </div>
                <div>
                  <h4 class="mb-1">23.8k</h4>
                  <span>وظایف</span>
                </div>
                <div>
                  <h4 class="mb-1">2.14k</h4>
                  <span>اتصالات</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>متصل</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body text-center">
              <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری اتصال</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">مسدود کردن اتصال</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="javascript:void(0);">حذف</a></li>
                </ul>
              </div>
              <div class="mx-auto mb-3">
                <img src="../../assets/img/avatars/6.png" alt="Avatar Image" class="rounded-circle w-px-100">
              </div>
              <h5 class="mb-1 card-title primary-font">استیو جابز</h5>
              <span class="lh-1-85">سئو</span>
              <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                <a href="javascript:;" class="me-1"><span class="badge bg-label-success">نویسندگی</span></a>
                <a href="javascript:;"><span class="badge bg-label-secondary">تجریه و تحلیل</span></a>
              </div>

              <div class="d-flex align-items-center justify-content-around my-4 py-2">
                <div>
                  <h4 class="mb-1">32</h4>
                  <span>پروژه‌ها</span>
                </div>
                <div>
                  <h4 class="mb-1">1.28k</h4>
                  <span>وظایف</span>
                </div>
                <div>
                  <h4 class="mb-1">1.27k</h4>
                  <span>اتصالات</span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>اتصال</a>
                <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Connection Cards -->
    </div>
    <!-- / Content -->

    <!-- Footer -->

    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
@endsection



