@extends('layouts.mainLayout')

@section('content')

    <div class="container">
        <div class="row">
            @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            <a href="{{route('category.create') }}" class="btn btn-primary">Новая категория</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название категории</th>
                    <th scope="col">Описание категории</th>
                    <th scope="col">Активность</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <th scope="row">{{$category -> id}}</th>
                        <td>{{$category -> name}}</td>
                        <td> {{$category -> text}}</td>
                            @if($category -> is_active == 1)
                                <td class="alert alert-success text-center">Активен</td>
                            @else
                                <td class="alert alert-danger text-center">Неактивен</td>
                            @endif

                        <td>
                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-success mb-3">Редактировать</a>
                            <a href="{{route('category.show', $category->id)}}" class="btn btn-warning mb-3">Посмотреть полностью</a>
                            <form class="mb-3" action="{{route('category.delete', $category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{__('Удалить')}}</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-info" role="alert">
                        {{__('Категории не найдены')}}
                    </div>

                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
