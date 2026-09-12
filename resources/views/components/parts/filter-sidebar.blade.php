@php
    use App\Enums\ProjectTypes;
@endphp

<div x-cloak x-trap="sidebarOpen">
    {{-- Black overlay --}}
    <div x-show="sidebarOpen"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed z-20 bg-black/40 inset-0 ease-all"></div>

    {{-- Sidebar --}}
    <div x-show="sidebarOpen"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         @click.away="sidebarOpen = false"
         @keydown.window.escape="sidebarOpen = false"
         x-effect="document.body.classList.toggle('overflow-hidden', sidebarOpen)"
         class="fixed z-30 w-screen sm:w-100 h-screen bg-white max-sm:inset-0 sm:right-0 sm:top-0 sm:bottom-0 ease-all flex flex-col">
        <div class="flex flex-row items-center justify-between border-b border-b-gray-light px-6 py-8">
            <span class="text-h4 text-black font-semibold">
                {{ __('pages/projects.filter.title') }}
            </span>
            <button @click="sidebarOpen = false"
                    title="{{ __('pages/projects.filter.close-filter.title') }}"
                    class="cursor-pointer"
                    type="button">
                <span class="sr-only">{{ __('pages/projects.filter.close-filter.label') }}</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#close-filter"></use>
                </svg>
            </button>
        </div>
        <div class="px-6 py-8 flex flex-col justify-between grow">
            <div class="flex flex-col gap-3">
                <span
                    class="text-base font-family-dm-sans font-semibold text-black">{{ __('pages/projects.filter.types.label') }}</span>
                <ul class="flex flex-row flex-wrap gap-2">
                    @foreach(ProjectTypes::cases() as $type)
                        @php
                            $class = in_array($type->value, $this->tags) ?
                                'border-red bg-red text-white' :
                                'hover:border-red hover:text-red border-gray-light text-black';
                        @endphp
                        <li>
                            <button type="button"
                                    wire:click="toggleTag('{{ $type->value }}')"
                                    class="{{ $class }} cursor-pointer font-family-dm-sans text-base px-3 py-1 rounded-full border border-gray-light text-black ease-all">
                                {{ __('enums.' . $type->value) }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-row text-center">
                <button type="button"
                        @click="sidebarOpen = false"
                        wire:click="applyFilter()"
                        class=" cursor-pointer btn-filled justify-center grow"
                        title="{{ __('pages/projects.filter.title') }}">
                    {{ __('pages/projects.filter.title') }}
                </button>
            </div>
        </div>
    </div>
</div>
