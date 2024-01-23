@extends('layouts.masterLayout')

@section('content')
    <div class="container">
        <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название поста')}}</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
{{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название поста')}}</label>
                <input type="text" class="form-control" name="detail" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Название поста')}}</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <button type="submit" class="btn btn-primary">{{__('Создать')}}</button>
        </form>
    </div>

@endsection
