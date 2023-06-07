<html>
    <head>
        <title>Tv Store | Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/dropdown.css">
        <style>

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;

}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  margin-top: 120px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
        </style>

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

        <div class="about-section">
            <h1>About Us Page</h1>
            <p>Some text about who we are and what we do.</p>
            <p>Resize the browser window to see that this page is responsive by the way.</p>
          </div>

          <h2 style="text-align:center">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="https://img.okezone.com/content/2023/04/14/406/2798468/inilah-perbedaan-cewek-jepang-dan-korea-mana-lebih-menggoda-75HW8V4MBm.JPG" alt="Jane" style="width:100%">
                <div class="container">
                  <h2>Jane Doe</h2>
                  <p class="title">CEO & Founder</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>jane@example.com</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="https://img.okezone.com/content/2023/04/14/406/2798468/inilah-perbedaan-cewek-jepang-dan-korea-mana-lebih-menggoda-75HW8V4MBm.JPG" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>Mike Ross</h2>
                  <p class="title">Art Director</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>mike@example.com</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="https://img.okezone.com/content/2023/04/14/406/2798468/inilah-perbedaan-cewek-jepang-dan-korea-mana-lebih-menggoda-75HW8V4MBm.JPG" alt="John" style="width:100%">
                <div class="container">
                  <h2>John Doe</h2>
                  <p class="title">Designer</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>john@example.com</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
          </div>

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
