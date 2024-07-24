/**
 * DataTables Advanced (jquery)
 */

"use strict";

$(function () {
    var dt_filter_table = $(".dt-column-search"),
        startDateEle = $(".start_date"),
        endDateEle = $(".end_date");

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

        var dt_filter = dt_filter_table.DataTable({

            columns: [
                { data: "request_number" },
                { data: "customers.userID.name" },
                { data: "equipments.name" },
                { data: "barnds.name" },
                { data: "typeEqupments.name" },
                { data: "equipment_number" },
                { data: "request_status" },
                { data: "date_enter" },
                { data: "date_delivery" },
                { data: "date_out" },
                { data: "estimated_cost" },
                { data: "real_cost" },
                { data: "Urgency_Work" },
                { data: "description" },
                { data: "creators.name" },
                { data: "is_active" },
                { data: "serviceplace" },
                { data: "" },

            ],
            columnDefs: [
                {
                    // Label
                    targets: -3,
                    render: function (data, type, full, meta) {
                        var $status_number = full["is_active"];
                        var $status = {
                            1: { title: "فعال", class: "bg-label-success" },
                            0: {
                                title: "غیرفعال",
                                class: " bg-label-warning",
                            },
                            null: {
                                title: "نامشخص",
                                class: " bg-label-warning",
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
                    // Label
                    targets: -2,
                    render: function (data, type, full, meta) {
                        var $status_number = full["serviceplace"];
                        var $status = {
                            1: { title: "نیاز دارد", class: "bg-label-success" },
                            0: {
                                title: "نیاز ندارد",
                                class: " bg-label-warning",
                            },
                            null: {
                                title: "نامشخص",
                                class: " bg-label-warning",
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
                    // Label
                    targets: 12,
                    render: function (data, type, full, meta) {
                        var $status_number = full["Urgency_Work"];
                        var $status = {
                            1: { title: "اضطراری", class: "bg-label-success" },
                            2: {
                                title: "خیلی مهم",
                                class: "bg-label-info",
                            },
                            3: {
                                title: "مهم",
                                class: "bg-label-danger",
                            },
                            4: {
                                title: "عادی",
                                class: "bg-label-primary",
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
                    // Label
                    targets: 6,
                    render: function (data, type, full, meta) {
                        var $status_number = full["request_status"];
                        var $status = {
                            IS: { title: "IS - صدور درخواست", class: "bg-label-danger" },
                            RE: { title: "RE -  دریافت تجهیز", class: "bg-label-primary" },
                            AC: { title: "AC -  پذیرش ", class: "bg-label-success" },
                            AN: { title: "AN -  درحال برنامه‌ریزی ", class: "bg-label-warning" },
                            PR: { title: "PR -  دربرنامه قرار گرفته", class: "bg-label-info" },
                            FS: { title: "FS -  برنامه ریزی‌ادامه‌کار", class: "bg-label-info" },
                            UP: { title: "UP - در حال بروزرسانی", class: "bg-label-warning" },
                            FF: { title: "FF - پایان کار", class: "bg-label-success" },
                            SS: { title: "SS - معلق", class: "bg-label-danger" },
                            DD: { title: "DD - تجهیز تحویل مشتری شده", class: "bg-label-success" },
                            AA: { title: "AA - قطعه اسقاط", class: "bg-label-danger" }
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
            ],
            orderCellsTop: true,
            dom:
                '<"row mx-2"' +
                '<"col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-3"l<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3"B>>' +
                '<"col-12 col-md-6 d-flex  justify-content-center justify-content-md-end"f><"invoice_status mb-3 mb-md-0">>' +
                '<"table-responsive"t>' +
                '<"row mx-2"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                ">",

            buttons: [
                {
                    text: '<i class="bx bx-plus me-md-2"></i><span class="d-md-inline-block d-none">ایجاد درخواست‌کار</span>',
                    className: "btn btn-primary",
                    action: function (e, dt, button, config) {
                        window.location = "create";
                    },
                },
            ],
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

});
