<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

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
    {{-- end header --}}

    <script src="js/script.js"></script>
</body>
</html>
