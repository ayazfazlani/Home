@extends('layout')


@section('content')
<div class="content-1">
<div class="row">
    <h1>Cart-Page</h1>
    <div class="items">
     <h1>Image</h1>
     <h1>Title</h1>
     <h1>Quantity</h1>
     <h1>Price</h1>
    </div>
    {{-- <div class="items">
     <div class="imag">image</div>
     <h3>product-1</h3>
     <input type="number" placeholder="1" class="prdt-input">
     <h3>30$</h3>
    </div>
    <div class="items">
        <div class="imag">image</div>
     <h3>product-1</h3>
     <input type="number" placeholder="1" class="prdt-input">
     <h3>30$</h3>
    </div> --}}
    @foreach ($data as $id => $user)
    <div class="items">
        <div class="imag"><img src="/images/{{$user->image}}" alt="" class="imag"></div>
     <h3>{{$user->title}}</h3>
     <input type="number" placeholder="1" class="prdt-input">
     <h3>{{$user->price}}$</h3>
    </div>
    @endforeach

    <div class="payout">
    <h1>total</h1>
    <h3>30$</h3>
    <div class="btn"><a href="/checkout"><button>Check Out</button></a></div>
    </div>
 </div>
</div>
@endsection