$(document).ready(function () {
    $('#companySelectGeneral').on('change', function () {
        var companyId = $(this).val();

        $.ajax({
            type: 'GET',
            url: '/ajax/period/list',
            data: {
                'company_id': companyId
            },
            success: function (data) {
                $('#periodSelectGeneral').empty();

                $.each(data, function (key, value) {
                    $('#periodSelectGeneral').append('<option value="' + value.id + '">' + value.period_name + '</option>');
                });

                $('#periodSelectGeneral').trigger('change');
            }
        });
    });

    $('#periodSelectGeneral').on('change', function () {
        var periodId = $(this).val();

        $.ajax({
            type: 'GET',
            url: '/ajax/contract/list',
            data: {
                'period_id': periodId
            },
            success: function (data) {
                $('#contractSelectGeneral').empty();

                $.each(data, function (key, value) {
                    $('#contractSelectGeneral').append('<option value="' + value.id + '">' + value.contract_name + '</option>');
                });
            }
        });
    });

    $(".toggleAll").on("change", function () {
        $(this).parents('table').find(".toggleCheckbox").prop("checked", $(this).prop("checked"));
    });

    $(".toggleCheckbox").on("change", function () {
        $(this).parents('table').find(".toggleAll").prop("checked", $(this).parents('table').find(".toggleCheckbox:checked").length === $(this).parents('table').find(".toggleCheckbox")
            .length);
    });

    $(document).on('click', '.editButton', function () {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        // Lưu giá trị ban đầu của input trên element
        inputFields.each(function () {
            $(this).attr("data-original-value", $(this).val());
        });
        inputFields.prop("disabled", false);
        $(this).hide();
        row.find(".saveButton, .cancelButton").show();
        row.find(".tabledit-delete-button").hide();
    })

    $(document).on('click', '.saveButton', function () {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        inputFields.prop("disabled", true);
        $(this).hide();
        row.find(".editButton").show();
        row.find(".tabledit-delete-button").show();
        row.find(".cancelButton").hide();
    })

    $(document).on('click', '.cancelButton', function () {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        // Khôi phục giá trị ban đầu của input từ thuộc tính data
        inputFields.each(function () {
            $(this).val($(this).attr("data-original-value"));
        });
        inputFields.prop("disabled", true);
        $(this).hide();
        row.find(".editButton").show();
        row.find(".tabledit-delete-button").show();
        row.find(".saveButton").hide();
    })

    $(document).ready(function () {
        $('.int').trigger('change')
    })

    $(document).on('click', '.float, .int', function () {
        let data = $(this).val();
        if (data == 0) {
            $(this).val('');
        }
    });

    $(document).on('keydown', '.float, .int', function (e) {
        let data = $(this).val();
        if (data == 0) {
            let unicode = e.keyCode || e.which;
            if (unicode != 190) {
                $(this).val('');
            }
        }
    });

    $(document).on('change keyup blur', '.int', function () {
        let data = $(this).val();
        if (data == '') {
            $(this).val('0');
            return false;
        }
        data = data.replace(/\./gi, "");
        $(this).val(addCommas(data));
        data = data.replace(/\./gi, "");
        if (isNaN(data)) {
            $(this).val('0');
            return false;
        }
    });
});

function addCommas(nStr) {
    nStr = String(nStr);
    nStr = nStr.replace(/\./gi, "");
    let str = '';
    for (i = nStr.length; i > 0; i -= 3) {
        a = ((i - 3) < 0) ? 0 : (i - 3);
        str = nStr.slice(a, i) + '.' + str;
    }
    str = str.slice(0, str.length - 1);
    return str;
}

function disabledButtonLoading(_this) {
    _this.attr('disabled', 'disabled')
    _this.find('.default').addClass('d-none')
    _this.find('.loading-dot').removeClass('d-none')
}

function enabledButtonLoading(_this) {
    _this.removeAttr('disabled')
    _this.find('.default').removeClass('d-none')
    _this.find('.loading-dot').addClass('d-none')
}

function formatDate(inputDate) {
    var date = new Date(inputDate);
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var formattedDate = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;
    return formattedDate;
}
