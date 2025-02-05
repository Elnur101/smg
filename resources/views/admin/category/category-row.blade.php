<tr>
    <td>
        <img alt="Изображение" class="table-avatar" src="{{ asset('/storage/categories/'.$category->image) }}" width="28">
    </td>
    <td>
        @if ($category->children->isNotEmpty())
            <a href="javascript:;" onclick="toggleSubcategories({{ $category->id }})">
                {{ str_repeat('— ', $level) }} {{ $category->name }} <span id="toggle-icon-{{ $category->id }}">▶</span>
            </a>
        @else
            {{ str_repeat('— ', $level) }} {{ $category->name }}
        @endif
    </td>
    <td>{{ $category->services->pluck('name')->implode(', ') ?: 'Нет услуг' }}</td>
    <td>
        <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
    </td>
</tr>

@if ($category->children->isNotEmpty())
    @foreach ($category->children as $child)
        @include('admin.category.category-row', ['category' => $child, 'level' => $level + 1])
    @endforeach
@endif

