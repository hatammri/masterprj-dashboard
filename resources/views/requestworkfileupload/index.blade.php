@extends('index')
@section('csslink')
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico">

    <!-- Icons -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../../assets/css/demo.css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/rtl.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css">

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
                <span class="text-muted fw-light">جدول /</span> مدارک بارگذاری شده درخواست کار
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header heading-color">جدول مدارک شماره درخواست‌‌‌کار {{ $requestwork->request_number }}</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            @if ( sizeof($reqworkFiles))
                                <tr>
                                    <th>نوع فایل</th>
                                    <th>نام فایل</th>
                                    <th>عمل‌ها</th>
                                </tr>
                                @endif

                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ( sizeof($reqworkFiles))

                            @foreach ($reqworkFiles as $items)
                                @if ($items->typefile == 'pdf')
                                    <tr>
                                        <td>
                                            <i class='align-middle fab bx bxs-file-pdf fa-lg text-danger me-3'
                                                style='color:#ff0202'></i>
                                            <strong>فایل pdf</strong>
                                        </td>
                                        <td>{{ $items->file }}</td>

                                        <td>
                                            {{-- <div class="d-inline-block"><a href="javascript:;"
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded"></i></a>
                                {{-- <div class="dropdown-menu dropdown-menu-end m-0"><a
                                        href="/requestwork/edit/{{ $items->id }}" class="dropdown-item">ویرایش اطلاعات
                                        درخواست‌کار</a>
                                        <a
                                        href="/requestworkfileupload/uploadfiles/{{ $items->id }}" class="dropdown-item">بارگذاری مدارک درخواست‌کار
                                        </a>
                                        <a
                                        href="/requestworkfileupload/index/{{ $items->id }}" class="dropdown-item">لیست مدارک درخواست‌کار

                                    </a>

                                    </div> --}}
                                            {{-- </div>  --}}
                                            <a href="/requestwork/edit/{{ $requestwork->id }}"
                                                class="btn btn-sm btn-icon item-edit">
                                                <i class='bx bx-show'></i></a>
                                            <a href="/requestworkfileupload/downloadFile/{{ $items->id }}"
                                                class="btn btn-sm btn-icon item-edit">
                                                <i class='bx bx-download'></i>
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#modalCenter-{{ $items->id }}"
                                                class="btn btn-sm btn-icon item-edit"><i class="bx bxs-trash"
                                                    style="color:red"></i></a>
                                        </td>
                                    </tr>
                                @endif
                                @if ($items->typefile == 'img')
                                    <tr>
                                        <td>
                                            <i class='align-middle fa bx bxs-image fa-lg' style='color:#272585' me-3></i>

                                            <strong>فایل تصویر</strong>
                                        </td>
                                        <td>{{ $items->file }}</td>

                                        <td>
                                            {{-- <div class="d-inline-block"><a href="javascript:;"
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded"></i></a>
                                {{-- <div class="dropdown-menu dropdown-menu-end m-0"><a
                                        href="/requestwork/edit/{{ $items->id }}" class="dropdown-item">ویرایش اطلاعات
                                        درخواست‌کار</a>
                                        <a
                                        href="/requestworkfileupload/uploadfiles/{{ $items->id }}" class="dropdown-item">بارگذاری مدارک درخواست‌کار
                                        </a>
                                        <a
                                        href="/requestworkfileupload/index/{{ $items->id }}" class="dropdown-item">لیست مدارک درخواست‌کار

                                    </a>

                                    </div> --}}
                                            {{-- </div>  --}}
                                            <a href="/requestwork/edit/{{ $requestwork->id }}"
                                                class="btn btn-sm btn-icon item-edit">
                                                <i class='bx bx-show'></i></a>
                                            <a href="/requestworkfileupload/downloadFile/{{ $items->id }}"
                                                class="btn btn-sm btn-icon item-edit">
                                                <i class='bx bx-download'></i>
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#modalCenter-{{ $items->id }}"
                                                class="btn btn-sm btn-icon item-edit"><i class="bx bxs-trash"
                                                    style="color:red"></i></a>
                                        </td>
                                    </tr>
                                @endif
                                @if ($items->typefile == 'else')
                                    <tr>
                                        <td>
                                            <i class='align-middle fa bx bxs-file fa-lg' style='color:#080808' me-3></i>
                                            <strong>سایر</strong>
                                        </td>
                                        <td>{{ $items->file }}</td>

                                        <td>
                                            {{-- <div class="d-inline-block"><a href="javascript:;"
                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i
                                        class="bx bx-dots-vertical-rounded"></i></a>
                                {{-- <div class="dropdown-menu dropdown-menu-end m-0"><a
                                        href="/requestwork/edit/{{ $items->id }}" class="dropdown-item">ویرایش اطلاعات
                                        درخواست‌کار</a>
                                        <a
                                        href="/requestworkfileupload/uploadfiles/{{ $items->id }}" class="dropdown-item">بارگذاری مدارک درخواست‌کار
                                        </a>
                                        <a
                                        href="/requestworkfileupload/index/{{ $items->id }}" class="dropdown-item">لیست مدارک درخواست‌کار

                                    </a>

                                    </div> --}}
                                            {{-- </div>  --}}
                                            <a href="/requestwork/edit/{{ $requestwork->id }}"
                                                class="btn btn-sm btn-icon item-edit">
                                                <i class='bx bx-show'></i></a>
                                            <a href="/requestwork/edit/{{ $requestwork->id }}"
                                                class="btn btn-sm btn-icon item-edit">
                                                <i class='bx bx-download'></i>
                                            </a>

                                            <a data-bs-toggle="modal" data-bs-target="#modalCenter-{{ $items->id }}"
                                                class="btn btn-sm btn-icon item-edit"><i class="bx bxs-trash"
                                                    style="color:red"></i></a>

                                        </td>
                                    </tr>
                                @endif
                                <!-- Vertically Centered Modal -->

                                <div class="modal fade" id="modalCenter-{{ $items->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title secondary-font text-danger" id="modalCenterTitle">حذف
                                                    pm شناسه {{ $items->id }} </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <h5 class="modal-title secondary-font " id="modalCenterTitle">آیا
                                                            برای حذف این {{ $items->id }} pm اطمینان
                                                            دارید؟</h5>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-label-secondary"
                                                    data-bs-dismiss="modal">
                                                    خیر
                                                </button>
                                                <a href="/requestworkfileupload/destroy/{{ $items->id }}"
                                                    target="_parent"><button type="button"
                                                        class="btn btn-danger">بله</button></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <td valign="top" colspan="7" class="dataTables_empty">فایلی بارگذاری نشده</td>
                            @endif

                        </tbody>

                </div>
                </table>
                <div class="card-body">
                    <button type="reset" class="btn btn-label-secondary">بازگشت</button>
                </div>

            </div>

        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
@section('scripts')
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
@endsection
