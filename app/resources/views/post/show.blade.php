@extends('layouts.masterLayout')

@section('content')

    <div class="container">
        <div class="card" style="width: 18rem;">
            <img height="250" src="/images/{{$post-> image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$post -> title}}</h5>
                <p class="card-text">{{$post -> detail}}</p>
                <a href="{{route('post.index')}}" class="btn btn-primary">Вернутся</a>
            </div>
        </div>
    </div>


@endsection
