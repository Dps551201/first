@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="form-row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default"
                   href="{{route('admin.category.create')}}">Создать категорию</a>
                @foreach ($categories as $category)
                <a class="list-group-item-action" href="{{route('admin.category.edit', $category)}}">
                    <h4 class="list-group-item-heading">Категория первая</h4>

                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Создать материал</a>
                <a class="list-group-item-action" href="#">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection

