/**
 * DataTables Advanced (jquery)
 */

"use strict";

$(function () {
    var dt_filter_table = $(".dt-column-search"),
        startDateEle = $(".start_date"),
        endDateEle = $(".end_date");
    // nameselect = $(".dt-name"),
    // Scanningdeviceselect= $(".dt-Scanning_device"),
    // statusselect= $(".dt-status");
    // Advanced Search Functions Starts
    // --------------------------------------------------------------------
    // Filter column with select name function
    //  nameselect.change(function () {
    //     dt_adv_filter_table
    //         .DataTable()
    //         .column(1)
    //         .search($(this).val(), false, true)
    //         .draw();
    // });
    // Filter column with select Scanningdevice function

    // Scanningdeviceselect.change(function () {
    //     dt_adv_filter_table
    //         .DataTable()
    //         .column(2)
    //         .search($(this).val(), false, true)
    //         .draw();
    // });
    // Filter column with select Scanningdevice function

    // statusselect.change(function () {
    //     dt_adv_filter_table
    //         .DataTable()
    //         .column(7)
    //         .search($(this).val(), false, true)
    //         .draw();
    // });
    // Datepicker for advanced filter

    // Filter column wise function
    function filterColumn(i, val) {
        if (i == 5) {
            var startDate = startDateEle.val(),
                endDate = endDateEle.val();
            if (startDate !== "" && endDate !== "") {
                $.fn.dataTableExt.afnFiltering.length = 0; // Reset datatable filter
                dt_adv_filter_table.dataTable().fnDraw(); // Draw table after filter
                filterByDate(i, startDate, endDate); // We call our filter function
            }
            dt_adv_filter_table.dataTable().fnDraw();
        } else {
            dt_adv_filter_table
                .DataTable()
                .column(i)
                .search(val, false, true)
                .draw();
        }
    }

    // Advance filter function
    // We pass the column location, the start date, and the end date
    $.fn.dataTableExt.afnFiltering.length = 0;
    var filterByDate = function (column, startDate, endDate) {
        // Custom filter syntax requires pushing the new filter to the global filter array
        $.fn.dataTableExt.afnFiltering.push(function (
            oSettings,
            aData,
            iDataIndex
        ) {
            var rowDate = normalizeDate(new JDate(aData[column])["_date"]),
                start = normalizeDate(startDate),
                end = normalizeDate(endDate);

            // If our date from the row is between the start and end
            if (start <= rowDate && rowDate <= end) {
                return true;
            } else if (rowDate >= start && end === "" && start !== "") {
                return true;
            } else if (rowDate <= end && start === "" && end !== "") {
                return true;
            } else {
                return false;
            }
        });
    };

    // converts date strings to a Date object, then normalized into a YYYYMMMDD format (ex: 20131220). Makes comparing dates easier. ex: 20131220 > 20121220
    var normalizeDate = function (dateString) {
        var date = new JDate(new Date(dateString));
        var normalized =
            date.getFullYear() +
            "" +
            ("0" + (date.getMonth() + 1)).slice(-2) +
            "" +
            ("0" + date.getDate()).slice(-2);
        return normalized;
    };
    // Advanced Search Functions Ends

    // Column Search
    // --------------------------------------------------------------------

    if (dt_filter_table.length) {
        // Setup - add a text input to each footer cell
        $(".dt-column-search thead tr")
            .clone(true)
            .appendTo(".dt-column-search thead");
        $(".dt-column-search thead tr:eq(1) th").each(function (i) {
            if (i != 7) {
                if (i == 0) {
                    var title = $(this).text();
                    $(this).html(
                        '<select type="text" class="select2 selecttable form-select dt-input dt-name"><option value="">همه موارد</option><option value="میرجاوه">میرجاوه</option><option value="جلفا">جلفا</option><option value="لطف آباد">لطف آباد</option><option value="بازرگان">بازرگان</option><option value="پرویزخان">پرویزخان</option></select>'
                    );

                    $("select", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
                if (i == 1) {
                    var title = $(this).text();
                    $(this).html(
                        '<select type="text" selecttable class="select2 selecttable form-select dt-input dt-Scanning_device"><option value="">همه موارد</option><option value="صاپا1">صاپا1</option><option value="صاپا2">صاپا2</option><option value="ناک تک1 ">ناک تک1 </option><option value="ناک تک2">ناک تک2</option><option value="ناک تک3">ناک تک3</option></select>'
                    );

                    $("select", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
                if (i == 2) {
                    var title = $(this).text();
                    $(this).html(
                        '<div class="mb-0"><input  type="text" class="form-control selecttable dt-date flatpickr-range dt-input" data-column="5" placeholder="تاریخ شروع تا پایان" data-column-index="4" name="dt_date"><input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date"><input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" ></div>'
                    );

                    $("input", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
                if (i == 3) {
                    var title = $(this).text();
                    $(this).html(
                        '<div class="mb-0"><input  type="text" class="form-control selecttable  dt-date flatpickr-range dt-input" data-column="5" placeholder="تاریخ شروع تا پایان" data-column-index="4" name="dt_date"><input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date"><input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" ></div>'
                    );

                    $("input", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
                if (i == 4) {
                    var title = $(this).text();
                    $(this).html(
                        '<input type="text" class="form-control selecttable" placeholder="تعداد ' +
                            title +
                            '" />'
                    );

                    $("input", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
                if (i == 5) {
                    var title = $(this).text();
                    $(this).html(
                        '<input type="text" class="form-control selecttable" placeholder="تعداد ' +
                            title +
                            '" />'
                    );

                    $("input", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
                if (i == 6) {
                    var title = $(this).text();
                    $(this).html(
                        '<select type="text" class="select2 selecttable form-select dt-input dt-Scanning_device">option value="">همه موارد</option><option value="فعال">فعال</option><option value="غیرفعال">غیرفعال</option><option value="خراب">خراب</option><option value="درحال‌تعمیر">درحال تعمیر</option><option value="نامشخص">نامشخص</option></select>'
                    );

                    $("select", this).on("keyup change", function () {
                        if (dt_filter.column(i).search() !== this.value) {
                            dt_filter.column(i).search(this.value).draw();
                        }
                    });
                }
            }
        });

        var dt_filter = dt_filter_table.DataTable({
            ajax: assetsPath + "json/database/scaners.json",
            columns: [
                { data: "name" },
                { data: "Scanning_device" },
                { data: "start_date" },
                { data: "date" },
                { data: "Numberـofـscans" },
                { data: "Contradiction" },
                { data: "status" },
                { data: "" },
            ],
            columnDefs: [
                {
                    // Label
                    targets: -2,
                    render: function (data, type, full, meta) {
                        var $status_number = full["status"];
                        var $status = {
                            1: { title: "فعال", class: "bg-label-success" },
                            2: {
                                title: "غیرفعال",
                                class: " bg-label-warning",
                            },
                            3: { title: "خراب", class: " bg-label-danger" },
                            4: {
                                title: "درحال‌تعمیر",
                                class: " bg-label-primary",
                            },
                            5: {
                                title: "نامشخص",
                                class: " bg-label-secondary",
                            },
                        };
                        if (typeof $status[$status_number] === "undefined") {
                            return data;
                        }
                        return (
                            '<span class="badge rounded-pill ' +
                            $status[$status_number].class +
                            '">' +
                            $status[$status_number].title +
                            "</span>"
                        );
                    },
                },
                {
                    // Actions
                    targets: -1,
                    title: "نمایش جزئیات",
                    orderable: false,
                    searchable: false,
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="d-inline-block">' +
                            '<a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>' +
                            '<div class="dropdown-menu dropdown-menu-end m-0">' +
                            '<a href="/reports/list_contradiction" class="dropdown-item">مشاهده مغایرت ها</a>' +
                            '<a href="#" class="dropdown-item">لیست پرسنل</a>' +
                            '<a href="#" class="dropdown-item">لیست اسکن ها</a>' +
                            "</div>" +
                            "</div>" +
                            '<a  href="/reports/list_contradiction" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-show"></i></a>'
                        );
                    },
                },
            ],
            orderCellsTop: true,
            dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>><"table-responsive"t><"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        });
    }

    $("input.dt-input").on("keyup", function () {
        filterColumn($(this).attr("data-column"), $(this).val());
    });

    // Filter form control to default size
    // ? setTimeout used for multilingual table initialization
    setTimeout(() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm");
        $(".dataTables_length .form-select").removeClass("form-select-sm");
    }, 200);
    var rangePickr = $(".flatpickr-range");

    if (rangePickr.length) {
        rangePickr.flatpickr({
            mode: "range",
            locale: "fa",
            dateFormat: "Y/m/d",
            orientation: isRtl ? "auto right" : "auto left",
            onClose: function (selectedDates, dateStr, instance) {
                var startDate = "",
                    endDate = new Date();
                if (selectedDates[0] != undefined) {
                    startDate = selectedDates[0];
                    startDateEle.val(startDate);
                }
                if (selectedDates[1] != undefined) {
                    endDate = selectedDates[1];
                    endDateEle.val(endDate);
                }
                $(rangePickr).trigger("change").trigger("keyup");
            },
            disableMobile: true,
        });
    }
});
