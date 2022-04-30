@unless ($breadcrumbs->isEmpty())
<nav class="container mx-auto">
    <ol class="rounded flex flex-wrap text-lg">
        @foreach ($breadcrumbs as $breadcrumb)

        @if ($breadcrumb->url && !$loop->last)
        <li>
            <a href="{{ $breadcrumb->url }}"
                class="text-slate-800/70 hover:text-slate-800 hover:underline focus:underline">
                {{ $breadcrumb->title }}
            </a>
        </li>
        @else
        <li class="text-slate-800 font-semibold">
            {{ $breadcrumb->title }}
        </li>
        @endif

        @unless($loop->last)
        <li class="text-gray-500 px-4">
            /
        </li>
        @endif

        @endforeach
    </ol>
</nav>
@endunless
