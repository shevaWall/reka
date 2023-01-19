<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-secondary btn py-2 text-white px-4']) }}>
    {{ $slot }}
</button>
