@extends('layouts.mainLayout')

@section('content')

    <div class="container">
        <div class="row">
            @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            <a href="{{route('product.create') }}" class="btn btn-primary">Новый товар</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Название товара')}}</th>
                    <th scope="col">{{__('Описание товара')}}</th>
                    <th scope="col">{{__('Категория товара')}}</th>
                    <th scope="col">{{__('Цвет товара')}}</th>
                    <th scope="col">{{__('Бренд товара')}}</th>
                    <th scope="col">{{__('Страна-производитель товара')}}</th>
                    <th scope="col">{{__('Картинка')}}</th>
                    <th scope="col">{{__('Активность')}}</th>
                    <th scope="col">{{__('Действие')}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{$product -> id}}</th>
                        <td>{{$product -> title}}</td>
                        <td> {{$product -> text}}</td>
                        <td> {{$product -> category -> name }}</td>
                        <td> {{$product -> color}}</td>
                        <td> {{$product -> brand}}</td>
                        <td> {{$product -> country}}</td>
                        <td>
                            <img src="/images/products/{{$product -> image}}" alt="">
                        </td>
                        <td>
                            @if ($product->is_active == 0)
                                <div class="alert alert-danger text-center">
                                    {{ __('Не активна') }}
                                </div>
                            @else
                                <div class="alert alert-success text-center">
                                    {{ __('Активна') }}
                                </div>
                            @endif
                        </td>

                        <td>
                            <a href="{{route('product.edit', $product->id)}}" class="btn btn-success mb-3">Редактировать</a>
{{--                            <a href="{{route('product.show', $product-> category -> id)}}" class="btn btn-warning mb-3">Посмотреть все товары с этой категорией</a>--}}
                            <form class="mb-3" action="{{route('product.delete', $product -> id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{__('Удалить')}}</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-info" role="alert">
                        {{__('Товар не найден')}}
                    </div>

                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
