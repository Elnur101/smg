@extends('layouts.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success mt-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>{{session('success')}}</h4>
        </div>
    @endif
    <div class="page-header">
        <h3 class="fw-bold mb-3">DataTables.Net</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="basic-datatables"
                                class="display table table-striped table-hover"
                            >
                                <thead>
                                <tr>
                                    <th>Изображение</th>
                                    <th>Категория</th>
                                    <th>Услуги</th>
                                    <th>Действие</th>

                                </tr>
                                </thead>
                                <tbody>
{{--                                @forelse($categories as $category)--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <img alt="Изображение" class="table-avatar" src="{{asset('/storage/categories/'.$category->image)}}" width="28">--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="javascript:;" onclick="toggleSubcategories({{$category->id}})">--}}
{{--                                                {{ $category->name }}--}}
{{--                                                @if ($category->children->isNotEmpty())--}}
{{--                                                    <span id="toggle-icon-{{ $category->id }}">▶</span>--}}
{{--                                                @endif--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>{{$category->services->pluck('name')->implode(', ') ? : 'Нет услуг'}}</td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>--}}
{{--                                            <a href="{{route('admin.category.edit',$category)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>--}}
{{--                                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    @if($category->children->isNotEmpty())--}}
{{--                                        <tr id="subcategories-{{$category->id}}" class="subcategories" style="display: none;">--}}
{{--                                            <td colspan="4">--}}
{{--                                                <ul>--}}
{{--                                                    @foreach($category->children as $child)--}}
{{--                                                        <li>--}}
{{--                                                            {{ $child->name }}--}}
{{--                                                            @if ($child->services->isNotEmpty())--}}
{{--                                                                ({{ $child->services->pluck('name')->implode(', ') }})--}}
{{--                                                            @else--}}
{{--                                                                (Нет услуг)--}}
{{--                                                            @endif--}}
{{--                                                        </li>--}}
{{--                                                    @endforeach--}}
{{--                                                </ul>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endif--}}
{{--                                @empty--}}
{{--                                    <h1>Нет категории</h1>--}}
{{--                                @endforelse--}}
                                    @foreach ($categories as $category)
                                        @include('admin.category.category-row', ['category' => $category, 'level' => 0])
                                    @endforeach

                                </tbody>
                            </table>
                        </div>


                </div>
            </div>
        </div>


    </div>
@endsection

