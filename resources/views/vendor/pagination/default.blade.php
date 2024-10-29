@if ($paginator->hasPages())
    <div class="flex flex-col items-center">
        <!-- Help text -->
        <span class="text-sm text-gray-700 dark:text-gray-400">
            Showing <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->firstItem() }}</span> to <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->lastItem() }}</span> of <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->total() }}</span> Entries
        </span>
        <div class="inline-flex mt-2 xs:mt-0">
            <!-- Previous Page Link -->
            @if ($paginator->onFirstPage())
                <button class="flex items-center justify-center h-8 px-3 text-sm font-medium text-white bg-gray-800 opacity-50 cursor-not-allowed rounded-s" disabled>
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    Prev
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <button class="flex items-center justify-center h-8 px-3 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        Prev
                    </button>
                </a>
            @endif

            <!-- Next Page Link -->
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <button class="flex items-center justify-center h-8 px-3 text-sm font-medium text-white bg-gray-800 rounded-e hover:bg-gray-900">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </a>
            @else
                <button class="flex items-center justify-center h-8 px-3 text-sm font-medium text-white bg-gray-800 opacity-50 cursor-not-allowed rounded-e" disabled>
                    Next
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            @endif
        </div>
    </div>
@endif