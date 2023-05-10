@props(['outline' => false])
<a
    {{ $attributes->merge(['class' => $outline ? 'btn btn-outline-primary' : 'btn btn-primary']) }}>
    {{ $slot }}
</a>
