$(document).ready(function() {
    var checkbox = $("#success2-check");
    var companySelect = $("#companySelectGeneral");
    var contractSelect = $("#contractSelectGeneral");

    // Disable/Enable company select and contract select based on checkbox state
    function toggleSelects() {
        if (checkbox.prop("checked")) {
            companySelect.prop("disabled", true);
            contractSelect.prop("disabled", true);
        } else {
            companySelect.prop("disabled", false);
            contractSelect.prop("disabled", false);
        }
    }

    // Initial state
    toggleSelects();

    // Add event listener to checkbox
    checkbox.change(function() {
        toggleSelects();
    });
});
$(document).ready(function() {
    $('#periodSelectGeneral option').each(function() {
        var periodText = $(this).text().trim(); 
        var startDate, endDate;
        var matches = periodText.match(/\d{4}/); 
        if (matches) {
            var year = matches[0];
            startDate = '01/01/' + year;
            endDate = getCurrentDate(); 
        }
        $(this).attr('data-time', startDate + ' - ' + endDate);
    });

    $('#periodSelectGeneral').change(function() {
        var selectedOption = $(this).find('option:selected');
        var timeRange = selectedOption.attr('data-time');
        var startDate = timeRange.split(' - ')[0]; 
        var currentDate = getCurrentDate();
        var combinedDate = startDate + ' - ' + currentDate
        $('#dateInput').val(combinedDate);
    });
    var initialPeriodOption = $('#periodSelectGeneral option:selected');
    var initialTimeRange = initialPeriodOption.attr('data-time');
    var initialStartDate = initialTimeRange.split(' - ')[0];
    var initialCurrentDate = getCurrentDate();
    var initialCombinedDate = initialStartDate + ' - ' + initialCurrentDate;
    $('#dateInput').val(initialCombinedDate);
});

function getCurrentDate() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    return dd + '/' + mm + '/' + yyyy;
}
