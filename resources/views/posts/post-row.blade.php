<article class="">
    <a aria-label="{{ $post->title }}" href="/posts/{{ $post->slug  }}" class="inline text-2xl font-medium border-b border-[#004AFF]">
        {{ $post->title }}
    </a>
    <div class="mt-8">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</div>
</article>