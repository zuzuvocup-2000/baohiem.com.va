$(document).ready(function () {
    $('.bg-infor').on('click', function() {
        let _this = $(this)
        var card_body = $('.card-body');
        card_body.find('.info-contract').slideToggle();
    });
});


$('#companySelect').on('change', function () {
    var companyId = $(this).val();

    $.ajax({
        type: 'GET',
        url: '/ajax/period/list',
        data: {
            'company_id': companyId
        },
        success: function (data) {
            $('#periodSelect').empty();

            $.each(data, function (key, value) {
                $('#periodSelectGeneral').append('<option value="' + value.id + '"' + 'data-time-start="01/01/' + value.from_year + '">' + value.period_name + '</option > ');
            });

            $('#periodSelect').trigger('change');
        }
    });
});

$('#periodSelect').on('change', function () {
    var periodId = $(this).val();

    $.ajax({
        type: 'GET',
        url: '/ajax/contract/list',
        data: {
            'period_id': periodId
        },
        success: function (data) {
            $('#contractSelect').empty();

            $.each(data, function (key, value) {
                $('#contractSelect').append('<option value="' + value.id + '">' + value.contract_name + '</option>');
            });
        }
    });
});

// $('#companySelect').trigger('change');
$(document).ready(function() {
    $('.btn-locked').click(function() {
        var selectedIds = [];
        $('.toggleCheckbox:checked').each(function() {
            selectedIds.push($(this).val());
        });
        if (selectedIds.length > 0) {
            $.ajax({
                url: '/ajax/account/locked',
                type: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    ids: selectedIds
                },
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    toastr.error(error.responseJSON.message);
                }
            });
        } else {
            alert('Vui lòng chọn ít nhất một tài khoản!');
        }
    });
});
$(document).ready(function() {
    $('.btn-unlocked').click(function() {
        var selectedIds = [];
        $('.toggleCheckbox:checked').each(function() {
            selectedIds.push($(this).val());
        });
        if (selectedIds.length > 0) {
            $.ajax({
                url: '/ajax/account/unlocked',
                type: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    ids: selectedIds
                },
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    toastr.error(error.responseJSON.message);
                }
            });
        } else {
            alert('Vui lòng chọn ít nhất một tài khoản!');
        }
    });
});
