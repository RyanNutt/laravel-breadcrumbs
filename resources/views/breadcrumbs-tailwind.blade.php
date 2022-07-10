{{-- @see https://tailwind-elements.com/docs/standard/navigation/breadcrumbs/ --}}
<nav class="rounded-md w-full">
    <ol class="list-none flex">
        @foreach ($crumbs as $crumb)
            @if (!empty($crumb['url']))
                <li>
                    <a href="{{ $crumb['url'] }}" class="text-blue-600 hover:text-blue-700">{{ $crumb['title'] }}</a>
                </li>
            @else
                <li class="text-gray-500">{{ $crumb['title'] }}</li>
            @endif
            @if (!$loop->last)
                <li><span class="text-gray-500 mx-2">{{ config('breadcrumbs.separator', '/') }}</span></li>
            @endif
        @endforeach
    </ol>
</nav>
