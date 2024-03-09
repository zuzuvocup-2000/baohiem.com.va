<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-0">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="font-weight-medium ">{{ $breadcrumbTitle }}</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-primary text-decoration-none" href="/">Trang chủ
                            </a>
                        </li>
                        <li class="breadcrumb-item d-flex justify-content-center align-items-center ps-0">
                            <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">{{ $breadcrumbTitle }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
