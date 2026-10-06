<div class="max-w-300 mx-auto py-24">
    <div class="max-w-180">
        <h2 class="text-[52px] leading-13 font-bold">{!! __('expertise.title') !!}</h2>
        <!-- <p class="mt-5 text-lg">Rather than repeat our practice areas, this section highlights selected figures from confirmed professional experience across transactions, financing, disputes, capital markets and digital assets.</p> -->
    </div>
    <div class="grid grid-cols-[33%_66%] gap-6 mt-9">
        <div class="flex flex-col justify-center items-center h-[540px] border border-[#D9E4FF] px-4 text-center">
            <div @class(['font-medium text-[#004AFF]', 'text-3xl'=> app()->getLocale() === 'ru', 'text-5xl'=> app()->getLocale() === 'en'])>{!! __('expertise.value') !!}</div>
            <div>{!! __('expertise.value_desc') !!}</div>
        </div>
        <div class="grid grid-cols-2 gap-6">
            <div class="flex flex-col justify-center items-center h-[257px] border border-[#D9E4FF] text-center px-4">
                <div class="text-5xl font-medium text-[#004AFF]">{!! __('expertise.offices') !!}</div>
                <div>{!! __('expertise.offices_desc') !!}</div>
            </div>
            <div class="flex flex-col justify-center items-center h-[257px] border border-[#D9E4FF]">
                <div class="text-5xl font-medium text-[#004AFF]">{!! __('expertise.partners') !!}</div>
                <div>{!! __('expertise.partners_desc') !!}</div>
            </div>
            <div class="flex flex-col justify-center items-center h-[257px]  bg-[#121A3B] text-white">
                <div class="text-5xl font-medium">{!! __('expertise.experience') !!}</div>
                <div>{!! __('expertise.experience_desc') !!}</div>
            </div>
            <div class="flex flex-col justify-center items-center h-[257px] border border-[#D9E4FF] text-center px-2">
                <div class="text-5xl font-medium text-[#004AFF]">{!! __('expertise.jurisdictions') !!}</div>
                <div>{!! __('expertise.jurisdictions_desc') !!}</div>
            </div>
        </div>
    </div>
</div>