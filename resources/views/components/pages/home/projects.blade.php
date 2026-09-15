@props([
    'projects'
])
@php
    use App\Data\Pages\Home;

    $project_section = Home::projects();
@endphp
<section class="home-projects bg-beige">
    <div class="screen-width px-default py-default grid-default gap-y-8 rg:gap-y-10">
        <h2 class="flex flex-col gap-1 md:col-span-5">
            <span data-reveal
                  data-dir="right"
                  class="text-h4 font-medium text-gray-dark">{{ $project_section['title']['part-1'] }}</span>
            <span data-reveal
                  data-dir="right"
                  data-delay="0.1"
                  class="text-h2 font-medium text-red">{{ $project_section['title']['part-2'] }}</span>
        </h2>
        <div class="grid md:grid-cols-2 rg:grid-cols-3 gap-6 md:col-span-full">
            @php
                $delay = 0;
            @endphp
            @foreach($projects as $project)
                <x-parts.projects.card
                    data-reveal
                    data-dir="top"
                    data-delay="{{ $delay }}"
                    class="md:last:col-span-2 rg:col-span-1!"
                    :project="$project"/>
                @php
                    $delay += 0.15;
                @endphp
            @endforeach
        </div>
        <x-parts.buttons.outlined-btn
            class="justify-self-center md:col-start-6 rl:col-start-10 md:col-span-3 md:row-start-1 md:justify-self-end md:self-center"
            :label="$project_section['button']['label']"
            :title="$project_section['button']['title']"
            :route="$project_section['button']['route']"
            :blank="$project_section['button']['blank'] ?? false"
        />
    </div>
</section>
