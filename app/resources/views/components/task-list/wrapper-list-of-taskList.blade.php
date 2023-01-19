<ul class="list-of-taskList mb-3">
    @foreach($task_lists as $task_list)
        @include('components.task-list.item-of-list-of-taskList', $task_list)
    @endforeach
</ul>
