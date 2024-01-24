
    @extends('layouts.masterLayout')

    @section('content')
        <div class="container">
            <form action="{{ route('post.update', $post -> id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('Название поста')}}</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{$post -> title}}" aria-describedby="emailHelp">
                    {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('Название поста')}}</label>
                    <input type="text" class="form-control" value="{{$post ->detail}}" name="detail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('Название поста')}}</label>
                    <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                    {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                </div>
                <img width="250" height="250" src="/images/{{$post->image}}" alt="">
                <button type="submit" class="btn btn-primary">{{__('Редактировать')}}</button>
            </form>
        </div>

    @endsection


