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

        </div>
    </div>

{{--    add taskList--}}
    <div class="modal fade" id="addNewTaskList" tabindex="-1" aria-labelledby="addNewTaskListLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new task list</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formAddNewTaskList" action="#">
                        @csrf
                        <p>Please enter name of task list.</p>

                        <div class="input-group mb-3">
                            <x-forms.input-label-custom>List name</x-forms.input-label-custom>
                            <x-forms.text-input type="text" name="name" placeholder="List name" required="required"/>
                        </div>

                        <x-secondary-button data-bs-dismiss="modal">Cancel</x-secondary-button>
                        <x-forms.button-success>Create</x-forms.button-success>
                    </form>
                </div>
                <div class="modal-footer spinners row justify-content-around d-none">
                    <x-spinner.warning/>
                    <x-spinner.primary/>
                    <x-spinner.success/>
                    <x-spinner.danger/>
                </div>

                <div class="modal-footer success d-none">
                    {{-- todo: закинуть в компонент--}}
                    <div class="alert alert-success col-12" role="alert">
                        Successes created
                    </div>
                </div>

            </div>
        </div>
    </div>

{{--    edit taskList--}}
    <div class="modal fade" id="editTaskList" tabindex="-1" aria-labelledby="editTaskListLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit task list</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formEditTaskList" action="#">
                        @csrf
                        <input type="hidden" name="taskList_id" value="">
                        <div class="input-group mb-3">
                            <x-forms.input-label-custom>List name</x-forms.input-label-custom>
                            <x-forms.text-input type="text" name="name" placeholder="List name" required="required"/>
                        </div>

                        <x-secondary-button data-bs-dismiss="modal">Cancel</x-secondary-button>
                        <x-forms.button-success>Create</x-forms.button-success>
                    </form>
                </div>
                <div class="modal-footer spinners row justify-content-around d-none">
                    <x-spinner.warning/>
                    <x-spinner.primary/>
                    <x-spinner.success/>
                    <x-spinner.danger/>
                </div>

                <div class="modal-footer success d-none">
                    {{-- todo: закинуть в компонент--}}
                    <div class="alert alert-success col-12" role="alert">
                        Changes saved
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
