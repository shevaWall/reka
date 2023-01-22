$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    // todo: optimaze two ajax forms
    // form add new task list
    $('#formAddNewTaskList').on('submit', function (e) {
        e.preventDefault();
        let o_form = $(this);
        let modal_body = $(o_form).parent('.modal-body');
        let spinners = $(modal_body).siblings('.modal-footer.spinners');
        let alert_error = $(modal_body).siblings('.modal-footer.alerts').find('.alert-danger');
        let alert_success = $(modal_body).siblings('.modal-footer.alerts').find('.alert-success');

        $.ajax({
            url: '/ajax/taskList/store/',
            type: 'post',
            data: $(o_form).serialize(),
            beforeSend: function () {
                $(modal_body).toggleClass('d-none');
                $(spinners).toggleClass('d-none')
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

    // reset form when hidden
    $('#addNewTaskList, #editTaskList, #addNewListItem, #editListItem').on('hidden.bs.modal', function () {
        if ($(this).find('.modal-body').hasClass('d-none'))
            $(this).find('.modal-body').toggleClass('d-none');

        if (!$(this).find('.modal-footer.alerts .alert-success').hasClass('d-none'))
            $(this).find('.modal-footer.alerts .alert-success').toggleClass('d-none');

        if (!$(this).find('.modal-footer.alerts .alert-danger').hasClass('d-none'))
            $(this).find('.modal-footer.alerts .alert-danger').toggleClass('d-none');

        $(this).find('.tags-wrapper').children().remove();
    })

    $('#formEditTaskList').on('submit', function () {
        event.preventDefault();
        let o_form = $(this);
        let form_modal_body = $(o_form).parent('.modal-body');
        let form_spinners = $(form_modal_body).siblings('.modal-footer.spinners');
        let form_alert_error = $(form_modal_body).siblings('.modal-footer.alerts').find('.alert-danger');
        let form_alert_success = $(form_modal_body).siblings('.modal-footer.alerts').find('.alert-success');

        $.ajax({
            url: '/ajax/taskList/',
            type: 'patch',
            data: $(o_form).serialize(),
            beforeSend: function () {
                $(form_modal_body).toggleClass('d-none');
                $(form_spinners).toggleClass('d-none');
            },
            success: function (msg) {
                if ($(form_alert_success).hasClass('d-none'))
                    $(form_alert_success).toggleClass('d-none');

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
                if ($(form_alert_error).hasClass('d-none'))
                    $(form_alert_error).toggleClass('d-none');
            },
            complete: function (msg) {
                $(form_spinners).toggleClass('d-none')
            }
        });
    });

    $('#formAddNewListItem').on('submit', function () {
        event.preventDefault();

        let o_form = $(this);
        let modal_body = $(o_form).parent('.modal-body');
        let spinners = $(modal_body).siblings('.modal-footer.spinners');
        let alert_error = $(modal_body).siblings('.modal-footer.alerts').find('.alert-danger');
        let alert_success = $(modal_body).siblings('.modal-footer.alerts').find('.alert-success');
        let formData = new FormData(this);

        $.ajax({
            async: true,
            url: '/ajax/listItems/',
            type: 'post',
            contentType: false,
            data: formData,
            cache: false,
            processData: false,
            beforeSend: function () {
                $(modal_body).toggleClass('d-none');
                $(spinners).toggleClass('d-none');
            },
            success: function (msg) {
                if ($(alert_success).hasClass('d-none'))
                    $(alert_success).toggleClass('d-none');

                loadTaskListItems($(o_form).find('input[name="task_list_id"]').val());
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

    $('#formEditListItem').on('submit',function(){
        event.preventDefault();
        let o_form = $(this);
        let formData = new FormData(this);
        let modal_body = $(o_form).parent('.modal-body');
        let spinners = $(modal_body).siblings('.modal-footer.spinners');
        let alert_error = $(modal_body).siblings('.modal-footer.alerts').find('.alert-danger');
        let alert_success = $(modal_body).siblings('.modal-footer.alerts').find('.alert-success');

        formData.append('ajax_method', 'PATCH');
        $.ajax({
            async: true,
            url: '/ajax/listItems/',
            type: 'post',
            contentType: false,
            data: formData,
            cache: false,
            processData: false,
            beforeSend: function () {
                $(modal_body).toggleClass('d-none');
                $(spinners).toggleClass('d-none');
            },
            success: function (msg) {
                if ($(alert_success).hasClass('d-none'))
                    $(alert_success).toggleClass('d-none');

                loadTaskListItems($(o_form).find('input[name="task_list_id"]').val());
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

    // search by list item title
    $('input[name="listItem_search"]').on('keyup', function(){
        let inputVal = $(this).val().toLowerCase();

        $(".card-title").filter(function() {
            $(this).parents('.card').toggle($(this).text().toLowerCase().indexOf(inputVal) > -1)
        });
    });
});

function deleteTaskList(taskList_id, element) {
    event.preventDefault();

    $.ajax({
        url: '/ajax/taskList/'+taskList_id,
        type: 'delete',
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

function deleteListItem(element, listItem_id) {
    event.preventDefault();

    if(!$(element).hasClass('card'))
        element = $(element).parents('.card');

    $.ajax({
        url: '/ajax/listItems/' + listItem_id,
        type: 'delete',
        beforeSend: function () {
            $(element).addClass('bg-warning');
            $(element).find('.btn-pencil, .btn-close').addClass('d-none');
            $(element).find('.spinner').removeClass('d-none');
        },
        success: function (msg) {
            $(element).fadeOut();
            $(element).remove();
        }
    });
}

function deleteListItemFromBtn(btn){
    let o_form = $(btn).parent('form');
    let listItem_id = $(o_form).find('input[name="list_item_id"]').val();
    let card = $('#listItem_'+listItem_id);

    deleteListItem(card, listItem_id);
}

function showEditForm(element, id) {
    event.preventDefault();

    let o_form = $('#editTaskList');
    let form_taskList_id = $(o_form).find('input[name="taskList_id"]');
    let form_taskList_name = $(o_form).find('input[name="name"]');
    let name = $(element).parents('.wrapper').find('#taskList_name').text();

    $(form_taskList_id).val(id);
    $(form_taskList_name).val(name);
}

function loadTaskListItems(taskList_id) {
    event.preventDefault();
    let listItems = $('.listItems-content');
    let spinners = $(listItems).siblings('.spinners');
    let o_form = $('#addNewListItem');
    let addListItemBtn = $('#addNewTaskItemBtn');
    let tagsFilterWrapper = $('.tags-filter-wrapper');
    $(o_form).find('input[name="task_list_id"]').val(taskList_id);

    $.ajax({
        url: '/ajax/listItems/' + taskList_id,
        type: 'get',
        beforeSend: function () {
            $(spinners).toggleClass('d-none');
            $(tagsFilterWrapper).children().remove();
        },
        success: function (msg) {
            $(listItems).children().remove();
            $(listItems).append(msg);
            if ($(addListItemBtn).hasClass('d-none'))
                $(addListItemBtn).toggleClass('d-none')

            cloneTagsInTagFilter();
        },
        error: function (msg) {
            console.log(msg);
        },
        complete: function (msg) {
            if (!$(spinners).hasClass('d-none'))
                $(spinners).toggleClass('d-none');
        }
    });
}

function showEditListItemForm(element, id) {
    let card = $(element).parents('.card');
    let card_img = $(card).find('.listItem_a').clone();
    let card_title = $(card).find('.card-title').text();
    let card_desc = $(card).find('.card-description').text();
    let card_completed = $(card).find('input[name="completed"]');
    let card_tags = ($(card).find('.badge')).clone() ?? '';

    let taskList_id = $('#formAddNewListItem').find('input[name="task_list_id"]').val();
    let o_form = $('#formEditListItem');
    $(o_form).trigger('reset');

    let form_list_item_id = $(o_form).find('input[name="list_item_id"]').val(id);
    let form_taskList_id = $(o_form).find('input[name="task_list_id"]').val(taskList_id);
    let form_title = $(o_form).find('input[name="name"]').val(card_title);
    let form_description = $(o_form).find('[name="description"]').val(card_desc);
    let form_img_isset = $(o_form).find('.img-here');
    let form_img_upload = $(o_form).find('.img-upload');
    let form_spinner = $(o_form).find('.img-here .spinner-grow');
    let form_tagsWrapper = $(o_form).find('.tags-wrapper');

    $(form_spinner).addClass('d-none');
    $(form_img_isset).addClass('d-none');
    $(form_img_isset).find('#img-here').children().remove();
    $(form_img_upload).addClass('d-none');
    $(form_tagsWrapper).append(card_tags);

    if (card_img.length > 0) {
        $(form_img_isset).toggleClass('d-none');
        $(form_img_isset).find('#img-here').append($(card_img));
    } else {
        $(form_img_upload).toggleClass('d-none');
    }

    $(form_tagsWrapper).find('.badge').each(function(index, badge){
        let badge_id = $(badge).attr('id').replace(/[^0-9, ]/g,"");
        let del_btn = $('<div class="btn-close pointer p-2 mx-auto" onclick="deleteTag(this, '+badge_id+')"></div>');

        $(badge).addClass('me-2');

        $(badge).append($(del_btn));
    });
}

function deleteListItemImage(element) {
    let o_form = $(element).parents('form');
    let form_listItem_id = $(o_form).find('input[name="list_item_id"]').val();
    let form_spinner = $(o_form).find('.img-here .spinner-grow');
    let form_img_isset = $(o_form).find('.img-here');
    let form_img_upload = $(o_form).find('.img-upload');
    let taskList_id = $('#formAddNewListItem').find('input[name="task_list_id"]').val();

    $.ajax({
        url: '/ajax/listItemImage/' + form_listItem_id,
        type: 'delete',
        beforeSend: function () {
            $(form_spinner).toggleClass('d-none');
        },
        success: function (msg) {
            $(form_img_isset).find('#img-here').children().remove();
            $(form_img_isset).addClass('d-none');
            $(form_img_upload).removeClass('d-none');

            loadTaskListItems(taskList_id);
        },
        error: function (msg) {

        },
        complete: function (msg) {
            if (!$(form_spinner).hasClass('d-none'))
                $(form_spinner).toggleClass('d-none');
        }
    });
}

function listItemChangeState(element){
    let card = $(element).parents('.card');
    let listItem_id = $(card).attr('id').replace(/[^0-9, ]/g,"");
    let card_completed = $(card).find('input[name="completed"]').prop('checked');
    let data = 'completed='+card_completed+"&list_item_id="+listItem_id;
    $.ajax({
        url: '/ajax/listItems/',
        type: 'patch',
        data: data,
        beforeSend: function () {
            $(element).attr('disabled', 'true');
        },
        success: function (msg) {
            $.ajax({
                 url: '/ajax/listItems/listItem_'+listItem_id,
                 type: 'get',
                 success: function (newListItem) {
                     $(card).replaceWith(newListItem);
                     $(element).removeAttr('disabled');
                 },
             });
        },
        error: function (msg) {
            $(element).removeAttr('disabled');
            $(element).prop('checked', false);
        },
        complete: function (msg) {

        }
    });
}

function deleteTag(element, tag_id){
    $.ajax({
        url: '/ajax/tags/'+tag_id,
        type: 'delete',
        beforeSend: function () {
            $(element).parent().toggleClass('bg-secondary bg-danger');
        },
        success: function (msg) {
            loadTaskListItems($(element).parents('#formEditListItem').find('input[name="task_list_id"]').val());
        },
        error: function (msg) {
            console.log(msg);
        },
        complete: function (msg) {
            $(element).parent().remove();
            $('#tag_'+tag_id).remove();
        }
    });
}

function cloneTagsInTagFilter(){
    let tagsFilterWrapper = $('.tags-filter-wrapper');
    let listItems = $('.listItems-content').children();

    $(listItems).find('.badge').each(function(index, tag){
        let tag_clone = $(tag).clone();
        $(tag_clone).addClass('me-1 col-auto pointer');
        $(tag_clone).attr('style', 'line-height: 25px');
        $(tag_clone).attr('onclick', 'tagChange(this)');
        $(tagsFilterWrapper).append(tag_clone);
    });
}

function tagChange(tag){
    $(tag).toggleClass('bg-success bg-secondary');
    $('.card').removeClass('filtered');
    filterTags();
}

function filterTags(){
    let tags = $('.tags-filter-wrapper .badge.bg-success');
    let a_selectedTag = [];
    $(tags).each(function(){
        a_selectedTag.push($(this).text());
    });

    if(a_selectedTag.length > 0){
        $('.card').each(function(i_card, card){
            if ($(card).find('.badge').length){
                let a_cardTags = [];
                $(card).find('.badge').each(function(){
                    a_cardTags.push($(this).text());
                });

                $.each(a_cardTags, function(i_tag, tag){
                    if($.inArray(tag, a_selectedTag) > -1){
                        $(card).addClass('filtered');
                        $(card).removeClass('d-none');
                    }else{
                        if (!$(card).hasClass('filtered'))
                            $(card).addClass('d-none');
                    }
                });
            }else{
                $(card).addClass('d-none');
            }
        });
    }else{
        $('.listItems-content .card').removeClass('d-none');
    }
}
