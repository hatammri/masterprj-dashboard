@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">

@endsection
@section('content')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-2">لیست مجوزها</h4>

              <p class="mb-4">
                هر دسته (مدیریت  کاربران ) شامل چهار نقش از پیش تعریف شده زیر می‌باشد.
              </p>

              <!-- Permission Table -->
              <div class="card">
                <div class="card-datatable table-responsive">
                  <table class="datatables-permissions table border-top">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>نام</th>
                        <th>اختصاص یافته به</th>
                        <th>تاریخ ایجاد</th>
                        <th>عمل‌ها</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!--/ Permission Table -->

              <!-- Modal -->
              <!-- Add Permission Modal -->
              <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                      <div class="text-center mb-4 mt-0 mt-md-n2">
                        <h3 class="secondary-font">افزودن مجوز جدید</h3>
                        <p>مجوزهایی که می‌توانید استفاده و به کاربران خود اختصاص دهید.</p>
                      </div>
                      <form id="addPermissionForm" class="row" onsubmit="return false">
                        <div class="col-12 mb-3">
                          <label class="form-label" for="modalPermissionName">نام مجوز</label>
                          <input type="text" id="modalPermissionName" name="modalPermissionName" class="form-control" placeholder="نام مجوز" autofocus>
                        </div>
                        <div class="col-12 mb-2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="corePermission">
                            <label class="form-check-label" for="corePermission"> تنظیم به عنوان مجوز اصلی </label>
                          </div>
                        </div>
                        <div class="col-12 text-center demo-vertical-spacing">
                          <button type="submit" class="btn btn-primary me-sm-3 me-1">ایجاد مجوز</button>
                          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                            انصراف
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Add Permission Modal -->

              <!-- Edit Permission Modal -->
              <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                      <div class="text-center mb-4 mt-0 mt-md-n2">
                        <h3 class="secondary-font">ویرایش مجوز</h3>
                        <p>مجوز را بر اساس نیاز خود ویرایش کنید.</p>
                      </div>
                      <div class="alert alert-warning" role="alert">
                        <h6 class="alert-heading mb-2">هشدار</h6>
                        <p class="mb-0">
                          با ویرایش نام مجوز، امکان به هم خوردن عملکرد مجوزهای سیستم وجود دارد. لطفا قبل از اقدام از عمل خود مطمئن باشید.
                        </p>
                      </div>
                      <form id="editPermissionForm" class="row" onsubmit="return false">
                        <div class="col-sm-8">
                          <label class="form-label" for="editPermissionName">نام مجوز</label>
                          <input type="text" id="editPermissionName" name="editPermissionName" class="form-control" placeholder="نام مجوز" tabindex="-1">
                        </div>
                        <div class="col-sm-4 mt-3 mt-sm-0">
                          <label class="form-label invisible d-none d-sm-inline-block">دکمه</label>
                          <button type="submit" class="btn btn-primary w-100">به‌روزرسانی</button>
                        </div>
                        <div class="col-12 mt-3">
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" id="editCorePermission">
                            <label class="form-check-label" for="editCorePermission"> تنظیم به عنوان مجوز اصلی </label>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Edit Permission Modal -->

              <!-- /Modal -->
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
 <script src="../../assets/js/app-access-permission.js"></script>
 <script src="../../assets/js/modal-add-permission.js"></script>
 <script src="../../assets/js/modal-edit-permission.js"></script>
@endsection
