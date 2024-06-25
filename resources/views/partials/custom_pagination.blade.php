<div class="pagination-wrapper">
    <div class="tj-sidebar-pagination text-center">
        <ul class="list-gap-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                {{-- Show previous link if current page is greater than 1 --}}
                @if ($paginator->currentPage() > 3)
                    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                @endif
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page <= 3 || ($page >= $paginator->currentPage() - 1 && $page <= $paginator->currentPage() + 1))
                            @if ($page == $paginator->currentPage())
                                <li class="active" style="background-color: #8fc445; color: #fff !important; width: 40px; height: 40px; border-radius: 50px; display: flex; justify-content: center; align-items: center;"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- Show next link if current page is greater than or equal to 3 --}}
                @if ($paginator->currentPage() >= 3)
                    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
                @endif
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
    </div>
</div>
<style>
.pagination-wrapper {
    display: flex;
    justify-content: center;
}

.tj-sidebar-pagination {
    text-align: center;
}
</style>
