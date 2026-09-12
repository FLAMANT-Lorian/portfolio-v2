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
       wire:current.exact="before:w-3 md:before:w-2 before:h-3 md:before:h-2 font-semibold! md:text-red! gap-3 md:gap-2"
   @else
       wire:current="before:w-3 md:before:w-2 before:h-3 md:before:h-2 font-semibold! md:text-red! gap-3 md:gap-2"
   @endif
   class="hover:font-semibold focus:font-semibold hover:text-red ease-all before:w-0 before:h-0 before:content-[''] before:block before:bg-white md:before:bg-red flex flex-row items-center gap-0 text-h3 md:text-p text-white md:text-gray-dark">
    {{ $label }}
</a>
