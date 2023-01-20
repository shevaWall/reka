{{--todo: объеденить с другими формами, использовать слоты--}}
<div class="modal fade" id="editListItem" tabindex="-1" aria-labelledby="editListItemLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit list item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="formEditListItem" action="#" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="list_item_id" />
                    <input type="hidden" name="task_list_id" />
                    <div class="input-group mb-3">
                        <x-forms.input-label-custom>Title</x-forms.input-label-custom>
                        <x-forms.text-input type="text" name="name" placeholder="Title" required="required"/>
                    </div>
                    <div class="input-group mb-3 img-here d-none">
                        <x-forms.input-label-custom>File</x-forms.input-label-custom>
                        <div id="img-here"></div>
                        <div class="btn-close pointer" onclick="deleteListItemImage(this)"></div>
                        <x-spinner.danger class="d-none" />
                    </div>
                    <div class="input-group mb-3 img-upload d-none">
                        <x-forms.input-label-custom>File</x-forms.input-label-custom>
                        <x-forms.text-input type="file" name="file" placeholder="File"/>
                        <span class="my-auto">max 10Mb</span>
                    </div>
                    <div class="input-group mb-3">
                        <x-forms.input-label-custom>Desciption</x-forms.input-label-custom>
                        <x-forms.textarea-input name="description" />
                    </div>
                    <div class="input-group mb-3">
                        <x-forms.input-label-custom>Tags</x-forms.input-label-custom>
                        <x-forms.text-input type="text" name="tags" placeholder="Tags" />
                        <div class="text-secondary col-12">use comma to separate tags</div>
                        <div class="tags-wrapper">

                        </div>
                    </div>

                    <x-secondary-button data-bs-dismiss="modal">Cancel</x-secondary-button>
                    <x-forms.button-danger onclick="deleteListItemFromBtn(this)" data-bs-dismiss="modal">Delete</x-forms.button-danger>
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
