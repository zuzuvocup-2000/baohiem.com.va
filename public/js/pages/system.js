/* ====================================================================== Company ================================================================================ */

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
    window.location.href = window.location.pathname + '?province_id=' + selectedProvinceId;
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

/* ====================================================================== Company ================================================================================ */

/* ====================================================================== Period ================================================================================= */

$(document).on('click', '.btn-update-period', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        period_name: row.find('input[name=period_name]').val(),
        periodId: row.attr('data-id'),
        from_year: row.find('input[name=from_year]').val(),
        to_year: row.find('input[name=to_year]').val(),
        order: row.find('input[name=order]').val(),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/period/update',
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

$(document).on('click', '.btn-create-period', function () {
    let _this = $(this);
    var formData = {
        period_name: $('.create-period-period_name').val(),
        from_year: $('.create-period-from_year').val(),
        to_year: $('.create-period-to_year').val(),
        order: $('.create-period-order').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/period/create',
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

$('.delete-button-period').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá niên hạn được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var periodId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/period/delete',
                data: { periodId: periodId },
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

/* ====================================================================== Period ================================================================================= */

/* ====================================================================== Account Package ================================================================================= */

$(document).on('change' , '#companySelectAccountPackage, #periodSelectAccountPackage', function(){
    console.log(1);
    var company = $('#companySelectAccountPackage').val();
    var period = $('#periodSelectAccountPackage').val();
    window.location.href = window.location.pathname + '?account_package_company_id=' + company + '&account_package_period_id=' + period;
});

$(document).on('click', '.btn-update-account-package', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        package_name: row.find('.update-account-package-package_name').val(),
        package_price: row.find('.update-account-package-package_price').val(),
        note: row.find('.update-account-package-note').val(),
        companyId: $('#companySelectAccountPackage').val(),
        periodId: $('#periodSelectAccountPackage').val(),
        accountPackageId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/account-package/update',
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

$(document).on('click', '.btn-create-account-package', function () {
    let _this = $(this);
    var formData = {
        package_name: $('.create-account-package-package_name').val(),
        package_price: $('.create-account-package-package_price').val(),
        note: $('.create-account-package-note').val(),
        companyId: $('#companySelectAccountPackage').val(),
        periodId: $('#periodSelectAccountPackage').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/account-package/create',
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

$('.delete-button-account-package').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá gói bảo hiểm được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var accountPackageId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/account-package/delete',
                data: { accountPackageId: accountPackageId },
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

/* ====================================================================== Account Package ================================================================================= */

/* ====================================================================== Customer Group ================================================================================= */

$(document).on('click', '.btn-update-customer-group', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        group_name: row.find('.update-customer-group-group_name').val(),
        customerGroupId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/customer-group/update',
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

$(document).on('click', '.btn-create-customer-group', function () {
    let _this = $(this);
    var formData = {
        group_name: $('.create-customer-group-group_name').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/customer-group/create',
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

$('.delete-button-customer-group').on('click', function () {
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
            var customerGroupId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/customer-group/delete',
                data: { customerGroupId: customerGroupId },
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

/* ====================================================================== Customer Group ================================================================================= */

/* ====================================================================== Customer Type ================================================================================= */

$(document).on('click', '.btn-update-customer-type', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        type_name: row.find('.update-customer-type-type_name').val(),
        order: row.find('.update-customer-type-order').val(),
        customerTypeId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/customer-type/update',
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

$(document).on('click', '.btn-create-customer-type', function () {
    let _this = $(this);
    var formData = {
        type_name: $('.create-customer-type-type_name').val(),
        order: $('.create-customer-type-order').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/customer-type/create',
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

$('.delete-button-customer-type').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá phân loại khách hàng được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var customerTypeId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/customer-type/delete',
                data: { customerTypeId: customerTypeId },
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

/* ====================================================================== Customer Type ================================================================================= */

/* ====================================================================== Contract ================================================================================= */

$(document).on('click', '.btn-update-contract', function () {
    let _this = $(this);
    let row = _this.parents('tr');

    var formData = {
        contract_name: row.find('.update-contract-contract_name').val(),
        contract_supplement_number: row.find('.update-contract-contract_supplement_number').val(),
        signature_date: row.find('.update-contract-signature_date').val(),
        effective_time: row.find('.update-contract-effective_time').val(),
        end_time: row.find('.update-contract-end_time').val(),
        extension: row.find(".update-contract-extension").is(":checked") ? 1 : 0,
        total_contract_value: row.find('.update-contract-total_contract_value').val(),
        company_id: row.find('.update-contract-company_id').val(),
        period_id: row.find('.update-contract-period_id').val(),
        contractId: row.attr('data-id'),
    };

    $.ajax({
        type: 'PUT',
        url: '/ajax/contract/update',
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

$(document).on('click', '.btn-create-contract', function () {
    let _this = $(this);
    var formData = {
        contract_name: $('.create-contract-contract_name').val(),
        company_id: $('.create-contract-company_id').val(),
        period_id: $('.create-contract-period_id').val(),
        contract_supplement_number: $('.create-contract-contract_supplement_number').val(),
        signature_date: $('.create-contract-signature_date').val(),
        effective_time: $('.create-contract-effective_time').val(),
        end_time: $('.create-contract-end_time').val(),
        extension: $(".create-contract-extension").is(":checked") ? 1 : 0,
        total_contract_value: $('.create-contract-total_contract_value').val(),
    };

    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/contract/create',
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

$('.delete-button-contract').on('click', function () {
    var _this = $(this);

    Swal.fire({
        title: 'Bạn có chắc khi thực hiện hành động này?',
        text: 'Xoá hợp đồng được chọn!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Vâng, xoá nó!',
        cancelButtonText: 'Huỷ bỏ'
    }).then((result) => {
        if (result.isConfirmed) {
            var contractId = _this.parents('tr').attr('data-id');
            $.ajax({
                type: 'POST',
                url: '/ajax/contract/delete',
                data: { contractId: contractId },
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

/* ====================================================================== Contract ================================================================================= */
