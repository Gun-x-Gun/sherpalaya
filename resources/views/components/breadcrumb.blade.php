<div class="breadcrumbs mt-2  2xl:mx-44 mx-4">
    <ul>
        @foreach ($breadcrumbs as $breadcrumb)
            <li>
                @if (!empty($breadcrumb['url']))
                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                @else
                    <span aria-current="page">{{ $breadcrumb['name'] }}</span>
                @endif
            </li>
            @if (!$loop->last)
                <li class="breadcrumbs-separator rtl:rotate-180">
                    <span class="icon-[tabler--chevron-right]"></span>
                </li>
            @endif
        @endforeach
    </ul>
</div>
