<x-guest-layout>
    <div class="col-12 h1 text-center mt-5">
        Вход
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="col-12 col-md-6 mx-auto mt-5">
        @csrf

        <!-- Email Address -->
        <div class="input-group mb-3">
            <x-forms.input-label-with-dog/>
            <x-forms.text-input placeholder="Email" type="email" name="email" :value="old('email')" required/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
            <x-forms.input-label-custom>PSWD</x-forms.input-label-custom>
            <x-forms.text-input placeholder="Password" type="password" name="password" required autocomplete="new-password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Remember Me -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
        </div>

        <div class="text-center">
            @if (Route::has('password.request'))
                <a class="btn" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif

            <x-forms.button-success>Log in</x-forms.button-success>
        </div>
    </form>
</x-guest-layout>
