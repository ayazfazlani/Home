@extends('layout')



@section('content')

<div class="content-1">
<div class="products">
    {{-- <div class="product">
        <a href="/view">
            <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
        </a>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div>
    <div class="product">
        <div class="img"></div>
        <h3>title</h3>
        <P>product description</P>
        <button>add to cart</button>
    </div> --}}
    @foreach ($data as $id => $user)
        
    <div class="product">
        <a href="/view/{{$user->id}}">
        <div class="img"><img class="img" src="/images/{{$user->image}}" alt=""></div>
        <h3>{{ $user->title}}</h3>
        <P>see more<span style="float: right"> in-stock: {{$user->stock}}</span> </P> 
        <button>add to cart </button> <span style="float: right">{{$user->price}}$</span>
        </a>
    </div>

    @endforeach

   
</div>
</div>
    
@endsection