@if ($paginator->hasPages())
    <div class="flex space-x-2 items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 bg-gray-300 text-gray-500 rounded-lg">‹</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 bg-black text-white rounded-lg hover:bg-gray-800 shadow-md transition-all duration-200">‹</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 bg-black text-white rounded-lg shadow-lg font-semibold">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 bg-gray-100 text-black rounded-lg hover:bg-gray-200 border border-gray-200 transition-all duration-200">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 bg-black text-white rounded-lg hover:bg-gray-800 shadow-md transition-all duration-200">›</a>
        @else
            <span class="px-3 py-2 bg-gray-300 text-gray-500 rounded-lg">›</span>
        @endif
    </div>
@endif