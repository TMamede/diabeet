<th scope="col" class="px-4 py-3" wire:click="setSortBy('{{$nome}}')">
  <button class="flex items-center">
      {{$displayName}}
      @if ($sortBy !== $nome)
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
          </svg>
      @elseif ($sortDir === 'ASC')
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="m4.5 15.75 7.5-7.5 7.5 7.5" />
          </svg>
      @else
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="m19.5 8.25-7.5 7.5-7.5-7.5" />
          </svg>
      @endif

  </button>
</th>