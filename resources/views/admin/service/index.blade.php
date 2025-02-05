@extends('layouts.admin')
@section('content')
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
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{$service->name}}</td>
                                        <td>{{$service->description}}</td>
                                        <td>{{$service->price}}</td>
                                        <td>{{$service->category->name}}</td>
                                        <td>
                                        <td>
                                            <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('admin.service.edit', $service) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>


                </div>
            </div>
        </div>


    </div>
@endsection

