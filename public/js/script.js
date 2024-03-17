$(document).ready(function () {
    $(".btnModal").on("click", function () {
        const borrowId = $(this).data("id");
        const url = $(this).attr("href");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: url,
            data: { id: borrowId },
            method: "post",
            dataType: "json",
            success: function (data) {
                $(".denda").val(data.denda);
            },
        });
    });
});
