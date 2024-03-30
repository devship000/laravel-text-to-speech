$(function () {
    "use strict";

    var dataTableExample = $("#dataTableExample");
    if (!dataTableExample.hasClass("dataTableInitialized")) {
        dataTableExample.addClass("dataTableInitialized");

        dataTableExample.DataTable({
            aLengthMenu: [
                [10, 30, 50, -1],
                [10, 30, 50, "All"],
            ],
            iDisplayLength: 10,
            language: {
                search: "",
            },
            initComplete: function (settings, json) {
                // Modify pagination links to work correctly
                $(".pagination a").on("click", function (e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    dataTableExample.DataTable().ajax.url(url).load();
                });
            },
        });

        dataTableExample.each(function () {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and turn this into an in-line form control
            var search_input = datatable
                .closest(".dataTables_wrapper")
                .find("div[id$=_filter] input");
            search_input.attr("placeholder", "Search");
            search_input.removeClass("form-control-sm");
            // LENGTH - Inline-Form control
            var length_sel = datatable
                .closest(".dataTables_wrapper")
                .find("div[id$=_length] select");
            length_sel.removeClass("form-control-sm");
        });
    }
});
