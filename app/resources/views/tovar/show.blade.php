@extends('layouts.masterLayout')

@section('content')



        <div class="container">
            @forelse($products as $product)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="images/products/{{$product -> image}}" alt="" class="card-img">
                            <h5 class="card-title">{{$product -> name}}</h5>
                            <p class="card-text">{{$product -> text}}</p>
                            <p>{{$product -> category -> name}}</p>
                            <p class="card-text">
                                @if($product-> is_active == 1)
                                    Активен
                                @else
                                    Неактивен
                                @endif
                            </p>
                            <a href="{{route('category.index')}}" class="btn btn-primary">Вернутся</a>
                        </div>
                    </div>
            @empty
            @endforelse

        </div>




@endsection
