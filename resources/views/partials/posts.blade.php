<div id="publications" class="bg-[#F8FAFE]">
    <div class="max-w-300 mx-auto pt-30 pb-34">
        <div class="max-w-245">
            <h2 class="text-[52px] leading-13 font-bold">{!! __('common.publications & insights') !!}</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 mt-16">
            @each('posts/post-row', $posts, 'post')
        </div>
    </div>
</div>