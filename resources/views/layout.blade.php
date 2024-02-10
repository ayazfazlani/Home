<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>fashion</title>
</head>
<body>
      <div class="nav1">
        <p>This is amazing
        </p>
      </div>
      <div class="header">
        <h1>FASHION</h1>
        <p>Best place to Buy</p>
      </div>
      <div class="nav">
        <a href="/">Home</a>
        <a href="/products">Shop</a>
        <a href="/cart">Cart</a>
        <a href="/dashboard">admin</a>
      </div>

      <div class="main">
        <div class="sidebar">
            <h3>Title</h3>
            <div class="img-1"><p>fakeimage</p></div>
            <div class="img-1"><p>fakaimage</p></div>
            <div class="img-1"><p>fakaimage</p></div>
            <div class="img-1"><p>fakaimage</p></div>
            <p>Some text here</p>
            <div><img src="/images\testimonial-1.jpg" alt="" style="width: 100%; height:100%; border-radius: 50px"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem reiciendis iure reprehenderit consequatur omnis saepe temporibus tempore ipsum dolor sunt.</p>
        </div>
        {{-- {{-- <div class="content"> --}}

           <!-- home page -->

         {{-- <h3>Main Content</h3>
            <p>some text here</p>
            <div class="img-1"><p>fakeimge</p></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perspiciatis inventore, doloremque architecto consectetur nam esse enim sint quasi sunt maxime iusto tenetur, accusamus iste aliquam accusantium. Excepturi, facere magnam.</p>
            <div class="img-1"><p>fakeimage</p></div>  --}} 
            
            <!-- prodct page -->

            <!-- <div class="products">
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
            </div> -->
          
            <!-- cartpage -->
         <!-- <div class="row">
            <h1>Cart-Page</h1>
            <div class="items">
             <h1>Image</h1>
             <h1>Title</h1>
             <h1>Quantity</h1>
             <h1>Price</h1>
            </div>
            <div class="items">
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
            </div>
            <div class="items">
                <div class="imag">image</div>
             <h3>product-1</h3>
             <input type="number" placeholder="1" class="prdt-input">
             <h3>30$</h3>
            </div>
        
        
            <div class="payout">
            <h1>total</h1>
            <h3>30$</h3>
            <div class="btn"><button>Pay Now</button></div>
            </div>
         </div> -->

         
         <!-- checkout-page -->
       {{-- <div class="checkout">
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
       </div> --}}
       
      @yield('content')

        </div>
      </div>
      
      



      <div class="footer">
        <p>this is footer area</p>
      </div>
</body>
</html>