$(document).ready(function () {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger me-2",
        },
        buttonsStyling: false
    });

    $(".system-table").on("click", ".tabledit-delete-button", function () {
        var row = $(this).closest("tr");
        var userId = $(this).closest("tr").attr('data-id');
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
                $.ajax({
                    url: '/user/delete/' + userId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (response) {
                        swalWithBootstrapButtons.fire({
                            title: "Xóa thành công!",
                            text: "Dữ liệu của bạn đã được xóa.",
                            icon: "success"
                        }).then(() => {
                            row.remove();
                        });
                    },
                    error: function (xhr) {
                        swalWithBootstrapButtons.fire({
                            title: 'Xảy ra lỗi!',
                            text: 'Xóa tài khoản thất bại.',
                            icon: 'error'
                        });
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Hủy bỏ",
                    text: "Hủy bỏ thao tác",
                    icon: "error"
                });
            }
        });
    });
});
