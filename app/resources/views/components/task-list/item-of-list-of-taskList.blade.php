<div class="wrapper list-group-item list-group-item-action">
    <a href="#" class="" aria-current="true" onclick="loadTaskListItems({{$task_list->id}})">
        <span id="taskList_name">{{$task_list->name}}</span>
    </a>
    <span class="btn-close pointer" style="float:right;" onclick="deleteTaskList({{$task_list->id}}, this)"></span>
    <span class="btn-pencil pointer" onclick="showEditForm(this, {{$task_list->id}});" data-bs-toggle="modal" data-bs-target="#editTaskList"></span>
</div>


