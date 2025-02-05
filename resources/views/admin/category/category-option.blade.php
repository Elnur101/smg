@foreach ($children as $child)
    <option value="{{ $child->id }}">{{ $prefix }} {{ $child->name }}</option>
    @if ($child->children->isNotEmpty())
        @include('admin.categories.category-option', ['children' => $child->children, 'prefix' => $prefix . '--'])
    @endif
@endforeach
