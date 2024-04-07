@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">جدول‌داده /</span> لیست اپراتور ها
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header heading-color">جدول اپراتور ها</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>تصویر اپراتور</th>
                                <th>نام اپراتور</th>
                                <th>سمت</th>
                                <th>تخصص‌های‌ اپراتور</th>
                                <th>وضعیت</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($Operators as $itemOperators)
                                <tr>
                                    <td>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="{{ $itemOperators->name }}">
                                            <img src="../../assets/img/avatars/{{ $itemOperators->image }}" alt="آواتار"
                                                class="rounded-circle">
                                        </li>
                                    </td>

                                    <td>{{ $itemOperators->name }}</td>
                                    <td>{{ $itemOperators->Sematdata->name }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                            @foreach ($itemOperators->specialties as $itemspecialties)
                                                @switch($loop->index)
                                                    @case(0)
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-success me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                    @break

                                                    @case(1)
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-primary me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                    @break

                                                    @case(2)
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-secondary me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                    @break

                                                    @case(3)
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-danger me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                    @break

                                                    @case(4)
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-warning me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                    @break

                                                    @case(5)
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-dark me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                    @break

                                                    @default
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $itemspecialties->name }}">
                                                            <span
                                                                class="badge bg-label-success me-1">{{ $itemspecialties->name }}</span>
                                                        </li>
                                                @endswitch
                                            @endforeach

                                        </ul>
                                    </td>
                                    @switch($itemOperators->available)
                                    @case(0)
                                    <td><span class="badge bg-label-danger me-1">غیر فعال</span></td>
                                    @break
                                    @case(1)
                                    <td><span class="badge bg-label-success me-1">فعال</span></td>
                                    @break
                                    @default
                                    <td><span class="badge bg-label-warning me-1">نامشخص</span></td>

                                    @endswitch

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/operator/edit/{{$itemOperators->id}}"><i
                                                        class="bx bx-edit-alt me-2"></i> ویرایش</a>
                                                {{-- <a class="dropdown-item" href="/operator/edit/{{$itemOperators->id}}"><i
                                                        class="bx bx-trash me-2"></i> حذف</a> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
@section('scripts')
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/i18n/fa.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/jdate/jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr-jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/l10n/fa-jdate.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-operator.js"></script>
@endsection
