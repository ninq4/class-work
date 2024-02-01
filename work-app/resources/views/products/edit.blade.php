
@extends('layouts.mainLayout')

@section('content')
    <div class="container">

        <form action="{{route('product.update', $product -> id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Изображение товара')}}</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Категория</label>
                </div>
                <select class="custom-select" name="category_id" id="inputGroupSelect01">
                    @foreach($categories as $category)
                        <option value="{{$category -> id}}">{{$category -> name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название товара')}}</label>
                <input type="text" class="form-control" value="{{$product -> title}}" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Описание товара')}}</label>
                <input class="form-control" value="{{$product -> text}}" name="text" id="exampleInputEmail1" aria-describedby="emailHelp">


            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Цвет товара')}}</label>
                <input type="text" class="form-control" value="{{$product -> color}}" name="color" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Бренд товара')}}</label>
                <input type="text" class="form-control" value="{{$product -> brand}}" name="brand" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Страна производитель')}}</label>
                <input type="text" class="form-control" value="{{$product -> country}}" name="country" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Срок гарантии товара')}}</label>
                <input type="number" class="form-control" value="{{$product -> guarantee}}" name="guarantee" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Статус</label>
                </div>
                <select class="custom-select" name="is_active" id="inputGroupSelect01">
                    <option value="1">Активен</option>
                    <option value="0">Неактивен</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">{{__('Создать')}}</button>
        </form>


    </div>

@endsection


