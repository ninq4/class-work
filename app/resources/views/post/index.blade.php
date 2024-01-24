@extends('layouts.masterLayout')

@section('content')
    <div class="container">

        @if($message = Session::get('success'))
            <p>{{$message}}</p>
        @endif

        <div class="row mb-3">
            <a href={{route('post.create')}} class="btn btn-primary">{{__('Новый пост')}}</a>
        </div>
        <div class="row mb-3">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название поста</th>
                    <th scope="col">Описание поста</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <th scope="row">{{$post -> id}}</th>
                        <td>{{$post -> title}}</td>
                        <td>{{$post -> detail}}</td>
                        <td><img width="150" height="150" src="/images/{{$post -> image}}" alt=""></td>
                        <td class="">
                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-success mb-3">Редактировать</a>
                            <a href="{{route('post.show', $post->id)}}" class="btn btn-warning mb-3">{{__('Текст подробнее')}}</a>
                            <form class="mb-3" action="{{route('post.delete', $post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{__('Удалить')}}</button>
                            </form>

                        </td>
                    </tr>
                @empty
                    {{__('Данные не найдены')}}
                @endforelse

                </tbody>
            </table>
        </div>

    </div>
@endsection
