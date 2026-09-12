@php
    if (! isset($scrollTo)) {
        $scrollTo = 'body';
    }

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? <<<JS
           (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
        JS
        : '';
@endphp

<div class="justify-self-center md:justify-self-end pt-8 col-span-full ">
    @if ($paginator->hasPages())
        <div role="navigation" aria-label="{{ __('pages/projects.projects.pagination-title') }}"
             class="flex items-center justify-between">
            <span class="flex flex-row items-center gap-3">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <span aria-disabled="true"
                                      class="font-family-dm-sans text-black/40 text-base flex justify-center items-center flex-row gap-1"
                                      aria-label="{{ __('pagination.previous') }}">
                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <use href="#pagination-left"></use>
                                    </svg>
                                    <span>{{ __('pagination.previous') }}</span>
                                </span>
                            @else
                                <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                        class="font-family-dm-sans text-black cursor-pointer hover:text-red focus:text-red ease-all text-base flex justify-center items-center flex-row gap-1"
                                        aria-label="{{ __('pagination.previous') }}">
                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <use href="#pagination-left"></use>
                                    </svg>
                                    <span>{{ __('pagination.previous') }}</span>
                                </button>
                            @endif
                        </span>

                        {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    {{--@if (is_string($element))
                        <span aria-disabled="true">
                             <span class="">
                                 {{ $element }}
                             </span>
                        </span>
                    @endif--}}

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <span wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                    <span aria-current="page"
                                          class="text-base font-family-dm-sans flex justify-center items-center min-w-8 min-h-8 w-8 h-8 block bg-red text-white">
                                        {{ $page }}
                                    </span>
                                @else
                                    <button type="button"
                                            wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                            x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                            class="cursor-pointer text-base font-family-dm-sans flex justify-center items-center min-w-8 min-h-8 w-8 h-8 border border-transparent hover:border-red! ease-all text-black"
                                            aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                @endif
                                    </span>
                        @endforeach
                    @endif
                @endforeach

                        <span>
                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                        class="cursor-pointer font-family-dm-sans text-black hover:text-red focus:text-red ease-all text-base flex justify-center items-center flex-row gap-1"
                                        aria-label="{{ __('pagination.next') }}">
                                    <span>{{ __('pagination.next') }}</span>
                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <use href="#pagination-right"></use>
                                    </svg>
                                </button>
                            @else
                                <span aria-disabled="true"
                                      class="font-family-dm-sans text-black/40 text-base flex justify-center items-center flex-row gap-1"
                                      aria-label="{{ __('pagination.next') }}">
                                    <span>{{ __('pagination.next') }}</span>
                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <use href="#pagination-right"></use>
                                    </svg>
                                </span>
                            @endif
                        </span>
                    </span>
        </div>
    @endif
</div>
