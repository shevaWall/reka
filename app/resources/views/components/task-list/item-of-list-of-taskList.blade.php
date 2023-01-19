<a href="/test" class="list-group-item list-group-item-action" aria-current="true">
    <span id="taskList_name">{{$task_list->name}}</span>
    <span class="btn-close" onclick="deleteTaskList({{$task_list->id}}, this)"></span>
    <span class="btn-pencil" data-bs-toggle="modal" data-bs-target="#editTaskList" data-taskList-id="{{$task_list->id}}"></span>
</a>
