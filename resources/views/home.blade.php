<html>
    <head>
        <title>Tv Store | Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/dropdown.css">


    </head>
    <body>
        <header>
            <div id="menu-bar" class="fa fa-bars"></div>
            <a href="#" class="logo">Tv Store</a>
            <nav class="navbar">
                <a href="#home" class="active1" title="Home"><i class="fa-solid fa-house"></i>   Home</a>
                <select name="kategori" title="Category Produk">
                    <option value="Category">Category</option>
                    <option value="sepatu-pria">Sepatu Pria</option>
                    <option value="sepatu-wanita">Sepatu Wanita</option>
                    <option value="olahraga-outdoor">Olahraga & Outdoor</option>
                    <option value="jam-tangan">Jam Tangan</option>
                    <option value="tas-pria">Tas Pria</option>
                    <option value="tas-wanita">Tas Wanita</option>
                    <option value="pakaian-pria">Pakaian Pria</option>
                    <option value="aksesoris">Aksesoris</option>
                  </select>

                <a href="{{ route('aboutus') }}" title="About Us"><i class="fa-solid fa-address-card"></i> About Us</a>
                <a href="{{ route('contactus') }}" title="Contact Us"> <i class="fa-solid fa-phone"></i> Contact Us</a>
            </nav>
            <div class="icons">
                <a href="{{ route('keranjang') }}"><i class="fa fa-shopping-cart" title="keranjang belanja"></i></a>
                <a href="{{ route('login') }}"><i class="fa fa-user" title="Login"></i></a>
            </div>
        </header>
        <!--end header-->
        <section class="home" id="home">
            <div class="slide-container active">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit

                        </p>
                        <a href="#" id="addCardBtn" class="btn">add to card</a>
                    </div>
                    <br>
                    <div class="image">
                        <img src="img/slide/1.png" class="shoe">
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit

                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <br>
                    <div class="image">
                        <img src="img/slide/2.png" class="shoe">
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit

                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <br>
                    <div class="image">
                        <img src="img/slide/3.png" class="shoe">
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit

                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <br>
                    <div class="image">
                        <img src="img/slide/4.png" class="shoe">
                    </div>
                </div>
            </div>

            <div id="prev" class="fa fa-angle-left" onclick="prev();"></div>
            <div id="next" class="fa fa-angle-right" onclick="next();"></div>
        </section>
        <!--end home-->
        <section class="product" id="product">
            <h1 class="heading">latest <span>Products</span></h1>
            <div class="box-container">
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/1.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <br>

                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/2.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <br>

                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/3.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/5.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/7.png" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/8.png" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end product-->
        <section class="featured" id="fearured">

            <div class="row">
                <div class="image-container">
                    <div class="small-image">
                        <img src="img/product1/1.jpg" alt="" class="featured-image-1">
                        <img src="img/product1/2.jpg" alt="" class="featured-image-1">
                        <img src="img/product1/3.jpg" alt="" class="featured-image-1">
                        <img src="img/product1/4.jpg" alt="" class="featured-image-1">
                    </div>
                    <div class="big-image">
                        <img src="img/product1/1.jpg" alt="" class="big-image-1">
                    </div>
                </div>
                <div class="content">
                    <h3>new nike airmac shoes</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?
                    </p>
                    <div class="price">$90 <span>$120</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

        </section>
        {{-- data --}}

        {{-- end data   --}}

        {{-- footer --}}
        <footer>
            <div class="container">
              <div class="footer-content">
                <p>&copy; 2023 Your Store. All rights reserved.</p>
                <ul class="footer-links">
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Cookie Policy</a></li>
                </ul>
              </div>
            </div>
        </footer>

    </body>
</html>

<script src="js/script.js"></script>
