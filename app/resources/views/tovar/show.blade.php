@extends('layouts.masterLayout')

@section('content')

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$category -> name}}</h5>
                <p class="card-text">{{$category -> text}}</p>
                <p class="card-text">
                    @if($category -> is_active == 1)
                        Активен
                    @else
                        Неактивен
                    @endif
                </p>
                <a href="{{route('category.index')}}" class="btn btn-primary">Вернутся</a>
            </div>
        </div>
    </div>


@endsection
