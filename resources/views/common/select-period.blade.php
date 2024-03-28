<?php
$strAttr = '';
if (isset($attr) && is_array($attr) && count($attr)) {
    foreach ($attr as $key => $value) {
        $strAttr .= $key . '=' . '' . $value . ' ';
    }
}
?>
<div class="form-field">
    <label for="" class="mb-1">Niên hạn</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}"
        id="{{ isset($id) ? $id : 'periodSelectGeneral' }}" name="{{ isset($name) ? $name : 'period' }}"
        {{ $strAttr }}>
        @foreach ($periodList as $period)
            <option value="{{ $period->id }}" {{ $periodId == $period->id ? 'selected' : '' }} data-time-start="{{ "01/01/".$period->from_year }}">
                {{ $period->period_name }}
            </option>
        @endforeach
    </select>
</div>
