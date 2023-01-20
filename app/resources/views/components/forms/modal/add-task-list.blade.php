{{--todo: объеденить с edit-task-list--}}
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
                <x-spinner.four-spinner/>
            </div>

            <x-forms.modal.modal-footer-alerts />
        </div>
    </div>
</div>
