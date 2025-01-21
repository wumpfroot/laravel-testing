@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card']) class="card">
    {{ $slot }}
    <button><a {{ $attributes }} class="btn">View Details</a></button>
</div>