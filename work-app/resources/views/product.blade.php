@extends('layouts.mainLayout')
@section('content')
<div class="d-flex justify-content-around">
    @forelse($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="/images/products/{{$product -> image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product -> title}}</h5>
                <p class="card-text">{{$product -> text}}</p>
                <a href="{{route('product', $product -> id)}}" class="btn btn-primary">Посмотреть полностью</a>
            </div>
        </div>

    @empty
        <h1>Ничего не найдено</h1>
    @endforelse

</div>
@endsection
