
@extends('layouts.masterLayout')

@section('content')
    <div class="container">
        <form action="{{ route('category.update', $category -> id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название категории')}}</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$category -> name}}" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Описание категории')}}</label>
                <input type="text" class="form-control" value="{{$category ->text}}" name="text" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">{{__('Состояние категории:')}}</label>
                <label for="exampleInputEmail1"  class="form-label">
                    @if($category -> is_active == 1)
                        Активен
                    @else
                        Неактивен
                    @endif
                </label>

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" name="is_active" id="inputGroupSelect01">
                    <option value="1">Активен</option>
                    <option value="0">Неактивен</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">{{__('Редактировать')}}</button>
        </form>
    </div>

@endsection


