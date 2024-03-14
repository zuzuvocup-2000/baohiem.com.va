$(document).ready(function () {
    $('.showDoctorInput').on('click', function () {
        var currentTab = $(this).closest('.tab-pane');
        currentTab.find('.doctor-name').show();
    });
    $('.addDoctor').on('click', function () {
        var currentTab = $(this).closest('.tab-pane');
        var doctorNameInput = currentTab.find('.doctorNameInput');
        var doctorSelect = currentTab.find('.doctorSelect');

        var doctorName = doctorNameInput.val().trim();
        if (doctorName !== '') {
            var option = $('<option>', { value: doctorName, text: doctorName });
            doctorSelect.append(option);
            doctorNameInput.val('');
            currentTab.find('.doctor-name').hide();
        } else {
            alert('Vui lòng nhập tên bác sĩ!');
        }
    });
    $('.editDoctor').on('click', function () {
        var currentTab = $(this).closest('.tab-pane');
        var doctorSelect = currentTab.find('.doctorSelect');
        var selectedOption = doctorSelect.find(':selected');

        if (selectedOption.length > 0) {
            var editedName = prompt('Nhập tên bác sĩ mới:', selectedOption.text());
            if (editedName !== null) {
                selectedOption.text(editedName);
            }
        } else {
            alert('Vui lòng chọn một bác sĩ để sửa!');
        }
    });
});