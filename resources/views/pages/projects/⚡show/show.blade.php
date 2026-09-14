@php
    use App\Data\Pages\Project;

    $back_btn = Project::back_btn();

    $text_media = Project::text_media();

    $project = $this->project;
@endphp

<main id="main">
    <div class="screen-width grid-default px-default pt-default">
        <x-parts.buttons.back-outlined
            class="col-span-full justify-self-start"
            :label="$back_btn['label']"
            :title="$back_btn['title']"
            :route="$back_btn['route']"
            :blank="$back_btn['blank'] ?? false"
        />
    </div>

    {{-- HERO --}}
    <x-parts.block.text-media
        :base_info="$text_media"
        :title="$project->name"
        :description="$project->description"
        :image="$project->featured_image"
        :imageAlt="$project->featured_image_alt"
        :button_1_link="$project->website_url"
        :button_2_link="$project->github_url"
    />

    {{-- PROJECTS --}}
</main>
