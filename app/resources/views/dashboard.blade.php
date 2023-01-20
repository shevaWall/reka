<x-app-layout>
    <div class="row py-5">
        <div class="col-12 col-md-3 left-sidebar shadow">
            <div class="sidebar-head">
                <span class="h5 sidebarTitle">Your lists</span>
                <div class="d-flex justify-content-center sidebar-head-spinner d-none">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Загрузка...</span>
                    </div>
                </div>
                <span class="h5 text-success pointer" data-bs-toggle="modal" data-bs-target="#addNewTaskList">+</span>
            </div>

            @include('components.task-list.wrapper-list-of-taskList', $task_lists)
        </div>
        <div class="col-12 col-md-9">
            <div class="row shadow pt-2">
                <div class="col-12 text-center h5">Task items</div>
                <div class="col-12 listItems-wrapper">

                    <div class="row">
                        <div class="col-12 text-center spinners d-none">
                            <x-spinner.four-spinner />
                        </div>
                        <div class="col-12 listItems-content">
                            <div class="col-12 text-center h3">
                                @if($task_lists->count())
                                    <-Choose task list
                                @else
                                    <-First create new task list
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-10 mx-auto text-center bg-light py-3 btn d-none"
                     id="addNewTaskItemBtn"
                     data-bs-toggle="modal"
                     data-bs-target="#addNewListItem">
                    <div class="">Add task item</div>
                </div>
            </div>
        </div>
    </div>


    <x-forms.modal.add-task-list/>
    <x-forms.modal.edit-task-list/>
    <x-forms.modal.add-list-item />
    <x-forms.modal.edit-list-item/>
</x-app-layout>
