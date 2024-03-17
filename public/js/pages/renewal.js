
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
                $('#periodSelect').append('<option value="' + value.id + '">' + value.period_name + '</option>');
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

