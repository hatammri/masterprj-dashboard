/**
 * DataTables Advanced (jquery)
 */

"use strict";

$(function () {
    var dt_adv_filter_table = $(".dt-advanced-search"),
        startDateEle = $(".start_date"),
        endDateEle = $(".end_date"),
        nameselect = $(".dt-name"),
        Scanningdeviceselect= $(".dt-Scanning_device"),
        statusselect= $(".dt-status");

    // Filter column with select name function
    nameselect.change(function () {
        dt_adv_filter_table
            .DataTable()
            .column(1)
            .search($(this).val(), false, true)
            .draw();
    });
    // Filter column with select Scanningdevice function

    Scanningdeviceselect.change(function () {
        dt_adv_filter_table
            .DataTable()
            .column(2)
            .search($(this).val(), false, true)
            .draw();
    });
   // Filter column with select Scanningdevice function

   statusselect.change(function () {
        dt_adv_filter_table
            .DataTable()
            .column(7)
            .search($(this).val(), false, true)
            .draw();
    });
    // Advanced Search Functions Starts
    // --------------------------------------------------------------------

    // Datepicker for advanced filter
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

    // Advanced Search
    // --------------------------------------------------------------------

    // Advanced Filter table
    if (dt_adv_filter_table.length) {
        var dt_adv_filter = dt_adv_filter_table.DataTable({
            dom: "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6 dataTables_pager'p>>",
            ajax: assetsPath + "json/database/scaners.json",
            columns: [
                { data: "" },
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
                    className: "control",
                    orderable: false,
                    targets: 0,
                    render: function (data, type, full, meta) {
                        return "";
                    },
                },
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
                            5: { title: "نامشخص", class: " bg-label-secondary" },
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
                            '</div>' +
                            '</div>' +
                            '<a  href="/reports/list_contradiction" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-show"></i></a>'
                        );
                    },
                },
            ],
            orderCellsTop: true,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return "جزئیات " + data["name"];
                        },
                    }),
                    type: "column",
                    renderer: function (api, rowIdx, columns) {
                        var data = $.map(columns, function (col, i) {
                            return col.title !== "" // ? Do not show row in modal popup if title is blank (for check box)
                                ? '<tr data-dt-row="' +
                                      col.rowIndex +
                                      '" data-dt-column="' +
                                      col.columnIndex +
                                      '">' +
                                      "<td>" +
                                      col.title +
                                      ":" +
                                      "</td> " +
                                      "<td>" +
                                      col.data +
                                      "</td>" +
                                      "</tr>"
                                : "";
                        }).join("");

                        return data
                            ? $('<table class="table"/><tbody />').append(data)
                            : false;
                    },
                },
            },
        });
    }

    // on key up from input field
    $("input.dt-input").on("keyup", function () {
        filterColumn($(this).attr("data-column"), $(this).val());
    });

    // Filter form control to default size
    // ? setTimeout used for multilingual table initialization
    setTimeout(() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm");
        $(".dataTables_length .form-select").removeClass("form-select-sm");
    }, 200);
});
