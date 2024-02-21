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

    $("#simpletable").on("click", ".tabledit-delete-button", function() {
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