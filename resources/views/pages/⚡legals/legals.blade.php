@php
    use App\Data\Options;use App\Data\Pages\Legals;

    $hero = Legals::hero();
    $phone = Options::phone();
    $email = Options::mail();
@endphp

<main id="main">
    {{-- HERO --}}
    <div class="screen-width px-default pt-default pb-14 rl:pb-24">
        <h1 data-reveal
            data-dir="right"
            data-delay="0.2"
            class="text-h1 text-black font-semibold pb-3">
            {{ $hero['title'] }}
        </h1>
        <p data-reveal
           data-dir="top"
           data-delay="0.3"
           class="text-p text-gray-dark">{{ $hero['text'] }}</p>
    </div>

    {{-- CONTENT --}}
    <section class="legals">
        <div class="screen-width px-default pb-default grid-default">
            <h2 class="sr-only">{{ __('pages/legals.title') }}</h2>
            <div class="col-span-full lg:col-start-3 lg:col-span-8 flex flex-col gap-10 rl:gap-12">
                <div>
                    <h3>{{ __('pages/legals.identity.title') }}</h3>
                    <ul>
                        <li>
                            <span>Flamant Lorian</span>
                        </li>
                        <li>
                            <a aria-label="{{ $phone['label'] }}"
                               title="{{ $phone['title'] }}"
                               href="{{ $phone['route'] }}">
                                {{ $phone['label'] }}
                            </a>
                        </li>
                        <li>
                            <a aria-label="{{ $email['label'] }}"
                               title="{{ $email['title'] }}"
                               href="{{ $email['route'] }}">
                                {{ $email['label'] }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>{{ __('pages/legals.hosting.title') }}</h3>
                    <ul>
                        <li>
                            <span>{{ __('pages/legals.hosting.content.1') }}</span>
                        </li>
                        <li>
                            <p>{{ __('pages/legals.hosting.content.2') }}</p>
                        </li>
                        <li>
                            <p>
                                {{ __('pages/legals.hosting.content.3') }}<a
                                    aria-label="{{ __('pages/legals.hosting.content.link.title') }}"
                                    title="{{ __('pages/legals.hosting.content.link.title') }}"
                                    href="https://www.infomaniak.com/">{{ __('pages/legals.hosting.content.link.label') }}
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>{{ __('pages/legals.intellectual_property.title') }}</h3>
                    <p>{{ __('pages/legals.intellectual_property.content') }}</p>
                </div>
                <div>
                    <h3>{{ __('pages/legals.external_links.title') }}</h3>
                    <p>{{ __('pages/legals.external_links.content') }}</p>
                </div>
                <div>
                    <h3>{{ __('pages/legals.personal_data.title') }}</h3>
                    <p>{{ __('pages/legals.personal_data.content') }}
                        <a aria-label="{{ $email['label'] }}"
                           title="{{ $email['title'] }}"
                           href="{{ $email['route'] }}">
                            {{ $email['label'] }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
