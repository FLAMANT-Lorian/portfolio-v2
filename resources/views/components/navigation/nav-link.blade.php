@props([
    'route',
    'title',
    'label',
    'exactRoute'
])

<a wire:navigate
   href="{{ $route }}"
   title="{{ $title }}"
   aria-label="{{ $label }}"
   @if($exactRoute)
       wire:current.exact="before:w-3 before:h-3 font-semibold"
   @else
       wire:current="before:w-3 before:h-3 font-semibold"
   @endif
   class="before:ease-all before:w-0 before:h-0 before:content-[''] hover:before:w-3 hover:before:h-3 focus:before:w-3 focus:before:h-3 before:block before:bg-white flex flex-row items-center gap-3 text-h3 text-white font-family-clash-display">
    {{ $label }}
</a>
