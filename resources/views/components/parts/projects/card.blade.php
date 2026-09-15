@props([
    'project'
])

@php
    use App\Models\Project;

    /**
     * @var Project $project
     */
@endphp

<div {{ $attributes->merge(['class' => 'relative aspect-square group overflow-hidden max-h-160 w-full']) }}>
    <a href="{{ route('projects.show', $project) }}"
       wire:navigate
       class="absolute inset-0 z-3"
       title="{{ __('partials/cards.view-project') . $project->name }}"
       aria-label="{{ __('partials/cards.view-project') . $project->name }}">
        <span class="sr-only">{{ __('partials/cards.view-project') . $project->name }}</span>
    </a>
    <img class="absolute inset-0 group-hover:scale-105 group-focus-within:scale-105 ease-all object-cover w-full h-full"
         srcset="
         @foreach(config('images.project-card-sizes') as $size)
            {{ asset('assets/img/projects/cards/' . $size . '/' . $project->featured_image) }} {{ $size }}w{{ !$loop->last ? ', ' : '' }}
         @endforeach
         "
         sizes="(max-width: 1023px) 100vw, (max-width: 1239px) 320px, (max-width: 1619px) 400px, 420px"
         width="1000"
         height="1000"
         src="{{ asset('assets/img/projects/cards/original/' . $project->featured_image) }}"
         alt="{{ $project->featured_image_alt }}">
    <span aria-hidden="true"
          class="absolute inset-0 z-1 bg-[linear-gradient(180deg,rgba(217,217,217,0)_0%,rgba(16,12,8,0.7)_80.29%)]"></span>
    <div class="relative z-2 w-full h-full flex">
        <span
            class="flex justify-center items-center text-white h-10 w-10 p-4 bg-red absolute top-4 right-4 ease-all duration-500">
            <svg class="min-h-3.25 min-w-3.25 block group-hover:rotate-45 group-focus-within:rotate-45 ease-all"
                 width="13"
                 height="13"
                 viewBox="0 0 13 13"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <use href="#arrow-btn"></use>
            </svg>
        </span>
        <div class="text-white px-4 pb-4 self-end flex flex-col gap-2">
            <h3 class="text-h3 font-medium translate-y-11 transition-all duration-500 ease-all group-hover:translate-y-0 group-focus-within:translate-y-0">
                {{ $project->name }}
            </h3>
            <span aria-hidden="true"
                  class="w-8 h-px bg-white block origin-left scale-x-0 opacity-0 transition-all duration-500 delay-75 ease-all group-hover:scale-x-100 group-hover:opacity-100 group-focus-within:scale-x-100 group-focus-within:opacity-100"></span>
            <p class="text-p opacity-0 line-clamp-1 translate-y-2 transition-all duration-500 delay-100 ease-all group-hover:opacity-100 group-hover:translate-y-0 group-focus-within:opacity-100 group-focus-within:translate-y-0">
                {{ $project->excerpt }}
            </p>
        </div>
    </div>
</div>
