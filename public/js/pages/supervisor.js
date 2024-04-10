$(document).ready(function() {
    $('.btn-recover').click(function() {
        var selectedIds = [];
        $('.toggleCheckbox:checked').each(function() {
            selectedIds.push($(this).val());
        });
        if (selectedIds.length > 0) {
            $.ajax({
                url: '/ajax/supervisor/recover',
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
                        $('.toggleCheckbox:checked').each(function() {
                            $(this).closest('tr').remove();
                        });
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    toastr.error(error.responseJSON.message);
                }
            });
        } else {
            alert('Vui lòng chọn ít nhất một Chi bảo hiểm!');
        }
    });
});
$(document).ready(function() {
    $('.btn-recover-account').click(function() {
        var selectedIds = [];
        $('.toggleCheckbox:checked').each(function() {
            selectedIds.push($(this).val());
        });
        if (selectedIds.length > 0) {
            $.ajax({
                url: '/ajax/supervisor/recover-account',
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
            alert('Vui lòng chọn ít nhất một Chi bảo hiểm!');
        }
    });
});