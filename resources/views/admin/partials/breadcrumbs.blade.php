@unless ($breadcrumbs->isEmpty())
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
    @foreach ($breadcrumbs as $breadcrumb)

    @if ($breadcrumb->url && !$loop->last)
    <li class="breadcrumb-item text-muted">
        <a href="{{ $breadcrumb->url }}" class="text-muted text-hover-primary">{{ $breadcrumb->title }}</a>
    </li>
    @else
    <li class="breadcrumb-item text-dark">{{ $breadcrumb->title }}</li>
    @endif

    @unless($loop->last)
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    @endif

    @endforeach
</ul>
@endunless
