@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="form-row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категорий {{$count_categories}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалов {{$count_articles}}</span></p>
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
                    <h5 class="list-group-item-heading">{{$category->title}}</h5>
                    <p class="list-group-item-text">
                        {{$category->articles()->count()}}
                    </p>
                </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Создать материал</a>
                @foreach ($articles as $article)
                <a class="list-group-item-action" href="{{route('admin.article.edit', $article)}}">
                    <h5 class="list-group-item-heading">{{$article->title}}</h5>
                    <p class="list-group-item-text">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

