// JS thêm sửa xóa bệnh viện
$(document).on('click', '.btn-create-hospital', function () {
    let _this = $(this);
    var formData = {
        hospital_name: $('input[name="create_hospital_name"]').val(),
        hospital_type_id: $('select[name="creat_hospital_type_id"]').val(),
    };
    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/hospital/create',
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
$('.delete-button-hospital').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá bệnh viện được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var hospitalId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/hospital/delete',
                data: { hospitalId: hospitalId },
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
$(document).on('click', '.btn-update-hospital', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        hospital_name: row.find('input[name="update_hospital_name"]').val(),
        hospital_type_id: row.find('select[name="update_hospital_type_id"]').val(),
        hospitalId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/hospital/update',
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
// JS thêm sửa xóa tài khoản bệnh viện
$(document).on('click', '.btn-create-user-hospital', function () {
    let _this = $(this);
    var formData = {
        hospital_id: $('select[name="create_hospital_id"]').val(),
        employee_name: $('input[name="create_employee_name"]').val(),
        username: $('input[name="create_username"]').val(),
        password: $('input[name="create_password"]').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/hospital-user/create',
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
$('.delete-button-user-hospital').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá tài khoản bệnh viện được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var userHospitalId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/hospital-user/delete',
                data: { userHospitalId: userHospitalId },
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
$(document).on('click', '.btn-update-user-hospital', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        employee_name: row.find('input[name="update_employee_name"]').val(),
        username: row.find('input[name="update_username"]').val(),
        password: row.find('input[name="update_password"]').val(),
        hospital_id: row.find('select[name="update_user_hospital_id"]').val(),
        hospitalUserId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/hospital-user/update',
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
// JS thêm sửa xóa hợp đồng bệnh viện
$(document).on('click', '.btn-create-contract-hospital', function () {
    let _this = $(this);
    var formData = {
        hospital_name: $('input[name="create_hospital_name"]').val(),
        employee_name: $('input[name="create_employee_name"]').val(),
        contract_name: $('input[name="create_contract_name"]').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/hospital-contract/create',
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
$('.delete-button-contract-hospital').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá hợp đồng bệnh viện được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var hospitalContractId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/hospital-contract/delete',
                data: { hospitalContractId: hospitalContractId },
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
$(document).on('click', '.btn-update-contract-hospital', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        hospital_name: row.find('input[name="update_hospital_name"]').val(),
        employee_name: row.find('input[name="update_employee_name"]').val(),
        contract_name: row.find('input[name="update_contract_name"]').val(),
        hospitalContractId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/hospital-contract/update',
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