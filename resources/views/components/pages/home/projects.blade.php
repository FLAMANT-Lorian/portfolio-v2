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
            <span class="text-h4 font-medium text-gray-dark">{{ $project_section['title']['part-1'] }}</span>
            <span class="text-h2 font-medium text-red">{{ $project_section['title']['part-2'] }}</span>
        </h2>
        <div class="grid md:grid-cols-2 rg:grid-cols-3 gap-6 md:col-span-full">
            @foreach($projects as $project)
                <x-parts.projects.card
                    class="md:last:col-span-2 rg:col-span-1!"
                    :project="$project"/>
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
