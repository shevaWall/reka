$(document).ready(function () {
    // form add new task list
    $('#formAddNewTaskList').on('submit', function (e) {
        e.preventDefault();
        let o_form = $(this);

        $.ajax({
            url: '/ajax/taskList/store/',
            type: 'post',
            data: $(o_form).serialize(),
            beforeSend: function () {
                $(o_form).parent('.modal-body').toggleClass('d-none');
                $(o_form).parent('.modal-body').siblings('.modal-footer.spinners').toggleClass('d-none')
            },
            success: function (msg) {
                $.ajax({
                    url: '/ajax/taskList/',
                    type: 'get',
                    success: function (newList) {
                        $('.list-of-taskList').remove();
                        $('.sidebar-head').after(newList);
                    },
                });
            },
            error: function (msg) {
                console.log(msg);
            },
            complete: function (msg) {
                console.log(msg);
                $(o_form).find('input[name="name"]').val('');
                $(o_form).parent('.modal-body').siblings('.modal-footer.spinners').toggleClass('d-none')
                $(o_form).parent('.modal-body').siblings('.modal-footer.success').toggleClass('d-none');
            }
        });
    });

    // reset form when hidden
    $('#addNewTaskList, #editTaskList').on('hidden.bs.modal', function () {
        if ($(this).find('.modal-body').hasClass('d-none'))
            $(this).find('.modal-body').toggleClass('d-none');

        if (!$(this).find('.modal-footer.alerts .alert-success').hasClass('d-none'))
            $(this).find('.modal-footer.alerts .alert-success').toggleClass('d-none');

        if (!$(this).find('.modal-footer.alerts .alert-danger').hasClass('d-none'))
            $(this).find('.modal-footer.alerts .alert-danger').toggleClass('d-none');
    })

    $('#formEditTaskList').on('submit', function () {
        event.preventDefault();
        let o_form = $(this);
        let modal_body = $(o_form).parent('.modal-body');
        let spinners = $(modal_body).siblings('.modal-footer.spinners');
        let alert_error = $(modal_body).siblings('.modal-footer.alerts').find('.alert-danger');
        let alert_success = $(modal_body).siblings('.modal-footer.alerts').find('.alert-success');

        $.ajax({
            url: '/ajax/taskList/',
            type: 'patch',
            data: $(o_form).serialize(),
            beforeSend: function () {
                $(modal_body).toggleClass('d-none');
                $(spinners).toggleClass('d-none');
            },
            success: function (msg) {
                if ($(alert_success).hasClass('d-none'))
                    $(alert_success).toggleClass('d-none');

                $.ajax({
                    url: '/ajax/taskList/',
                    type: 'get',
                    success: function (newList) {
                        $('.list-of-taskList').remove();
                        $('.sidebar-head').after(newList);
                    },
                });
            },
            error: function (msg) {
                if ($(alert_error).hasClass('d-none'))
                    $(alert_error).toggleClass('d-none');
            },
            complete: function (msg) {
                $(spinners).toggleClass('d-none')
            }
        });
    });

});

// deleting task list
function deleteTaskList($taskList_id, element) {
    event.preventDefault();

    let data = new Object();
    data['_token'] = ($(document).find('meta[name="csrf-token"]').attr('content'));
    data['id'] = $taskList_id;

    $.ajax({
        url: '/ajax/taskList/',
        type: 'delete',
        data: data,
        beforeSend: function () {
            $('.sidebar-head-spinner').toggleClass('d-none');
        },
        success: function (msg) {
            $(element).parent().remove();
            if (!$('.sidebar-head-spinner').hasClass('d-none'))
                $('.sidebar-head-spinner').toggleClass('d-none');
        }
    });
}

function showEditForm(element, id) {
    event.preventDefault();
    let o_form = $('#editTaskList');
    let input_id = $(o_form).find('input[name="taskList_id"]');
    let input_name = $(o_form).find('input[name="name"]');
    let name = $(element).siblings('#taskList_name').text();

    $(input_id).val(id);
    $(input_name).val(name);
}
