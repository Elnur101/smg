<li>
    <a href="{{ route('category.service', $category->id) }}">{{ $category->name }}</a>

    @if($category->children->isNotEmpty())
        <ul class="sub-menu">
            @foreach($category->children as $child)
                @include('layouts.menu-item', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>
