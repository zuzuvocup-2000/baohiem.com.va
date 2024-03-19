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

            $('#contractSelect').trigger('change')
        }
    });
});


$('#contractSelect').on('change', function () {
    var contract = $(this).val();
    var company = $('#companySelect').val();
    var period = $('#periodSelect').val();
    window.location.href = window.location.pathname + '?company=' + company + '&period=' + period + '&contract=' + contract;
})

$(".daterange").daterangepicker();

$(".singledate").daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    drops: 'up',
});

$('#resetButton').click(function() {
    if (confirm('Bạn có chắc muốn reset không?')) {
        resetFields();
    }
});

function resetFields() {
    $('#tableCreateNewContract tbody input[type="text"]').val('');
}
