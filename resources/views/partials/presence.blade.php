@php
    $items = [
        [
            'title' => 'Tamchy, Kyrgyzstan',
            'description' => 'A financial and investment hub on the shores of Lake Issyk-Kul, giving the brand a distinctive regional anchor and institutional context.',
        ],
        [
            'title' => 'Munich, Germany',
            'description' => 'Positioned as the European hub for sophisticated cross-border transactions, regulatory strategy and premium advisory work.',
        ],
        [
            'title' => 'Dubai, UAE',
            'description' => "Supporting regional expansion, high-growth ventures and cross-border business into the Gulf and beyond.",
        ],
        [
            'title' => 'New York, USA',
            'description' => "A key U.S. financial centre that reinforces the firm's global positioning across capital, disputes and strategic transactions.",
        ],
    ];
@endphp

<div class="bg-[#F8FAFE]">

<div class="max-w-300 mx-auto py-24">
    <div class="max-w-245">
        <h2 class="text-[52px] leading-13 font-bold">Global presence</h2>
        <p class="mt-5 text-lg">Through our trusted partner network, SSD Partners is also ready to represent clients’ interests across a broad range of jurisdictions. Coverage may include legal coordination, local counsel management, regulatory interaction and transaction support.</p>
    </div>
    <div class="grid grid-cols-4 gap-6 mt-9">
       @foreach ($items as $item)
            <div class="flex flex-col h-90 border border-[#D9E4FF] px-8 pb-8 pt-14 relative bg-white transition-all hover:bg-[#004AFF] hover:text-white">
                <div class="w-8 h-14 rotate-45 border border-[#F8FAFE] border-r-[#D9E4FF] absolute -top-5 -left-2 bg-[#F8FAFE]"></div>
                <div class="text-2xl font-medium">{{ $item['title'] }}</div>
                <div class="mt-auto">{{ $item['description'] }}</div>
            </div>
        @endforeach
    </div>
</div>
</div>
