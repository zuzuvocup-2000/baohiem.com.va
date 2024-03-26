<div class="form-field">
    <label for="" class="mb-1">Tên công ty</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}" id="{{ isset($id) ? $id : 'companySelectGeneral' }}" name="{{ isset($name) ? $name : 'company' }}">
        @foreach ($companyList as $company)
            <option value="{{ $company->id }}"
                {{ $companyId == $company->id ? 'selected' : '' }}>
                {{ $company->company_name }}
            </option>
        @endforeach
    </select>
</div>
