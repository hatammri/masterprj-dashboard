/**
 * DataTables Advanced (jquery)
 */

"use strict";

$(function () {
    var dt_filter_table = $(".dt-column-search")

    if (dt_filter_table.length) {

        var dt_filter = dt_filter_table.DataTable({

            columns: [
                { data: "name" },
                { data: "display_name"},
                { data: "guard_name"},
                { data: "" },
            ],
             columnDefs: [
                {
                    // Label
                    targets: -2,
                    render: function (data, type, full, meta) {
                        var $status_number = full["guard_name"];
                        var $status = {
                            'web': { title: "web", class: "bg-label-success" },
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
                    text: '<i class="bx bx-plus me-md-2"></i><span class="d-md-inline-block d-none">ایجاد permission</span>',
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

    setTimeout(() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm");
        $(".dataTables_length .form-select").removeClass("form-select-sm");
    }, 200);


});
