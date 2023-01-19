<section>
    <header>
        <h2 class="h2">Update Password</h2>

        <p>Ensure your account is using a long, random password to stay secure.</p>
    </header>

    @if (session('status') === 'password-updated')
        <x-alerts.alert-success>Saved</x-alerts.alert-success>
    @endif

    <div class="row">
        <form method="post" action="{{ route('password.update') }}" class="mt-6 col-12 col-md-6">
            @csrf
            @method('put')

            <div class="input-group mb-3">
                <x-forms.input-label-custom>PSWD</x-forms.input-label-custom>
                <x-forms.text-input name="current_password" type="password" placeholder="Password"
                                    autocomplete="current-password" required="required"/>
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2"/>
            </div>

            <div class="input-group mb-3">
                <x-forms.input-label-custom>NEW PSWD</x-forms.input-label-custom>
                <x-forms.text-input name="password" type="password" placeholder="New password"
                                    autocomplete="new-password" required="required"/>
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"/>
            </div>

            <div class="input-group mb-3">
                <x-forms.input-label-custom>CONFIRM PSWD</x-forms.input-label-custom>
                <x-forms.text-input name="password_confirmation" type="password" placeholder="Repeat new password"
                                    autocomplete="new-password" required="required"/>
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2"/>
            </div>

            <div>
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>

        </form>
    </div>
</section>
