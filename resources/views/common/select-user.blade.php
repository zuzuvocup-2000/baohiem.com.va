<div class="form-field">
    <label for="" class="mb-1">Tên tài khoản</label>
    <select class="form-select mr-sm-2 {{ isset($class) ? $class : '' }}"
        id="{{ isset($id) ? $id : 'userSelectGeneral' }}" name="{{ isset($name) ? $name : 'user' }}">
        @foreach ($userListByDepartment as $user)
            <option value="{{ $user->id }}" {{ $userId == $user->id ? 'selected' : '' }}>
                {{ $user->username }}
            </option>
        @endforeach
    </select>
</div>
