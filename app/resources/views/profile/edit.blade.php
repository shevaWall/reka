<x-app-layout>
    <div class="">
        <div class="mx-auto">
            <h1 class="h1 text-center py-3">Profile settings</h1>
            <div class="p-4 bg-white shadow">
                <div class="py-4">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <hr />

                <div class="py-4">
                    @include('profile.partials.update-password-form')
                </div>

                <hr />

                <div class="py-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
