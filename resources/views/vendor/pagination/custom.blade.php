@if ($paginator->hasPages())
    <div class="w-full flex items-center justify-between mt-14">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button disabled class="w-14 h-14 flex items-center justify-center opacity-50 cursor-not-allowed">
                <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="w-14 h-14 flex items-center justify-center hover:bg-opacity-100 transition-all cursor-pointer">
                <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
            </a>
        @endif

        {{-- Pagination Elements --}}
        <div class="flex items-center gap-12">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="text-[20px] font-normal font-['Montserrat'] text-black">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="text-[20px] font-bold font-['Montserrat'] text-black border-b-2 border-black pb-1">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="w-20 h-14 flex items-center justify-center hover:bg-opacity-100 transition-all cursor-pointer">
                <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
            </a>
        @else
            <button disabled class="w-20 h-14 flex items-center justify-center opacity-50 cursor-not-allowed">
                <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
            </button>
        @endif
    </div>
@endif