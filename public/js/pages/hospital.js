$(document).on('click', '.btn-create-hospital', function () {
    let _this = $(this);
    var formData = {
        hospital_name: $('.create-hospital').val(),
        hospital_type_id: $('.hospital-type input[type=radio]:checked').val(),
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
        text: 'Xoá phân nhóm khách hàng theo bệnh viện được chọn!',
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
        hospital_name: row.find('.update-hospital-name').val(),
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
$('#hospitalTypeSelect').on('change', function () {
    var selectedHospitalType = $(this).val();
    window.location.href = window.location.pathname + '?hospital_type_id=' + selectedHospitalType;
});