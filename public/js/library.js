$(document).ready(function () {
    $(".toggleAll").on("change", function () {
        $(".toggleCheckbox").prop("checked", $(this).prop("checked"));
    });
    $(".toggleCheckbox").on("change", function () {
        $(".toggleAll").prop("checked", $(".toggleCheckbox:checked").length === $(".toggleCheckbox")
            .length);
    });
});
$(document).ready(function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger me-2",
        },
        buttonsStyling: false
    });

    $(".system-table").on("click", ".tabledit-delete-button", function() {
        swalWithBootstrapButtons.fire({
            title: "Bạn có chắc chắn?",
            text: "Sau khi xóa dữ liệu sẽ không thể khôi phục!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Xóa dữ liệu!",
            cancelButtonText: "Hủy bỏ!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: "Dữ liệu của bạn đã được xóa.",
                    icon: "success"
                });
                var row = $(this).closest("tr");
                row.remove();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Hủy bỏ thao tác",
                    icon: "error"
                });
            }
        });
    });
});
$(document).ready(function() {
    $(document).on('click', '.editButton', function() {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        // Lưu giá trị ban đầu của input trên element
        inputFields.each(function() {
            $(this).attr("data-original-value", $(this).val());
        });
        inputFields.prop("disabled", false);
        $(this).hide();
        row.find(".saveButton, .cancelButton").show();
        row.find(".tabledit-delete-button").hide();
    })
    $(document).on('click', '.saveButton', function() {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        inputFields.prop("disabled", true);
        $(this).hide();
        row.find(".editButton").show();
        row.find(".tabledit-delete-button").show();
        row.find(".cancelButton").hide();
    })
    $(document).on('click', '.cancelButton', function() {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        // Khôi phục giá trị ban đầu của input từ thuộc tính data
        inputFields.each(function() {
            $(this).val($(this).attr("data-original-value"));
        });
        inputFields.prop("disabled", true);
        $(this).hide();
        row.find(".editButton").show();
        row.find(".tabledit-delete-button").show();
        row.find(".saveButton").hide();
    })
});
