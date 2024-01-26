@extends('layouts.masterLayout')

@section('content')
    <div class="container">
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название категории')}}</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Описание категории')}}</label>
                <textarea class="form-control" name="text" id="exampleInputEmail1" aria-describedby="emailHelp">
                </textarea>

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
            <button type="submit" class="btn btn-primary">{{__('Создать')}}</button>
        </form>
    </div>

@endsection
