<div class="form-field">
    <label for="" class="mb-1">Tên bệnh viện</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}" id="{{ isset($id) ? $id : 'hospitalSelectGeneral' }}" name="{{ isset($name) ? $name : 'hospital' }}">
        @foreach ($hospitalList as $hospital)
            <option value="{{ $hospital->id }}"
                {{ $hospitalId == $hospital->id ? 'selected' : '' }}>
                {{ $hospital->hospital_name }}
            </option>
        @endforeach
    </select>
</div>
