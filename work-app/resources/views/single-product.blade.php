@extends('layouts.mainLayout')
@section('content')
<div class="d-flex justify-content-around">

        <div class="card" style="width: 18rem;">
            <img src="/images/products/{{$product -> image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product -> title}}</h5>
                <p class="card-text">{{$product -> text}}</p>
                <p class="card-text">Цвет: {{$product -> color}}</p>
                <p class="card-text">Бренд: {{$product -> brand}}</p>
                <p class="card-text">Страна: {{$product -> country}}</p>
                <p class="card-text">Гарантия: {{$product -> guarantee}} мес.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


</div>
@endsection
