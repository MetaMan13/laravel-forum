@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex flex-col">
        <div class="self-center mb-6 w-full text-center">
            <h2 class="text-lg dark:text-gray-300">
                Showing posts from {{ $paginator->firstItem()}} to {{ $paginator->lastItem() }}
            </h2>
        </div>

        <div class="flex justify-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 cursor-pointer leading-5 rounded-md dark:focus:ring-blue-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 dark:hover:text-blue-300 dark:hover:border-blue-300 dark:focus:text-blue-300">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-gray-50 border border-gray-200 leading-5 rounded-md hover:text-blue-600 focus:outline-none focus:ring-1 ring-gray-200 focus:border-blue-600 active:bg-gray-100 active:text-gray-700 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 dark:hover:text-blue-300 dark:hover:border-blue-300 dark:focus:ring-blue-300 dark:focus:text-blue-300">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-gray-50 border border-gray-200 leading-5 rounded-md hover:text-blue-600 focus:outline-none focus:ring-1 ring-gray-300 focus:border-blue-600 active:bg-gray-100 active:text-gray-700 dark:focus:ring-blue-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 dark:hover:text-blue-300 dark:hover:border-blue-300 dark:focus:text-blue-300">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 cursor-default leading-5 rounded-md dark:focus:ring-blue-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 dark:hover:text-blue-300 dark:hover:border-blue-300 dark:focus:text-blue-300">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>
    </nav>
@endif
