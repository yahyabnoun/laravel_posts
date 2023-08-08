<div id="tag_cloud-2" class="widget-odd widget-last widget-7 widget rounded widget_tag_cloud">
    <div class="widget-header text-center">
        <h3 class="widget-title">Tag Clouds</h3>
        <svg width="33" height="6" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#FE4F70"></stop>
                    <stop offset="100%" stop-color="#FFA387"></stop>
                </linearGradient>
            </defs>
            <path d="M33 1c-3.3 0-3.3 4-6.598 4C23.1 5 23.1 1 19.8 1c-3.3 0-3.3 4-6.599 4-3.3 0-3.3-4-6.6-4S3.303 5 0 5"
                stroke="url(#gradient)" stroke-width="2" fill="none"></path>
        </svg>
    </div>
    <div class="tagcloud">

        @foreach ($tags as $tag)
            <a href="" class="tag-cloud-link tag-link-22 tag-link-position-1" style="font-size: 15pt"
                {{-- aria-label="#Audio (3 items)" --}} aria-label="#{{ $tag->name }} (3 items)">#{{ $tag->name }}</a>
        @endforeach
    </div>
</div>
