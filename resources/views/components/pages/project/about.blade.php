@props([
    'base_info',
    'context',
    'result'
])

<section class="project-about bg-beige">
    <div class="screen-width grid-default px-default py-default gap-y-8 rl:gap-y-10">
        <h2 data-reveal
            data-dir="top"
            class="text-h2 text-center font-medium text-black col-span-full">
            {{ $base_info['title'] }}
        </h2>
        <div class="flex flex-col md:flex-row md:justify-between rl:grid-default gap-10 col-span-full">
            <x-parts.projects.title-and-p
                data-reveal
                data-dir="right"
                class="rl:col-start-2 rl:col-span-4 md:col-span-1"
                :title="$base_info['context']['title']"
                :text="$context"
            />
            <span aria-hidden="true"
                  class="rl:col-start-6 rl:col-span-2 rl:justify-self-center self-center flex justify-center items-center min-w-10 rl:min-w-13 min-h-10 rl:min-h-13 border border-red md:-rotate-90">
                <svg width="8" height="18" viewBox="0 0 8 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#arrow-down-project"/>
                </svg>
            </span>
            <x-parts.projects.title-and-p
                data-reveal
                data-dir="right"
                data-delay="0.2"
                class="rl:col-start-8 rl:col-span-4 md:col-span-1"
                :title="$base_info['result']['title']"
                :text="$result"
            />
        </div>
    </div>
</section>
