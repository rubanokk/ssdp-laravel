@php
    $items = [
        [
            'title' => 'Corporate & MA',
            'description' => 'Private deals, acquisitions, exits, restructurings, joint ventures and governance for businesses and investors operating across multiple jurisdictions.',
        ],
        [
            'title' => 'Banking & Finance',
            'description' => 'Acquisition, corporate and structured finance, debt arrangements, refinancing and strategic capital solutions for borrowers, lenders, sponsors and investors.',
        ],
        [
            'title' => 'Real Estate & Infrastructure',
            'description' => 'Acquisitions, disposals, development projects, joint ventures, financing structures and complex real estate and infrastructure investments.',
        ],
        [
            'title' => 'Private Capital & Special Situations',
            'description' => 'Advisory for principals, family capital, founders and investors in sensitive transactions, distressed situations and complex asset structures.',
        ],
        [
            'title' => 'Investment Funds & Asset Management',
            'description' => 'Fund formation, investment structures, asset management mandates, family office arrangements and regulatory matters for managers and institutional investors.',
        ],
        [
            'title' => 'Digital Assets & FinTech',
            'description' => 'Legal architecture for digital assets, custody models, tokenisation, payment infrastructure and emerging financial technologies.',
        ],
        [
            'title' => 'Regulatory & Compliance',
            'description' => 'Licensing, AML/KYC, sanctions, financial regulation and governance frameworks for businesses operating in regulated environments.',
        ],
        [
            'title' => 'Intellectual Property',
            'description' => 'We advise on the creation and protection of intellectual property, structuring ownership and commercial arrangements to support our clients’ business objectives.',
        ],
        [
            'title' => 'Disputes & Resolution',
            'description' => 'Commercial disputes, enforcement strategy, negotiation and risk management with a board-level mindset and cross-border coordination.',
        ],
    ];
@endphp

<div class="max-w-300 mx-auto py-24">
    <div class="max-w-180">
        <h2 class="text-[52px] leading-13 font-bold">Practices for complex cross-border mandates.</h2>
        <p class="mt-5 text-lg">SSD Partners advises principals, founders, investors, boards and senior
            executives through focused practices where legal precision must be aligned with commercial strategy, capital
            structuring, regulatory exposure and risk control.</p>
        <p class="mt-3 text-lg">We focus on high-value mandates that require senior judgment, discretion and the
            ability to coordinate work across jurisdictions, financial systems and stakeholder groups.</p>
    </div>
    <div class="grid grid-cols-3 gap-6 mt-9">
       @foreach ($items as $item)
            <div class="flex flex-col h-75 border border-[#D9E4FF] p-8">
                <div class="text-2xl font-medium">{{ $item['title'] }}</div>
                <div class="mt-auto text-lg">{{ $item['description'] }}</div>
            </div>
        @endforeach
    </div>
</div>