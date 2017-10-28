@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($products as $product)

            <div class="col-md-3">
                <img src="http://vignette1.wikia.nocookie.net/bojackhorseman/images/0/02/Bojackhorse.jpg/revision/latest?cb=20151231022811" alt="">
                <br>
                {{$product->name}}
                <br>
                <Addtobasket :product="{{$product}}"></Addtobasket>
            </div>

        @endforeach
    </div>

@endsection