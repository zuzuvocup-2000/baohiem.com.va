$(document).on('click', '.btn-update-company', function () {
    let _this = $(this);
    let row = _this.parents('tr');
    var formData = {
        company_name: row.find('input[name=company_name]').val(),
        companyId: row.attr('data-id'),
        address: row.find('input[name=address]').val(),
        phone_number: row.find('input[name=phone_number]').val(),
        email: row.find('input[name=email]').val(),
        ceo_name: row.find('input[name=ceo_name]').val(),
        province_id: $('#provinceSelect').val(),
        responsibility_officer_name: row.find('input[name=responsibility_officer_name]').val(),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/company/update',
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

$(document).on('click', '.btn-create-company', function () {
    let _this = $(this);
    var formData = {
        company_name: $('.create-company-name').val(),
        address: $('.create-company-address').val(),
        phone_number: $('.create-company-phone_number').val(),
        email: $('.create-company-email').val(),
        ceo_name: $('.create-company-ceo_name').val(),
        province_id: $('#provinceSelect').val(),
        responsibility_officer_name: $('.create-company-responsibility_officer_name').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/company/create',
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

$('#provinceSelect').on('change', function () {
    var selectedProvinceId = $(this).val();
    window.location.href = window.location.pathname + '?&province_id=' + selectedProvinceId;
});

$('.delete-button-company').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá công ty được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var companyId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/company/delete',
                data: { companyId: companyId },
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
                    Swal.fire('Error!', 'Failed to delete the company.', 'error');
                }
            });
        }
    });
});
