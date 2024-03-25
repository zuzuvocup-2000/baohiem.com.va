<div class="form-field">
    <label for="" class="mb-1">Niên hạn</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}" id="{{ isset($id) ? $id : 'periodSelect' }}" name="{{ isset($name) ? $name : 'period' }}">
        @foreach ($periodList as $period)
            <option value="{{ $period->id }}"
                {{ $periodId == $period->id ? 'selected' : '' }}>
                {{ $period->period_name }}
            </option>
        @endforeach
    </select>
</div>
