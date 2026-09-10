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
       wire:current.exact="before:w-3 md:before:w-2 before:h-3 md:before:h-2 font-semibold md:text-red! gap-3 md:gap-2"
   @else
       wire:current="before:w-3 md:before:w-2 before:h-3 md:before:h-2 font-semibold md:text-red! gap-3 md:gap-2"
   @endif
   class="before:ease-all ease-all before:w-0 before:h-0 before:content-[''] hover:before:w-3 md:hover:before:w-2 hover:before:h-3 md:hover:before:h-2 focus:before:w-3 md:focus:before:w-2 focus:before:h-3 md:focus:before:h-2 before:block before:bg-white md:before:bg-red flex flex-row items-center gap-0 hover:gap-3 focus:gap-3 md:hover:gap-2 md:focus:gap-2 md:hover:gap-2 md:focus:gap-2 text-h3 md:text-p text-white md:text-gray-dark font-family-clash-display md:font-family-dm-sans">
    {{ $label }}
</a>
