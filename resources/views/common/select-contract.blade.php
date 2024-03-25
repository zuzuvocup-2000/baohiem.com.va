<div class="form-field">
    <label for="" class="mb-1">Tên hợp đồng</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}" id="{{ isset($id) ? $id : 'contractSelect' }}" name="{{ isset($name) ? $name : 'contract' }}">
        @foreach ($contractList as $contract)
            <option value="{{ $contract->id }}"
                {{ $contractId == $contract->id ? 'selected' : '' }}>
                {{ $contract->contract_name }}
            </option>
        @endforeach
    </select>
</div>
