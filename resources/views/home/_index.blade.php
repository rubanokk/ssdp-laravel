@extends('layouts.web')

@section('title', 'SSD Partners | Cross-Border Legal Advisory')
@section('description', '')

@section('content')

<div class="hero-image bg-no-repeat bg-cover z-20">
    <div class="max-w-300 mx-auto grid grid-cols-[1.1fr_420px] gap-9 items-end py-47.5 min-h-[90vh]">
        <div>
            <div
                class="inline-flex items-center h-8.5 px-3 text-xs text-[#9c4354] bg-white bg-opacity-[0.7] rounded-full uppercase tracking-[2px]">
                SSD Partners • TAMCHY • MUNICH • DUBAI • NEW YORK
            </div>
            <h1 class="max-w-190 text-[80px] font-bold leading-20 tracking-[-3px] mt-4">
                Cross-border legal strategy with global perspective.
            </h1>
            <p class="max-w-160 mt-5 text-[#65738a] text-[18px]">
                SSD Partners combines international deal-making experience with a premium, business-first approach.
                We advise founders, corporates, investors and family offices on transactions, disputes and strategic
                growth
                across key financial centres.
            </p>
            <div class="flex gap-3 mt-6">
                <a class="flex justify-center items-center h-12 px-4 bg-linear-[135deg,#e25570,#ef8d53] text-white rounded-full"
                    href="#expertise">View practices</a>
                <a class="flex justify-center items-center h-12 px-4 bg-white rounded-full" href="#approach">View
                    expertise</a>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="bg-[#f9fbfd] p-5 rounded-2xl">
                    <div class="text-2xl font-bold">4 hubs</div>
                    <div class="text-sm mt-1.5 text-[#65738a]">Focused presence across Tamchy, Munich, Dubai and New
                        York with cross-border capability.</div>
                </div>
                <div class="bg-[#f9fbfd] p-5 rounded-2xl">
                    <div class="text-2xl font-bold">24/7</div>
                    <div class="text-sm mt-1.5 text-[#65738a]">Responsive support for transactions, disputes and
                        time-sensitive matters.</div>
                </div>
                <div class="bg-[#f9fbfd] p-5 rounded-2xl">
                    <div class="text-2xl font-bold">One team</div>
                    <div class="text-sm mt-1.5 text-[#65738a]">Integrated advisory across corporate, finance, regulatory
                        and disputes.</div>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-3xl text-[#5e6d84] text-sm">
            <h3 class="uppercase font-semibold">Where clients rely on us</h3>
            <ul>
                <li class="flex gap-3 mt-3">
                    <div
                        class="flex items-center justify-center min-w-8.5 h-8.5 rounded-[10px] border border-[#E5E7EB]">
                        ◆</div>
                    <div>
                        <strong>When structure matters</strong><br>
                        For transactions, investments, joint ventures and ownership models where legal architecture
                        determines commercial outcome.
                    </div>
                </li>
                <li class="flex gap-3 mt-4">
                    <div
                        class="flex items-center justify-center min-w-8.5 h-8.5 rounded-[10px] border border-[#E5E7EB]">
                        ◌</div>
                    <div>
                        <strong>When risk is material</strong><br>
                        For disputes, regulatory exposure, shareholder conflict, enforcement and sensitive negotiations
                        requiring discretion and control.
                    </div>
                </li>
                <li class="flex gap-3 mt-4">
                    <div
                        class="flex items-center justify-center min-w-8.5 h-8.5 rounded-[10px] border border-[#E5E7EB]">
                        ✦</div>
                    <div>
                        <strong>When execution is cross-border</strong><br>
                        For matters involving multiple jurisdictions, local counsel, banks, regulators, counterparties
                        and strategic stakeholders.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="max-w-300 mx-auto py-24">
    <div class="max-w-245">
        <h2 class="text-[52px] leading-13 font-bold">Practices for complex cross-border mandates.</h2>
        <p class="text-[#65738a] mt-4">SSD Partners advises principals, founders, investors, boards and senior
            executives through focused practices where legal precision must be aligned with commercial strategy, capital
            structuring, regulatory exposure and risk control.</p>
        <p class="text-[#65738a] mt-3">We focus on high-value mandates that require senior judgment, discretion and the
            ability to coordinate work across jurisdictions, financial systems and stakeholder groups.</p>
    </div>
    <div class="grid grid-cols-3 gap-5 mt-9">
        <article class="flex flex-col h-75 bg-white p-7 rounded-3xl relative overflow-hidden border border-[#F1F3F9] hover:border hover:border-[#FCDCE2]">
            <div class="absolute -right-20 -bottom-20 w-45 min-h-45 bg-radial from-[#FCDCE2] to-65%"></div>
            <div class="flex justify-center items-center text-[22px] w-13 h-13 bg-linear-[135deg,#FADDE5,#E6E4FC] rounded-2xl">△</div>
            <h3 class="font-bold text-2xl mt-5">Corporate &amp; M&amp;A</h3>
            <p class="mt-auto text-[#5e6d84]">Private deals, acquisitions, exits, restructurings, joint ventures and governance for businesses and
                investors operating across multiple jurisdictions.</p>
        </article>
    </div>
</div>
@endsection