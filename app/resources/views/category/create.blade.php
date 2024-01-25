@extends('layouts.masterLayout')

@section('content')
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название категории')}}</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Описание категории')}}</label>
                <textarea class="form-control" name="detail" id="exampleInputEmail1" aria-describedby="emailHelp">
                </textarea>
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option value="0">Активен</option>
                    <option value="1">Неактивен</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">{{__('Создать')}}</button>
        </form>
    </div>

@endsection
