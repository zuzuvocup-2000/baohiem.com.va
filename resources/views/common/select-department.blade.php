<div class="form-field">
    <label for="" class="mb-1">Tên phòng ban</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}"
        id="{{ isset($id) ? $id : 'departmentSelectGeneral' }}" name="{{ isset($name) ? $name : 'department' }}">
        @foreach ($departmentList as $department)
            <option value="{{ $department->id }}" {{ $departmentId == $department->id ? 'selected' : '' }}>
                {{ $department->department_name }}
            </option>
        @endforeach
    </select>
</div>
