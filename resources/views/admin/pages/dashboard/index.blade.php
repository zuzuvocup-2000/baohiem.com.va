@extends('admin.layouts.master')

@section('title', 'Trang chủ')

@section('content')
    {{-- @include('admin.partial.breadcrumb', ['breadcrumbTitle' => 'Trang chủ']) --}}
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card w-100 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <h1 class="fw-bold mb-0">$6,890.68</h1>
                            <span>Overview of email campaigns</span>
                        </div>
                        <div class="ms-auto">
                            <iconify-icon icon="solar:wallet-linear" class="text-primary display-5">
                            </iconify-icon>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non pharetra
                        ligula, sit amet laoreet arcu.Integer.
                    </p>
                    <a href="javascript: void(0)" class="fw-bold">Last Month Summary</a>
                </div>
                <div class="mt-5">
                    <div class="overview-campaign "></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card w-100">
                        <div class="card-body">
                            <h4 class="card-title">Total Visits</h4>
                            <h4 class="fw-bold mt-3 mb-2">3,25,346</h4>
                            <h5 class="card-subtitle mb-0">Total Earnings of the Month</h5>
                        </div>
                        <div class="text-center mt-2">
                            <div class="total-visits mx-auto" style="max-width: 250px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sales Ratio</h4>
                            <h4 class="fw-bold mt-3 mb-2">35,658</h4>
                            <h5 class="card-subtitle mb-0">Total Earnings of the Month</h5>
                        </div>
                        <div class="sales-ratio mt-2"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card order-widget w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-8">
                                    <h4 class="card-title">Order Status</h4>
                                    <h5 class="card-subtitle mb-0">Total Earnings of the Month</h5>
                                    <div class="row mt-5">
                                        <div class="col-4 border-end">
                                            <iconify-icon icon="ri-checkbox-blank-circle-fill"
                                                class="fs-4 text-cyan"></iconify-icon>
                                            <h3 class="mb-0 font-medium">5489</h3>
                                            <span>Success</span>
                                        </div>
                                        <div class="col-4 border-end">
                                            <iconify-icon icon="ri-checkbox-blank-circle-fill"
                                                class="fs-4 text-orange"></iconify-icon>
                                            <h3 class="mb-0 font-medium">954</h3>
                                            <span>Pending</span>
                                        </div>
                                        <div class="col-4">
                                            <iconify-icon icon="ri-checkbox-blank-circle-fill"
                                                class="fs-4 text-info"></iconify-icon>
                                            <h3 class="mb-0 font-medium">736</h3>
                                            <span>Failed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                                    <div class="order-status mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            <div class="card overflow-hidden w-100">
                <div class="card-body bg-info">
                    <h4 class="card-title text-white">Revenue Statistics</h4>
                    <div class="d-flex align-items-center mt-4">
                        <div class="revenue"></div>
                        <div class="ms-auto">
                            <h2 class="text-white mb-0">
                                <iconify-icon icon="solar:arrow-up-outline"></iconify-icon>$351
                            </h2>
                            <span class="text-white op-5">Jan 10 - Jan 20</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="card overflow-hidden w-100">
                <div class="bg-cyan">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title text-white">Page Views</h4>
                                <h2 class="text-white mb-0">
                                    <iconify-icon icon="solar:arrow-up-outline"></iconify-icon> 6548
                                </h2>
                            </div>
                            <div class="ms-auto">
                                <ul class="list-style-none mb-0">
                                    <li class="text-white">
                                        <iconify-icon icon="ri:checkbox-blank-circle-fill"
                                            class="
                                        me-1
                                        fs-4
                                        text-white
                                        opacity-50
                                        fs-2
                                        align-middle
                                      "></iconify-icon>
                                        Visit
                                    </li>
                                    <li class="text-white">
                                        <iconify-icon icon="ri:checkbox-blank-circle-fill"
                                            class="
                                        me-1
                                        fs-4
                                        text-white
                                        fs-2
                                        align-middle
                                      "></iconify-icon>
                                        Page Views
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 page-views pt-1"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="card w-100">
                <div class="card-body">
                    <h2 class="mb-0">56.33%</h2>
                    <span class="">Bounce Rate</span>
                    <div class="d-flex align-items-center mt-4 pt-2">
                        <div class="dl">
                            <select class="form-select">
                                <option value="0" selected="">March</option>
                                <option value="1">April</option>
                                <option value="2">May</option>
                                <option value="3">June</option>
                            </select>
                        </div>
                        <div class="ms-auto">
                            <div class="bounce-rate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Projects of the Month</h4>
                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                        </div>
                        <div class="ms-auto d-flex no-block align-items-center">
                            <div class="dl">
                                <select class="form-select">
                                    <option value="0" selected="">Monthly</option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0">Team Lead</th>
                                    <th class="border-0">Project</th>
                                    <th class="border-0">Team</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0">Weeks</th>
                                    <th class="border-0">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex no-block align-items-center">
                                            <div class="me-3">
                                                <img src="/assets/images/profile/user-1.jpg" alt="user"
                                                    class="rounded-circle" width="45">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0 ">Hanna Gover</h6>
                                                <span class="text-muted">hgover@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Elite Admin</td>
                                    <td>
                                        <div class="popover-icon">
                                            <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                            <a class="btn-circle btn btn-cyan text-white popover-item"
                                                href="javascript:void(0)">DS</a>
                                            <a class="btn-circle btn p-0 popover-item" href="javascript:void(0)"><img
                                                    src="/assets/images/profile/user-2.jpg" class="rounded-circle"
                                                    width="39" alt=""></a>
                                            <a class="btn-circle btn btn-outline-secondary"
                                                href="javascript:void(0)">+</a>
                                        </div>
                                    </td>
                                    <td>
                                        <iconify-icon icon="ri:circle-fill" class="text-orange fs-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="In Progress"></iconify-icon>
                                    </td>
                                    <td>35</td>
                                    <td class="">$96K</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex no-block align-items-center">
                                            <div class="me-3">
                                                <img src="/assets/images/profile/user-2.jpg" alt="user"
                                                    class="rounded-circle" width="45">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0 ">Daniel Kristeen</h6>
                                                <span class="text-muted">Kristeen@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Real Homes</td>
                                    <td>
                                        <div class="popover-icon">
                                            <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                            <a class="btn-circle btn btn-primary text-white popover-item"
                                                href="javascript:void(0)">DS</a>
                                            <a class="btn-circle btn btn-outline-secondary"
                                                href="javascript:void(0)">+</a>
                                        </div>
                                    </td>
                                    <td>
                                        <iconify-icon icon="ri:circle-fill" class="text-success fs-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Active"></iconify-icon>
                                    </td>
                                    <td>35</td>
                                    <td class="">$96K</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex no-block align-items-center">
                                            <div class="me-3">
                                                <img src="/assets/images/profile/user-3.jpg" alt="user"
                                                    class="rounded-circle" width="45">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0 ">Julian Josephs</h6>
                                                <span class="text-muted">Josephs@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>MedicalPro Theme</td>
                                    <td>
                                        <div class="popover-icon">
                                            <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                            <a class="btn-circle btn btn-cyan text-white popover-item"
                                                href="javascript:void(0)">DS</a>
                                            <a class="btn-circle btn btn-orange text-white popover-item"
                                                href="javascript:void(0)">RP</a>
                                            <a class="btn-circle btn btn-outline-secondary"
                                                href="javascript:void(0)">+</a>
                                        </div>
                                    </td>
                                    <td>
                                        <iconify-icon icon="ri:circle-fill" class="text-success fs-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Active"></iconify-icon>
                                    </td>
                                    <td>35</td>
                                    <td class="">$96K</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex no-block align-items-center">
                                            <div class="me-3">
                                                <img src="/assets/images/profile/user-4.jpg" alt="user"
                                                    class="rounded-circle" width="45">
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0 ">Jan Petrovic</h6>
                                                <span class="text-muted">hgover@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">MedicalPro Theme</td>
                                    <td>
                                        <div class="popover-icon">
                                            <a class="btn-circle btn btn-orange text-white"
                                                href="javascript:void(0)">RP</a>
                                            <a class="btn-circle btn btn-outline-secondary"
                                                href="javascript:void(0)">+</a>
                                        </div>
                                    </td>
                                    <td>
                                        <iconify-icon icon="ri:circle-fill" class="text-orange fs-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="In Progress"></iconify-icon>
                                    </td>
                                    <td>35</td>
                                    <td class="">$96K</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="comment-widgets scrollable" style="height: 530px;" data-simplebar="">
                    <div class="d-flex flex-row comment-row mt-0">
                        <div class="px-2 py-0 ">
                            <img src="/assets/images/profile/user-5.jpg" alt="user" width="45"
                                class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="fw-medium mb-1">James Anderson</h6>
                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                and type setting
                                industry.
                            </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                <span class="badge bg-primary rounded-pill">Pending</span>
                                <span class="action-icons d-flex">
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:check-square-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:heart-linear"
                                            class="iconify-sm text-danger"></iconify-icon>
                                    </a>
                                </span>
                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row comment-row">
                        <div class="px-2 py-0">
                            <img src="/assets/images/profile/user-6.jpg" alt="user" width="45"
                                class="rounded-circle">
                        </div>
                        <div class="comment-text active w-100">
                            <h6 class="fw-medium mb-1">Michael Jorden</h6>
                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                and type setting
                                industry.
                            </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                <span class="badge bg-success rounded-pill">Approved</span>
                                <span class="action-icons d-flex">
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:close-square-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:heart-linear"
                                            class="iconify-sm text-danger"></iconify-icon>
                                    </a>
                                </span>
                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row comment-row">
                        <div class="px-2 py-0">
                            <img src="/assets/images/profile/user-1.jpg" alt="user" width="45"
                                class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="fw-medium mb-1">Johnathan Doeting</h6>
                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                and type setting
                                industry.
                            </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                <span class="badge rounded-pill bg-danger">Rejected</span>
                                <span class="action-icons d-flex">
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:check-square-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:heart-linear"
                                            class="iconify-sm text-danger"></iconify-icon>
                                    </a>
                                </span>
                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row comment-row">
                        <div class="px-2 py-0">
                            <img src="/assets/images/profile/user-2.jpg" alt="user" width="45"
                                class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="fw-medium mb-1">James Anderson</h6>
                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                and type setting
                                industry.
                            </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                <span class="badge rounded-pill bg-primary">Pending</span>
                                <span class="action-icons d-flex">
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:check-square-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:heart-linear"
                                            class="iconify-sm text-danger"></iconify-icon>
                                    </a>
                                </span>
                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row comment-row">
                        <div class="px-2 py-0">
                            <img src="/assets/images/profile/user-4.jpg" alt="user" width="45"
                                class="rounded-circle">
                        </div>
                        <div class="comment-text active w-100">
                            <h6 class="fw-medium mb-1">Michael Jorden</h6>
                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                and type setting
                                industry.
                            </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                <span class="badge bg-success rounded-pill">Approved</span>
                                <span class="action-icons d-flex">
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:close-square-line-duotone"
                                            class="iconify-sm"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex">
                                        <iconify-icon icon="solar:heart-linear"
                                            class="iconify-sm text-danger"></iconify-icon>
                                    </a>
                                </span>
                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Chats</h4>
                    <div class="chat-box scrollable position-relative w-100" style="height: 450px;" data-simplebar="">
                        <ul class="chat-list">
                            <li class="chat-item">
                                <div class="chat-img">
                                    <img src="/assets/images/profile/user-3.jpg" alt="user">
                                </div>
                                <div class="chat-content">
                                    <h6 class="fw-medium">James Anderson</h6>
                                    <div class="box bg-secondary-subtle rounded">
                                        Lorem Ipsum is simply dummy text of the printing &amp; type
                                        setting
                                        industry.
                                    </div>
                                </div>
                                <div class="chat-time">10:56 am</div>
                            </li>
                            <li class="chat-item">
                                <div class="chat-img">
                                    <img src="/assets/images/profile/user-2.jpg" alt="user">
                                </div>
                                <div class="chat-content">
                                    <h6 class="fw-medium">Bianca Doe</h6>
                                    <div class="box bg-secondary-subtle">It’s Great opportunity to work.
                                    </div>
                                </div>
                                <div class="chat-time">10:57 am</div>
                            </li>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-info rounded">I would love to join the team.
                                    </div>
                                    <br>
                                </div>
                            </li>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-info rounded">Whats budget of the new project.
                                    </div>
                                    <br>
                                </div>
                                <div class="chat-time">10:59 am</div>
                            </li>
                            <li class="chat-item">
                                <div class="chat-img">
                                    <img src="/assets/images/profile/user-5.jpg" alt="user">
                                </div>
                                <div class="chat-content">
                                    <h6 class="fw-medium">Angelina Rhodes</h6>
                                    <div class="box bg-secondary-subtle rounded">Well we have good
                                        budget for the project</div>
                                </div>
                                <div class="chat-time">11:00 am</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-9">
                            <div class="input-field mt-0 mb-0">
                                <input type="text" id="textarea1" placeholder="Type and enter"
                                    class="form-control border-0">
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <a class="btn-circle btn-lg btn-primary btn text-white" href="javascript:void(0)">
                                <iconify-icon icon="solar:plain-3-line-duotone"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="/assets/js/dashboards/dashboard7.js"></script>
@endsection
