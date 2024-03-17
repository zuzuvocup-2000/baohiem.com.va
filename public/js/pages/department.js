// JS thêm sửa xóa bệnh viện
$(document).on('click', '.btn-create-department', function () {
    let _this = $(this);
    var formData = {
        department_name: $('input[name="create_department_name"]').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/department/create',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        success: function (response) {
            if (response.status === 'success') {
                toastr.success(response.message);
                window.location.reload()
            } else {
                toastr.error(response.message);
            }
            enabledButtonLoading(_this)
        },
        error: function (error) {
            toastr.error(error.responseJSON.message);
            enabledButtonLoading(_this)
        }
    });
    return false;
})
$('.delete-button-department').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá phòng ban được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var departmentId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/department/delete',
                data: { departmentId: departmentId },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.status === 'success') {
                        Swal.fire('Xoá thành công!', response.message, 'success');
                        _this.parents('tr').remove()
                    } else {
                        Swal.fire('Lỗi!', response.message, 'error');
                    }
                },
                error: function (error) {
                    Swal.fire('Error!', 'Failed to delete the period.', 'error');
                }
            });
        }
    });
});
$(document).on('click', '.btn-update-department', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        department_name: row.find('input[name="update_department_name"]').val(),
        departmentId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/department/update',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        success: function (response) {
            if (response.status === 'success') {
                toastr.success(response.message);
            } else {
                toastr.error(response.message);
            }
        },
        error: function (error) {
            toastr.error(error.responseJSON.message);
        }
    });
    return false;
})
