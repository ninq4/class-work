@extends('layouts.masterLayout')
@section('content')
    <div class="container">
        @forelse($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product -> name}}</h5>
                    <p class="card-text">{{$product -> text}}</p>
                    <a href="{{route('product', $product-> id)}}" class="btn btn-primary">{{__('Подробнее')}}</a>
                </div>
            </div>
        @empty
        @endforelse

    </div>
@endsection
