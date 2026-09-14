@props([
    'title',
    'text'
])

<div {{ $attributes->merge(['class' => 'flex flex-col gap-3']) }}>
    <h3 class="text-h3 text-red font-medium">{{ $title }}</h3>
    <p class="text-p text-gray-dark">{{ $text }}</p>
</div>
