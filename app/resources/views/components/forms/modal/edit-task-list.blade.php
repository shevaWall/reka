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
                    <x-forms.button-success>Save</x-forms.button-success>
                </form>
            </div>
            <div class="modal-footer spinners row justify-content-around d-none">
                <x-spinner.four-spinner/>
            </div>

            <x-forms.modal.modal-footer-alerts />
        </div>
    </div>
</div>
