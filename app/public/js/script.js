$(document).ready(function () {
    // form add new task list
    $('#formAddNewTaskList').on('submit', function (e) {
        e.preventDefault();
        let o_form = $(this);

        $.ajax({
            url: '/ajax/taskList/store/',
            type: 'post',
            data: $(o_form).serialize(),
            beforeSend: function(){
                $(o_form).parent('.modal-body').toggleClass('d-none');
                $(o_form).parent('.modal-body').siblings('.modal-footer.spinners').toggleClass('d-none')
            },
            success: function (msg) {
                $.ajax({
                    url: '/ajax/taskList/',
                    type: 'get',
                    success: function(newList){
                        $('.list-of-taskList').remove();
                        $('.sidebar-head').after(newList);
                    },
                });
            },
            error: function(msg){
                console.log(msg);
            },
            complete: function (msg){
                console.log(msg);
                $(o_form).find('input[name="name"]').val('');
                $(o_form).parent('.modal-body').siblings('.modal-footer.spinners').toggleClass('d-none')
                $(o_form).parent('.modal-body').siblings('.modal-footer.success').toggleClass('d-none');
            }
        });
    });

    // reset form when hidden
    $('#addNewTaskList').on('hidden.bs.modal', function(){
        if($(this).find('.modal-body').hasClass('d-none'))
            $(this).find('.modal-body').toggleClass('d-none');

        if(!$(this).find('.modal-footer.success').hasClass('d-none'))
            $(this).find('.modal-footer.success').toggleClass('d-none');
    })

    $('.btn-pencil').on('click',function(){
        event.preventDefault();

        $('#editTaskList').find('input[name="taskList_id"]').val($(this).data('tasklist-id'));
        $('#editTaskList').find('input[name="name"]').val($(this).siblings('#taskList_name').text());
    });

    $('#formEditTaskList').on('submit', function(){
        event.preventDefault();

        let o_form = $(this);

        console.log($(o_form).serialize());

        $.ajax({
            url: '/ajax/taskList/',
            type: 'patch',
            data: $(o_form).serialize(),
            beforeSend: function(){
                $(o_form).parent('.modal-body').toggleClass('d-none');
                $(o_form).parent('.modal-body').siblings('.modal-footer.spinners').toggleClass('d-none')
            },
            success: function (msg) {
                $.ajax({
                    url: '/ajax/taskList/',
                    type: 'get',
                    success: function(newList){
                        $('.list-of-taskList').remove();
                        $('.sidebar-head').after(newList);
                    },
                });
            },
            error: function(msg){
                console.log(msg);
            },
            complete: function (msg){
                console.log(msg);
                $(o_form).find('input[name="name"]').val('');
                $(o_form).parent('.modal-body').siblings('.modal-footer.spinners').toggleClass('d-none')
                $(o_form).parent('.modal-body').siblings('.modal-footer.success').toggleClass('d-none');
            }
        });
    });

});

// deleting task list
function deleteTaskList($taskList_id, element){
    event.preventDefault();

    let data = new Object();
    data['_token'] = ($(document).find('meta[name="csrf-token"]').attr('content'));
    data['id'] = $taskList_id;

    $.ajax({
        url: '/ajax/taskList/',
        type: 'delete',
        data: data,
        beforeSend: function(){
            $('.sidebar-head-spinner').toggleClass('d-none');
        },
        success: function (msg) {
            $(element).parent().remove();
            if(!$('.sidebar-head-spinner').hasClass('d-none'))
                $('.sidebar-head-spinner').toggleClass('d-none');
        }
    });
}
