@extends('layout')

@section('content')
<div class="content-1">
    <div class="checkout">
        @foreach ($data as $id => $user)
        <form action="/update/{{ $user->id}}" method="post" enctype="multipart/form-data">
            @csrf
           <div class="input">
               <input type="text" name="title" placeholder="title" value="{{ $user->title}}">
           </div>
           <div class="input">
               <input type="text" name="description" placeholder="description" value="{{ $user->description}}">
           </div>
           <div class="input">
               <input type="text" name="catagory" placeholder="catagory" value="{{ $user->catagory}}">
          
           </div>
           <div class="input">
               <input type="text" name="price" placeholder="price" value="{{ $user->price}}">
           </div>
           <div class="input">
            <input type="number" name="stock" placeholder="in-stosk" value="{{ $user->stock}}">
        </div>
           <div class="input">
               <input type="file" name="image" placeholder="image" value="{{ $user->image}}">
           </div>
           
           <button type="submit">UpdateNow</button>
       </form>
       @endforeach
</div>
@endsection