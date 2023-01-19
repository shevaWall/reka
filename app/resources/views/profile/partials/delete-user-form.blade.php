<section>
    <header>
        <h2 class="h2">Delete Account</h2>

        <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before
            deleting your account, please download any data or information that you wish to retain.</p>
    </header>

    <x-danger-button
        x-data=""
        data-bs-toggle="modal" data-bs-target="#modalDeleteUser"
    >Delete Account
    </x-danger-button>

    <div class="modal fade" id="qwe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDeleteUser" tabindex="-1" aria-labelledby="modalDeleteUserLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete your account?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')

                        <p>Once your account is deleted, all of its resources and data will be permanently deleted.
                            Please enter your password to confirm you would like to permanently delete your account.</p>

                        <div class="">
                            <div class="input-group mb-3">
                                <x-forms.input-label-custom>PSWD</x-forms.input-label-custom>
                                <x-forms.text-input placeholder="Password"
                                                    type="password"
                                                    name="password"
                                                    required="required"
                                                    autocomplete="new-password"/>
                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2"/>
                            </div>

                            <div class="row justify-content-around">
                                <div class="col-auto">
                                    <x-secondary-button data-bs-dismiss="modal">
                                        {{ __('Cancel') }}
                                    </x-secondary-button>
                                </div>

                                <div class="col-auto">
                                    <x-danger-button class="ml-3">
                                        {{ __('Delete Account') }}
                                    </x-danger-button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
