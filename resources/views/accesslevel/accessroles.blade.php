@extends('index')
@section('csslink')
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">

@endsection
@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-2">لیست نقش‌ها</h4>

      <p>
        یک نقش، دسترسی به منوها و امکانات از پیش تعریف شده را فراهم می کند که <br>
        بر اساس نقش اختصاص یافته، مدیر می تواند دسترسی های مورد نیاز کاربر را ایجاد کند.
      </p>
      <!-- Role cards -->
      <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-1">
                <h6 class="fw-normal">4 کاربر در مجموع</h6>
                <ul class="list-unstyled d-flex avatar-group mb-0">
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
                    <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جان اسنو" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="آواتار">
                  </li>
                </ul>
              </div>
              <div class="d-flex justify-content-between align-items-end">
                <div class="role-heading">
                  <h4 class="mb-1">مدیر</h4>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>ویرایش نقش</small></a>
                </div>
                <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-1">
                <h6 class="fw-normal">7 کاربر در مجموع</h6>
                <ul class="list-unstyled d-flex avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="لیونل مسی" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/4.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جان اسنو" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="اولیور کویین" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/2.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="دیوید بکهام" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="آواتار">
                  </li>
                </ul>
              </div>
              <div class="d-flex justify-content-between align-items-end">
                <div class="role-heading">
                  <h4 class="mb-1">مدیر</h4>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>ویرایش نقش</small></a>
                </div>
                <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-1">
                <h6 class="fw-normal">5 کاربر در مجموع</h6>
                <ul class="list-unstyled d-flex avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="پیتر پارکر" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="امیلیا کلارک" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جسیکا آلبا" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بروس وین" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/13.png" alt="آواتار">
                  </li>
                </ul>
              </div>
              <div class="d-flex justify-content-between align-items-end">
                <div class="role-heading">
                  <h4 class="mb-1">کاربران</h4>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>ویرایش نقش</small></a>
                </div>
                <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-1">
                <h6 class="fw-normal">3 کاربر در مجموع</h6>
                <ul class="list-unstyled d-flex avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/3.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="کارول دنورز" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="روبرتو کارلوس" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="پیتر پارکر" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/11.png" alt="آواتار">
                  </li>
                </ul>
              </div>
              <div class="d-flex justify-content-between align-items-end">
                <div class="role-heading">
                  <h4 class="mb-1">پشتیبانی</h4>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>ویرایش نقش</small></a>
                </div>
                <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mb-1">
                <h6 class="fw-normal">2 کاربر در مجموع</h6>
                <ul class="list-unstyled d-flex avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جسیکا آلبا" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بروس وین" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/13.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تامی مرلین" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/15.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/8.png" alt="آواتار">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="امیلیا کلارک" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="آواتار">
                  </li>
                </ul>
              </div>
              <div class="d-flex justify-content-between align-items-end">
                <div class="role-heading">
                  <h4 class="mb-1">کاربر محدود</h4>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>ویرایش نقش</small></a>
                </div>
                <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="card h-100">
            <div class="row h-100">

              <div class="col-sm-12">
                <p >اگر نقشی وجود ندارد اضافه کنید</p>

                <div class="card-body text-sm-end text-center ps-sm-0">

                    <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-3 text-nowrap add-new-role">
                    افزودن نقش جدید
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <!-- Role Table -->
          <div class="card">
            <div class="card-datatable table-responsive">
              <table class="datatables-users table border-top">
                <thead>
                  <tr>
                    <th></th>
                    <th>کاربر/ اپراتور</th>
                    <th>نقش</th>
                    <th>طرح</th>
                    <th>صورتحساب</th>
                    <th>وضعیت</th>
                    <th>عمل‌ها</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <!--/ Role Table -->
        </div>
      </div>
      <!--/ Role cards -->

      <!-- Add Role Modal -->
      <!-- Add Role Modal -->
      <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
          <div class="modal-content p-3 p-md-5">
            <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
              <div class="text-center mb-4 mt-0 mt-md-n2">
                <h3 class="role-title secondary-font">افزودن نقش جدید</h3>
                <p>مجوزهای نقش را تنظیم کنید</p>
              </div>
              <!-- Add role form -->
              <form id="addRoleForm" class="row g-3" onsubmit="return false">
                <div class="col-12 mb-4">
                  <label class="form-label" for="modalRoleName">نام نقش</label>
                  <input type="text" id="modalRoleName" name="modalRoleName" class="form-control" placeholder="نام نقش را وارد کنید" tabindex="-1">
                </div>
                <div class="col-12">
                  <h5>مجوزهای نقش</h5>
                  <!-- Permission table -->
                  <div class="table-responsive">
                    <table class="table table-flush-spacing">
                      <tbody>
                        <tr>
                          <td class="text-nowrap">
                            دسترسی مدیریت
                            <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system"></i>
                          </td>
                          <td>
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="selectAll">
                              <label class="form-check-label" for="selectAll"> انتخاب همه </label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">مدیریت کاربر</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="userManagementRead">
                                <label class="form-check-label" for="userManagementRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                <label class="form-check-label" for="userManagementWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                <label class="form-check-label" for="userManagementCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">مدیریت محتوا</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="contentManagementRead">
                                <label class="form-check-label" for="contentManagementRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="contentManagementWrite">
                                <label class="form-check-label" for="contentManagementWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="contentManagementCreate">
                                <label class="form-check-label" for="contentManagementCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">مدیریت اختلافات</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="dispManagementRead">
                                <label class="form-check-label" for="dispManagementRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="dispManagementWrite">
                                <label class="form-check-label" for="dispManagementWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="dispManagementCreate">
                                <label class="form-check-label" for="dispManagementCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">مدیریت پایگاه داده</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="dbManagementRead">
                                <label class="form-check-label" for="dbManagementRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="dbManagementWrite">
                                <label class="form-check-label" for="dbManagementWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="dbManagementCreate">
                                <label class="form-check-label" for="dbManagementCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">مدیریت مالی</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="finManagementRead">
                                <label class="form-check-label" for="finManagementRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="finManagementWrite">
                                <label class="form-check-label" for="finManagementWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="finManagementCreate">
                                <label class="form-check-label" for="finManagementCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">گزارش نویسی</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="reportingRead">
                                <label class="form-check-label" for="reportingRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="reportingWrite">
                                <label class="form-check-label" for="reportingWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="reportingCreate">
                                <label class="form-check-label" for="reportingCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">کنترل API</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="apiRead">
                                <label class="form-check-label" for="apiRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="apiWrite">
                                <label class="form-check-label" for="apiWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="apiCreate">
                                <label class="form-check-label" for="apiCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">مدیریت مخزن</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="repoRead">
                                <label class="form-check-label" for="repoRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="repoWrite">
                                <label class="form-check-label" for="repoWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="repoCreate">
                                <label class="form-check-label" for="repoCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap">حقوق و دستمزد</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="payrollRead">
                                <label class="form-check-label" for="payrollRead"> خواندن </label>
                              </div>
                              <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="payrollWrite">
                                <label class="form-check-label" for="payrollWrite"> نوشتن </label>
                              </div>
                              <div class="form-check mb-0 mt-0">
                                <input class="form-check-input" type="checkbox" id="payrollCreate">
                                <label class="form-check-label" for="payrollCreate"> ایجاد </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- Permission table -->
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                  <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                    انصراف
                  </button>
                </div>
              </form>
              <!--/ Add role form -->
            </div>
          </div>
        </div>
      </div>
      <!--/ Add Role Modal -->

      <!-- / Add Role Modal -->
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
@endsection
@section('scripts')
    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/i18n/fa.js"></script>

    <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <!-- Page JS -->
  <script src="../../assets/js/app-access-roles-stations.js"></script>
  <script src="../../assets/js/modal-add-role.js"></script>
@endsection
