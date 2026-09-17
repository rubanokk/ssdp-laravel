<header class="sticky inset-x-0 top-0 z-2 bg-white">
    <div class="max-w-300 mx-auto h-22 flex items-center justify-between">
        <a href="/" class="">
            <div class="uppercase font-bold">SSD PARTNERS</div>
            <div>International Legal Advisory</div>
        </a>
        <div class="flex items-center gap-7">
            <ul class="hidden lg:flex justify-center gap-16">
                <li><a href="#">Practices</a></li>
                <li><a href="#">Global Presence</a></li>
                <li><a href="#">Expertise</a></li>
                <li><a href="#">Publications</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="flex justify-center items-center h-12 px-4 bg-linear-[135deg,#e25570,#ef8d53] text-white rounded-full">Start a conversation</div>
        </div>
        <!-- @foreach (config('localizer.supported_locales') as $locale)
        <a href="{{ Route::localizedSwitcherUrl($locale) }}" @class(['active'=> app()->getLocale() === $locale])>
            {{ strtoupper($locale) }}
        </a>
        @endforeach -->

    </div>
</header>

<div id="mobile-menu"
    class="hidden fixed top-18 left-0 right-0 bottom-0 backdrop-blur-xl bg-woodsmoke-950/40 z-80 text-xl">
    <ul class="flex flex-col justify-center items-center mt-16">
        <li><a href="/#about" class="block py-4 px-4">Почему мы</a></li>
        <li><a href="/#price" class="block py-4 px-4">Стоимость</a></li>
        <li><a href="/#works" class="block py-4 px-4">Портфолио</a></li>
        <li><a href="/#contacts" class="block py-4 px-4">Контакты</a></li>
    </ul>
</div>