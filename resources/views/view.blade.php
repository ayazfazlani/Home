@extends('layout')


@section('content')

<div class="content-1">
    @foreach ($data as $id => $user)
    <div class="view">
        <div class="detail">
           
           <div class="image">
             <img class="image" src="/images/{{$user->image}}" alt="image" >
           </div>
           
        </div>
       
        <div class="details">
            <h1> {{$user->title}}</h1>
            <p>Description : {{$user->description}}</p>
            <p>In Stock : <span style="color: rgb(11, 245, 85)">{{$user->stock}} items</span></p>
            <p>Product Catagory : {{$user->catagory}}</p>
            <p>Price : {{$user->price}}$</p>
            <a href=""><button>AddToCart</button></a>
        </div>
       
     </div>
     @endforeach
</div>
    
@endsection