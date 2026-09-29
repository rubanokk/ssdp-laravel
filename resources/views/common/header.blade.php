<header class="site-header">
    <div class="header-inner">
        <a aria-label="SSD Partners" class="brand" href="/">
            <div class="brand-text">
                <strong>SSD PARTNERS</strong>
                <span>International Legal Advisory</span>
            </div>
        </a>
        <nav class="nav">
            <a href="/#expertise">Practices</a>
            <a href="/#presence">Global Presence</a>
            <a href="/#approach">Expertise</a>
            <a href="/#publications">Publications</a>
            <a href="/#contact">Contact</a>
        </nav>
        <div class="header-actions">
            <div aria-label="Language switch" class="lang-switch">
                @foreach (config('localizer.supported_locales') as $locale)
                <a href="{{ Route::localizedSwitcherUrl($locale) }}" @class(['active'=> app()->getLocale() ===
                    $locale])>
                    {{ strtoupper($locale) }}
                </a>
                @endforeach
            </div>

            <a class="btn btn-primary" href="#contact">Start a conversation</a>
        </div>
    </div>
</header>