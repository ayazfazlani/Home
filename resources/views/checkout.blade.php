@extends('layout')

@section('content')
<div class="content-1">
<div class="checkout">
  <form action="">
     <div class="input">
         <input type="text" placeholder="fname">
     </div>
     <div class="input">
         <input type="text" placeholder="lastname">
     </div>
     <div class="input">
         <input type="text" placeholder="address">
    
     </div>
     <div class="input">
         <input type="text" placeholder="phone number">
     </div>
     <div class="input">
         <input type="email" placeholder="email">
     </div>
     <h3>total: <span> 90$</span></h3>
     <button type="submit">Pay Now</button>
 </form>
</div>
</div>
@endsection