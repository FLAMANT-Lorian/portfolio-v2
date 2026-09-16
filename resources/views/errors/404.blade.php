@php
    use \App\Data\Errors;

    $error = Errors::notFound();
@endphp
<x-layout.errors
    title="errors.404.title">

    <main id="main" class="errors-page">
        <div class="screen-width px-default">
            <div class="flex flex-col justify-center items-center text-center">
                <span data-reveal
                      data-dir="top"
                      data-delay="0.2"
                      class="text-extra-big font-semibold text-black pb-6">
                    {{ $error['code'] }}&nbsp;<span class="text-red">.</span>
                </span>
                <h1 data-reveal
                    data-dir="top"
                    data-delay="0.3"
                    class="text-h2 font-medium text-black pb-3">{{ $error['title'] }}</h1>
                <p data-reveal
                   data-dir="top"
                   data-delay="0.4"
                   class="text-p text-gray-dark pb-8">
                    {{ $error['text'] }}
                </p>
                <x-parts.buttons.back-outlined
                    :label="$error['button']['label']"
                    :title="$error['button']['title']"
                    :route="$error['button']['route']"
                    :blank="$error['button']['blank'] ?? false"/>
            </div>
        </div>
    </main>

</x-layout.errors>
