@extends('layout')

@section('content')
    <div class="content-1">
         <div class="checkout">
        <form action="{{ route('add') }}" method="post" enctype="multipart/form-data">
            @csrf
           <div class="input">
               <input type="text" name="title" placeholder="title">
           </div>
           <div class="input">
               <input type="text" name="description" placeholder="description">
           </div>
           <div class="input">
               <input type="text" name="catagory" placeholder="catagory">
          
           </div>
           <div class="input">
               <input type="text" name="price" placeholder="price">
           </div>
           <div class="input">
            <input type="number" name="stock" placeholder="in-stosk">
        </div>
           <div class="input">
               <input type="file" name="image" placeholder="image">
           </div>
           
           <button type="submit">create now</button>
       </form>
    </div>
@endsection