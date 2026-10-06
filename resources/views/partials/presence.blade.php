@php
    $items = [
        [
            'title' => __('presence.tamchy'),
            'description' => __('presence.tamchy_desc'),
        ],
        [
            'title' => __('presence.munich'),
            'description' => __('presence.munich_desc'),
        ],
        [
            'title' => __('presence.dubai'),
            'description' => __('presence.dubai_desc'),
        ],
        [
            'title' => __('presence.newyork'),
            'description' => __('presence.newyork_desc'),
        ],
    ];
@endphp

<div class="bg-[#F8FAFE] bg-no-repeat bg-top-right" style="background-image: url('/images/triangles-bg.svg')">

<div id="presence" class="max-w-300 mx-auto py-30">
    <div class="max-w-245">
        <h2 class="text-[52px] leading-13 font-bold"> {!! __('presence.title') !!}</h2>
        <p class="mt-5 text-lg">{!! __('presence.description') !!}</p>
    </div>
    <div class="grid lg:grid-cols-4 gap-6 mt-9">
       @foreach ($items as $item)
            <div class="flex flex-col h-70 lg:h-90 border border-[#D9E4FF] px-8 pb-8 pt-14 relative bg-white transition-all hover:bg-[#004AFF] hover:text-white">
                <div class="w-8 h-14 rotate-45 border border-[#F8FAFE] border-r-[#D9E4FF] absolute -top-5 -left-2 bg-[#F8FAFE]"></div>
                <div class="text-3xl lg:text-2xl font-medium">{{ $item['title'] }}</div>
                <div class="mt-auto">{{ $item['description'] }}</div>
            </div>
        @endforeach
    </div>
</div>
</div>
