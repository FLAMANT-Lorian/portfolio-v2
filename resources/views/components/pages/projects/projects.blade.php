@props([
    'projects'
])
@php
    use App\Data\Pages\Home;

    $projects = $this->projects;
@endphp
<section>
    <div class="screen-width px-default grid-default">
        <h2 class="sr-only">
            {{ __('pages/projects.projects.title') }}
        </h2>
        @if($projects->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 rg:grid-cols-3 gap-6 col-span-full">
                @php
                    $delay = 0.2;
                @endphp
                @foreach($projects as $project)
                    <x-parts.projects.card
                        data-reveal
                        data-dir="top"
                        data-delay="{{ $delay }}"
                        :project="$project"/>
                    @php
                        $delay += 0.1;
                    @endphp
                @endforeach
            </div>
            {{ $this->projects->links(data: ['scrollTo' => 'main']) }}
            @if(!$projects->hasMorePages())
                <p class="col-span-full text-center text-p text-gray-dark font-normal pt-8 rg:pt-12">
                    {!! __('pages/projects.more-projects') !!}
                </p>
            @endif
        @else
            <div class="col-span-full py-8 md:py-12 rl:py-18 flex flex-col items-center justify-center gap-4">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="text-gray-dark">
                    <use href="#filter"></use>
                </svg>
                <p class="text-p text-gray-dark font-normal text-center">
                    {!! __('pages/projects.no-result') !!}
                </p>
            </div>
        @endif
    </div>
</section>
