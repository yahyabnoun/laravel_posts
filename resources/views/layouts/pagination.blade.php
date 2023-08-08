{{-- <div  class="load-more text-center">
    <a id="loadmorebtn" href="{{route('posts.paginition')}}" class="btn btn-simple">
    <a id="loadmorebtn" href="" class="btn btn-simple"> <i class="fas fa-spinner"></i> Load more  </a>
</div> --}}

{{--
@if ($paginator->hasPages())

    @if ($paginator->hasMorePages())


            <div  class="load-more text-center">
                <a  href="" class="btn btn-simple"  href="{{ $paginator->nextPageUrl() }}" rel="next">Load more  </a>
            </div>

            @else

            <div   class="load-more text-center disabled">
                <a  id="loadmorebtn" href="" class="btn btn-simple">  Load more  </a>
            </div>
    @endif


@endif --}}


@if ($paginator->hasPages())
{{--
    @if ($paginator->onFirstPage())

        <li class="disabled"><span>← Previous</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif --}}

    {{-- @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach --}}

    @if ($paginator->hasMorePages())

        <a class="btn btn-simple " href="{{ $paginator->nextPageUrl() }}" rel="next">Load more</a>
    @else
    <a class="btn btn-simple "   rel="next"> go home  </a>
    @endif
@endif

