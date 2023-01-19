<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-danger btn py-2 text-white px-4']) }}>
    {{ $slot }}
</button>
