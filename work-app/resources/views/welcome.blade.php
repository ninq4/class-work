@extends('layouts.mainLayout')
@section('content')
    <div class="btn-group d-flex justify-content-center">
        @forelse($categories as $category)
            <a href="{{route('products', $category -> id)}}" class="btn btn-primary" aria-current="page">{{$category -> name}}</a>
        @empty
        @endforelse
    </div>
@endsection
