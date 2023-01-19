<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn px-4 py-2 btn-success']) }}>
    {{ $slot }}
</button>
