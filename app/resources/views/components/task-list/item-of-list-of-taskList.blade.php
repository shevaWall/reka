<a href="#" class="list-group-item list-group-item-action" aria-current="true" onclick="loadTaskListItems({{$task_list->id}})">
    <span id="taskList_name">{{$task_list->name}}</span>
    <span class="btn-close" onclick="deleteTaskList({{$task_list->id}}, this)"></span>
    <span class="btn-pencil" onclick="showEditForm(this, {{$task_list->id}});" data-bs-toggle="modal" data-bs-target="#editTaskList"></span>
</a>
