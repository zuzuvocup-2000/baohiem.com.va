<div class="modal fade" id="contentPaymentModal" tabindex="-1" aria-labelledby="contentPaymentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contentPaymentModalLabel">Thao tác nội dung chi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Lựa chọn Thêm, Sửa, Xóa -->
                <div class="mb-3 d-flex">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="actionType" id="addAction" value="add"
                            checked>
                        <label class="form-check-label" for="addAction">
                            Thêm
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="actionType" id="editAction" value="edit">
                        <label class="form-check-label" for="editAction">
                            Sửa
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="actionType" id="deleteAction"
                            value="delete">
                        <label class="form-check-label" for="deleteAction">
                            Xóa
                        </label>
                    </div>
                </div>

                <!-- Input tên khi thêm -->
                <div class="mb-3" id="addSection">
                    <label for="addName" class="form-label">Tên nội dung chi</label>
                    <input type="text" class="form-control" id="addName" placeholder="Nhập tên nội dung chi">
                </div>

                <!-- Dropdown chọn nội dung chi khi xóa -->
                <div class="mb-3 d-none" id="deleteSection">
                    <label for="deleteContent" class="form-label">Chọn nội dung chi để xóa</label>
                    <select class="form-select" id="deleteContent">
                        @foreach ($paymentTypeList as $paymentType)
                            <option value="{{ $paymentType['id'] }}">{{ $paymentType['payment_type_name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Sửa tên nội dung chi -->
                <div class="mb-3 d-none" id="editSection">
                    <label for="editContent" class="form-label">Chọn nội dung chi để sửa</label>
                    <select class="form-select" id="editContent">
                        @foreach ($paymentTypeList as $paymentType)
                            <option value="{{ $paymentType['id'] }}">{{ $paymentType['payment_type_name'] }}</option>
                        @endforeach
                    </select>

                    <label for="editName" class="form-label mt-3">Sửa tên</label>
                    <input type="text" class="form-control" id="editName" placeholder="Nhập tên mới" value="{{ $paymentTypeList[0]['payment_type_name'] }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="saveContentPayment">Lưu</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Lắng nghe sự kiện thay đổi radio button
        $('input[name="actionType"]').change(function() {
            var actionType = $(this).val();
            handleActionTypeChange(actionType);
        });

        // Lắng nghe sự kiện thay đổi dropdown ở phần sửa
        $('#editContent').change(function() {
            var selectedText = $(this).find('option:selected').text();
            $('#editName').val(selectedText); // Cập nhật text vào ô input
        });

        // Hàm xử lý hiển thị các phần theo lựa chọn
        function handleActionTypeChange(actionType) {
            // Ẩn tất cả các phần
            $('#addSection').addClass('d-none');
            $('#deleteSection').addClass('d-none');
            $('#editSection').addClass('d-none');

            // Hiển thị phần tương ứng
            if (actionType === 'add') {
                $('#addSection').removeClass('d-none');
            } else if (actionType === 'edit') {
                $('#editSection').removeClass('d-none');
            } else if (actionType === 'delete') {
                $('#deleteSection').removeClass('d-none');
            }
        }

        // Mặc định khi mở modal là phần Thêm
        handleActionTypeChange('add');

        // Xử lý sự kiện lưu dữ liệu
        $('#saveContentPayment').click(function() {
            var actionType = $('input[name="actionType"]:checked').val();

            if (actionType === 'add') {
                handleAddAction();
            } else if (actionType === 'edit') {
                handleEditAction();
            } else if (actionType === 'delete') {
                handleDeleteAction();
            }
        });

        function handleAddAction() {
            var addName = $('#addName').val();
            if (addName === '') {
                toastr.error('Vui lòng nhập tên nội dung chi!');
                return;
            }

            // Gửi yêu cầu AJAX để thêm nội dung chi
            $.ajax({
                url: '/ajax/payment-type/add',
                method: 'POST',
                data: {
                    name: addName,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        $('#contentPaymentModal').modal('hide');
                        setTimeout(() => {
                            window.location.reload()
                        }, 500);
                    }
                },
                error: function(xhr) {
                    toastr.error('Có lỗi xảy ra khi thêm nội dung chi!');
                }
            });
        }

        function handleEditAction() {
            var editContent = $('#editContent').val();
            var editName = $('#editName').val();
            if (editName === '') {
                toastr.error('Vui lòng nhập tên mới!');
                return;
            }

            // Gửi yêu cầu AJAX để sửa nội dung chi
            $.ajax({
                url: '/ajax/payment-type/edit',
                method: 'POST',
                data: {
                    id: editContent,
                    name: editName,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        $('#contentPaymentModal').modal('hide');
                        setTimeout(() => {
                            window.location.reload()
                        }, 500);
                    }
                },
                error: function(xhr) {
                    toastr.error('Có lỗi xảy ra khi sửa nội dung chi!');
                }
            });
        }

        // Hàm xử lý logic "Xóa"
        function handleDeleteAction() {
            var deleteContent = $('#deleteContent').val();

            // Xác nhận với SweetAlert trước khi xóa
            Swal.fire({
                title: 'Bạn có chắc chắn?',
                text: "Bạn sẽ không thể hoàn tác hành động này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, xóa nó!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Gửi yêu cầu AJAX để xóa nội dung chi
                    $.ajax({
                        url: '/ajax/payment-type/delete',
                        method: 'POST',
                        data: {
                            id: deleteContent,
                            _token: $('meta[name="csrf-token"]').attr(
                                'content')
                        },
                        success: function(response) {
                            if (response.success) {
                                toastr.success(response.message);
                                $('#contentPaymentModal').modal('hide');
                                setTimeout(() => {
                                    window.location.reload()
                                }, 500);
                            }
                        },
                        error: function(xhr) {
                            toastr.error('Có lỗi xảy ra khi xóa nội dung chi!');
                        }
                    });
                } else {
                    // Nếu người dùng hủy, mở lại modal
                    $('#contentPaymentModal').modal('show');
                }
            });

            // Ẩn modal khi SweetAlert hiển thị
            $('#contentPaymentModal').modal('hide');
        }
    });
</script>
