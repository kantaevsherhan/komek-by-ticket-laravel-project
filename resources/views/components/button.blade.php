@props([
    'variant' => 'red',
    'type' => 'button',
])

<button {{ $attributes->class("button-{$variant}")->merge(['type' => $type]) }}>
    {{ $slot }}
</button>
