<ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab"
    role="tablist">
    <li class="nav-item" role="presentation">
        <a href="{{ route('insuranceExpenses.index') }}"
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 <?php echo (Request::url() == route('insuranceExpenses.index')) ? 'active' : ''; ?>"
            >
            <span class="d-none d-md-block">Bảo hiểm chi</span>
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('insuranceExpenses.day') }}"
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 <?php echo (Request::url() == route('insuranceExpenses.day')) ? 'active' : ''; ?>"
            >
            <span class="d-none d-md-block">Chi trong ngày</span>
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('insuranceExpenses.hospital') }}"
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 <?php echo (Request::url() == route('insuranceExpenses.hospital')) ? 'active' : ''; ?>"
            >
            <span class="d-none d-md-block">Chi theo bệnh viện</span>
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('insuranceExpenses.diary') }}"
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 <?php echo (Request::url() == route('insuranceExpenses.diary')) ? 'active' : ''; ?>"
            >
            <span class="d-none d-md-block">Nhật ký thao tác</span>
        </a>
    </li>
</ul>
