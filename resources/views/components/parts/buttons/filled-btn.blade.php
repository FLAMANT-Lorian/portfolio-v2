@props([
    'label',
    'title',
    'route',
    'blank',
])

<a {{ $attributes->merge(['class' => 'group text-p px-3 py-2.5 bg-red text-white flex flex-row gap-3 items-center border border-red hover:bg-transparent hover:text-red focus:bg-transparent focus:text-red ease-all']) }}
   aria-label="{{ $label }}"
   title="{{ $title }}"
   wire:navigate
   @if($blank)
       target="_blank"
   @endif
   href="{{ $route }}">
    <span>{{ $label }}</span>
    <svg class="group-hover:rotate-45 group-focus:rotate-45 ease-all" width="13" height="13" viewBox="0 0 13 13"
         fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <use href="#arrow-btn"></use>
    </svg>
</a>
