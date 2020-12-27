function load_data(url) {
    $('#overlay').removeClass('hidden');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#overlay').addClass('hidden');
            $('#table-list').empty();
            $('#table-list').append(data.view);
        },
    });
}

function change_status(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: url_active,
        data: {
            'id': id
        },
        success: function (data) {
            $('#overlay').addClass('hidden');
            $('#table-list').empty();
            $('#table-list').append(data.view);
            toastr.success("Cập nhật thành công", 'Thành công');
        },
        error: function (data) {
            toastr.error("Có lỗi xảy ra, liên hệ với quản trị viên", 'Thành công');
        }
    });
}

function delete_policy(id) {
    Swal.fire({
        title: 'Bạn chắc chắn muốn xoá?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: url_delete,
                data: {
                    'id': id
                },
                success: function (data) {
                    $('#overlay').addClass('hidden');
                    $('#table-list').empty();
                    $('#table-list').append(data.view);
                    toastr.success("Xoá thành công", 'Thành công');
                },
                error: function (data) {
                    toastr.success("Có lỗi xảy ra, liên hệ với quản trị viên", 'Thành công');
                }
            });
        }
    })

}
