<x-guest-layout>
    <div class="col-12 h1 text-center mt-5">
        Регистрация
    </div>
    <form method="POST" action="{{ route('register') }}" class="col-12 col-md-6 mx-auto mt-5">
        @csrf

        <!-- Name -->
        <div class="input-group mb-3">
            <x-forms.input-label-with-dollar/>
            <x-forms.text-input type="text" name="name" placeholder="Nickname" :value="old('name')" required="required" autofocus/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="input-group mb-3">
            <x-forms.input-label-with-dog/>
            <x-forms.text-input placeholder="Email" type="email" name="email" :value="old('email')" required="required"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
            <x-forms.input-label-custom>PSWD</x-forms.input-label-custom>
            <x-forms.text-input placeholder="Password" type="password" name="password" required="required" autocomplete="new-password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="input-group mb-3">
            <x-forms.input-label-custom>Repeat PSWD</x-forms.input-label-custom>
            <x-forms.text-input placeholder="Password" type="password" name="password_confirmation" required="required" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <div class="text-center">
            @if(route('login'))
                <a class="btn btn-primary" href="{{ route('login') }}">Already registered?</a>
            @endif

            <x-forms.button-success>Register</x-forms.button-success>
        </div>
    </form>
</x-guest-layout>
