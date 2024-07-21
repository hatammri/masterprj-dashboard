<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img width="35px" height="35px" viewbox="0 0 30 30" version="1.1"
                    src="{{ asset('/assets/img/logo/sapa.png') }}">

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2"> گروه
                .رادیس </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Layouts -->
        <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>داشبورد</div>
            </a>
        </li>
        <!-- Apps & Pages -->

        {{-- Requestwork --}}
        {{-- <li
        class="menu-item">
        <a href="{{ route('customerprofile.indexprofile') }}" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-user"></i>
            <div>پروفایل</div>
        </a>

        <ul class="menu-sub"> --}}
            {{-- @can('Requestwork_Create_Admin') --}}
                {{-- <li class="menu-item">
                    <a href="{{ route('customerprofile.security') }}" class="menu-link ">
                        <div>حساب</div>
                    </a>
                </li> --}}
            {{-- @endcan --}}

            {{-- @can('Requestwork_List_Admin') --}}
                {{-- <li class="menu-item ">
                    <a href="{{ route('requestwork.index') }}" class="menu-link">
                        <div>امنیت</div>
                    </a>
                </li> --}}
            {{-- @endcan --}}


        {{-- </ul>
    </li> --}}
        @canany(['Requestwork_Create_Admin', 'Requestwork_List_Admin'])
            <li
                class="menu-item {{ request()->is('reports/list_scan_period') ? 'active open' : '' }} {{ request()->is('reports/listContradictions') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-layer"></i>
                    <div>درخواست‌کار</div>
                </a>

                <ul class="menu-sub">
                    @can('Requestwork_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('requestwork.create') }}" class="menu-link ">
                                <div>صدور درخواست‌کار </div>
                            </a>
                        </li>
                    @endcan

                    @can('Requestwork_List_Admin')
                        <li class="menu-item ">
                            <a href="{{ route('requestwork.index') }}" class="menu-link">
                                <div>لیست درخواست‌کار</div>
                            </a>
                        </li>
                    @endcan


                </ul>
            </li>
        @endcan

        {{-- PM  --}}

        @canany(['Pm_Create_Admin', 'Pm_List_Admin'])

            <li
                class="menu-item {{ request()->is('reports/list_scan_period') ? 'active open' : '' }} {{ request()->is('reports/listContradictions') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-link"></i>
                    <div>برنامه PM</div>
                </a>
                <ul class="menu-sub">
                    @can('Pm_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('pm.create') }}" class="menu-link ">
                                <div>ایجاد PM</div>
                            </a>
                        </li>
                    @endcan
                    @can('Pm_List_Admin')
                        <li class="menu-item ">
                            <a href="{{ route('pm.index') }}" class="menu-link">
                                <div>لیست PM ها</div>
                            </a>
                        </li>
                    @endcan


                </ul>
            </li>
        @endcan

        {{-- part  --}}
        @canany(['Part_Create_Admin', 'Part_List_Admin'])

            <li
                class="menu-item {{ request()->is('reports/list_scan_period') ? 'active open' : '' }} {{ request()->is('reports/listContradictions') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-link"></i>
                    <div>قطعات تجهیز</div>
                </a>
                <ul class="menu-sub">
                    @can('Part_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('part.create') }}" class="menu-link ">
                                <div>ایجاد قطعه</div>
                            </a>
                        </li>
                    @endcan

                    @can('Part_List_Admin')
                        <li class="menu-item ">
                            <a href="{{ route('part.index') }}" class="menu-link">
                                <div>لیست قطعه‌ها</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>

        @endcan

        {{-- brand  --}}
        @canany(['Brand_Create_Admin', 'Brand_List_Admin'])

            <li
                class="menu-item {{ request()->is('reports/list_scan_period') ? 'active open' : '' }} {{ request()->is('reports/listContradictions') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-award"></i>
                    <div>برندها</div>
                </a>
                <ul class="menu-sub">
                    @can('Brand_Create_Admin')
                        <li class="menu-item  {{ request()->is('reports/list_scan_period') ? 'active' : '' }}">
                            <a href="{{ route('brand.create') }}" class="menu-link ">
                                <div>اضافه کردن برند جدید</div>
                            </a>
                        </li>
                    @endcan
                    @can('Brand_List_Admin')
                        <li class="menu-item {{ request()->is('reports/listContradictions') ? 'active' : '' }}">
                            <a href="{{ route('brand.index') }}" class="menu-link">
                                <div>لیست برندها</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcan

        {{-- company  --}}
        @canany(['Company_Create_Admin', 'Company_List_Admin'])

            <li
                class="menu-item {{ request()->is('reports/list_scan_period') ? 'active open' : '' }} {{ request()->is('reports/listContradictions') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-buildings"></i>
                    <div>شرکت و کارگاه</div>
                </a>
                <ul class="menu-sub">
                    @can('Company_Create_Admin')
                        <li class="menu-item  {{ request()->is('reports/list_scan_period') ? 'active' : '' }}">
                            <a href="{{ route('company.create') }}" class="menu-link ">
                                <div>اضافه کردن شرکت جدید</div>
                            </a>
                        </li>
                    @endcan
                    @can('Company_List_Admin')
                        <li class="menu-item {{ request()->is('reports/listContradictions') ? 'active' : '' }}">
                            <a href="{{ route('company.index') }}" class="menu-link">
                                <div>لیست شرکت‌ها</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcan

        {{-- machine  --}}
        @canany(['Machine_Create_Admin', 'Machine_List_Admin'])

            <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-hive"></i>
                    <div> ماشین </div>
                </a>
                <ul class="menu-sub">
                    @can('Machine_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('machine.create') }}" class="menu-link ">
                                <div>ثبت ماشین</div>
                            </a>
                        </li>
                    @endcan
                    @can('Machine_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('machine.index') }}" class="menu-link">
                                <div>لیست ماشین</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcan

        {{-- specialty And unitMeasurement --}}
        @canany(['Specialty_Create_Admin', 'Specialty_List_Admin', 'UnitMeasurement_Create_Admin',
            'UnitMeasurement_List_Admin'])

            <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-hard-hat"></i>
                    <div>تخصص</div>
                </a>
                <ul class="menu-sub">
                    @can('Specialty_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('specialty.create') }}" class="menu-link">
                                <div>اضافه کردن تخصص</div>
                            </a>
                        </li>
                    @endcan
                    @can('Specialty_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('specialty.index') }}" class="menu-link">
                                <div>لیست تخصص</div>
                            </a>
                        </li>
                    @endcan
                    @can('UnitMeasurement_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('unitMeasurement.create') }}" class="menu-link">
                                <div>اضافه‌کردن واحد اندازه‌گیری</div>
                            </a>
                        </li>
                    @endcan
                    @can('UnitMeasurement_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('unitMeasurement.index') }}" class="menu-link">
                                <div>لیست واحد اندازه‌گیری</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>

        @endcan

        {{-- role  --}}
        @canany(['Role_Create_Admin', 'Role_List_Admin'])
            <li class="menu-item">
                <a href="{{ route('accesslevel.accesspermission') }}" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-customize"></i>
                    <div>نقش‌ها</div>
                </a>
                <ul class="menu-sub">
                    @can('Role_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('role.index') }}" class="menu-link">
                                <div>لیست نقش‌ها</div>
                            </a>
                        </li>
                    @endcan
                    @can('Role_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('role.create') }}" class="menu-link">
                                <div>اضافه کردن نقش</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcan

        {{-- operator  --}}
        @canany(['Operator_Create_Admin', 'Operator_List_Admin'])
            <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user-circle"></i>
                    <div>اپراتور</div>
                </a>
                <ul class="menu-sub">
                    @can('Operator_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('operator.create') }}" class="menu-link">
                                <div>اضافه کردن اپراتور</div>
                            </a>
                        </li>
                    @endcan
                    @can('Operator_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('operator.index') }}" class="menu-link">
                                <div>لیست اپراتور</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcan

        {{-- equipment And typeequipment --}}
        @canany(['Equipment_Create_Admin', 'Equipment_List_Admin', 'Typeequipment_Create_Admin',
            'Typeequipment_List_Admin'])
            <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-package"></i>
                    <div>تجهیز</div>
                </a>
                <ul class="menu-sub">
                    @can('Equipment_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('equipment.create') }}" class="menu-link">
                                <div>ثبت تجهیز</div>
                            </a>
                        </li>
                    @endcan
                    @can('Equipment_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('equipment.index') }}" class="menu-link">
                                <div>لیست تجهیز</div>
                            </a>
                        </li>
                    @endcan
                    @can('Typeequipment_Create_Admin')
                        <li class="menu-item">
                            <a href="{{ route('typeequipment.create') }}" class="menu-link">
                                <div>اضافه کردن مدل و تیپ تجهیز</div>
                            </a>
                        </li>
                    @endcan
                    @can('Typeequipment_List_Admin')
                        <li class="menu-item">
                            <a href="{{ route('typeequipment.index') }}" class="menu-link">
                                <div>لیست مدل و تیپ تجهیز</div>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcan

        {{-- customer  --}}
        {{-- @canany(['Customer_Create_Admin', 'Customer_List_Admin']) --}}
            <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div>مشتری</div>
                </a>

                <ul class="menu-sub">
                    {{-- @can('Customer_List_Admin') --}}

                        <li class="menu-item">
                            <a href="{{ route('customer.index') }}" class="menu-link">
                                <div>لیست مشتری</div>
                            </a>
                        </li>
                    {{-- @endcan --}}

                    {{-- @can('Customer_Create_Admin') --}}

                        <li class="menu-item">
                            <a href="{{ route('customer.create') }}" class="menu-link">
                                <div>اضافه کردن مشتری</div>
                            </a>
                        </li>
                    {{-- @endcan --}}

                </ul>
            </li>
        {{-- @endcan --}}
        {{-- permission  --}}
        {{-- @canany(['Permission_Create_Admin', 'Permission_List_Admin']) --}}
            <li class="menu-item">
                <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-universal-access"></i>
                    <div>سطوح دسترسی</div>
                </a>
                <ul class="menu-sub">
                    {{-- @can('Permission_List_Admin') --}}

                    <li class="menu-item">
                        {{-- <a href="{{ route('permission.index') }}" class="menu-link"> --}}
                            <div> لیست Permissions</div>
                        </a>
                    </li>
                    {{-- @endcan --}}
                    {{-- @can('Permission_Create_Admin') --}}

                    <li class="menu-item">
                        <a href="{{ route('permission.create') }}" class="menu-link">
                            <div>اضافه کردن Permissions </div>
                        </a>
                    </li>
                    {{-- @endcan --}}
                </ul>
            </li>
            {{-- @endcan --}}

            {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div>اطلاعات پایه‌ای</div>
            </a>
        </li> --}}
            {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div>فعالیت</div>
            </a>
        </li> --}}
            {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div>امنیت و سطوح دسترسی</div>
            </a>
        </li> --}}
            {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div>برنامه ریزی</div>
            </a>
        </li> --}}
            {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">اطلاعات ایستگاه و مراکز
                اسکن</span></li>

        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>انبارداری</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>حسابداری و مالی</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>تامین کنندگان</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">متفرقه</span></li>
        <li class="menu-item">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">پشتیبانی</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">مستندات</div>
            </a>
        </li> --}}
            <li class="menu-item">
                <a href="{{ route('logout') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
                    <div>خروج</div>
                </a>
            </li>




            <!-- Charts & Maps -->
            {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">نمودارها و نقشه‌ها</span></li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-chart"></i>
          <div data-i18n="Charts">نمودارها</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="charts-apex.html" class="menu-link">
              <div data-i18n="Apex Charts">نمودارهای Apex</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="charts-chartjs.html" class="menu-link">
              <div data-i18n="ChartJS">نمودارهای ChartJS</div>
            </a>
          </li>
        </ul>
      </li> --}}
            {{-- <li class="menu-item">
        <a href="maps-leaflet.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-map-alt"></i>
          <div data-i18n="Leaflet Maps">نقشه‌های Leaflet</div>
        </a>
      </li> --}}

            <!-- Misc -->
        </ul>
    </aside>
