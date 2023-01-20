<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn px-4 py-2 btn-danger']) }}>
    {{ $slot }}
</button>
