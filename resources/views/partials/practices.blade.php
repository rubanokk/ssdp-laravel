@php
    $items = [
        [
            'title' => __('practices.corporate'),
            'description' => __('practices.corporate_desc'),
        ],
        [
            'title' => __('practices.banking'),
            'description' => __('practices.banking_desc'),
        ],
        [
            'title' => __('practices.estate'),
            'description' => __('practices.estate_desc'),
        ],
        [
            'title' => __('practices.capital'),
            'description' => __('practices.capital_desc'),
        ],
        [
            'title' => __('practices.investment'),
            'description' => __('practices.investment_desc'),
        ],
        [
            'title' => __('practices.digital'),
            'description' => __('practices.digital_desc'),
        ],
        [
            'title' => __('practices.regulatory'),
            'description' => __('practices.regulatory_desc'),
        ],
        [
            'title' => __('practices.intellectual'),
            'description' => __('practices.intellectual_desc'),
        ],
        [
            'title' => __('practices.disputes'),
            'description' => __('practices.disputes_desc'),
        ],
    ];
@endphp

<div class="max-w-300 mx-auto py-24">
    <div class="max-w-180">
        <h2 class="text-[52px] leading-13 font-bold">{!! __('practices.title') !!}</h2>
        <div class="flex flex-col gap-3 mt-5 text-lg">{!! __('practices.description') !!}</div>
    </div>
    <div class="grid grid-cols-3 gap-6 mt-9">
       @foreach ($items as $item)
            <div class="flex flex-col gap-4 min-h-75 border border-[#D9E4FF] p-8">
                <div class="text-2xl font-medium">{{ $item['title'] }}</div>
                <div class="mt-auto ">{{ $item['description'] }}</div>
            </div>
        @endforeach
    </div>
</div>