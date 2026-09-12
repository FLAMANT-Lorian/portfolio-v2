@php
    use App\Data\Pages\Project;

    $back_btn = Project::back_btn();

    $text_media = Project::text_media();
@endphp

<main id="main">
    <div class="screen-width grid-default px-default pt-default pb-10">
        <x-parts.buttons.back-outlined
            class="col-span-full justify-self-start"
            :label="$back_btn['label']"
            :title="$back_btn['title']"
            :route="$back_btn['route']"
            :blank="$back_btn['blank'] ?? false"
        />
    </div>

    <span>{{ $this->project->excerpt }}</span>
    {{-- HERO --}}
    <x-parts.block.text-media/>

    {{-- PROJECTS --}}
</main>
