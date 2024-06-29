<div class="form-field">
    <label for="" class="mb-1">Thời gian hiệu lực từ:</label>
    <div class="input-group">
        <input type="text" class="form-control daterange" id="dateInput" name="time_range"
            value="{{ request()->time_range }}">
        <span class="input-group-text">
            <i class="ti ti-calendar fs-5"></i>
        </span>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#periodSelectGeneral').change(function() {
            var selectedOption = $(this).find('option:selected');
            var startDate = selectedOption.attr('data-time-start') || getCurrentDate();
            var currentDate = getCurrentDate();
            var combinedDate = startDate + ' - ' + currentDate
            $('#dateInput').val(combinedDate);
        });
    });

    function getCurrentDate() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        return dd + '/' + mm + '/' + yyyy;
    }
</script>
