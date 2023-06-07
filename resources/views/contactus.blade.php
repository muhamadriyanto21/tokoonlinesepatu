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
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
}

body {
    background: #007a8d;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: "Montserrat", sans-serif;
    font-size: 10px;
    height: 100vh;
    margin: -20px 0 50px;
    padding: 10px;
}

.container {
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 522px;
    min-width: 370px;
    margin-top: 150px
}

.card-container {
    display: flex;
}

.left {
    flex: 1;
    height: 480px;
    background-color: #00b4cf;
}

.right {
    display: flex;
    flex: 1;
    height: 460px;
    background-color: #ffffff;
    justify-content: center;
    align-items: center;
}

.left {
    display: flex;
    flex: 1;
    height: 522px;
    justify-content: center;
    align-items: center;
    color: #ffffff;
}


.left-container {
    height: 50%;
    width: 80%;
    text-align: center;
    line-height: 22px
}

.left p {
    font-size: 0.9rem;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.right-container {
    width: 70%;
    height: 80%;
    text-align: center;
}

input,
textarea {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    font-size: 0.8rem;
}

input:focus,
textarea:focus {
    outline: 1px solid #00b4cf;
}

button {
    border-radius: 20px;
    border: 1px solid #00b4cf;
    background-color: #00b4cf;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-out;
    cursor: pointer;
}

button:hover {
    opacity: 0.7;
}

textarea {
    height: 90px;
}
/* responsive */

@media only screen and (max-width: 600px){
    .left {
        display: none;
    }

    .lg-view {
        display: none;
    }
}

@media only screen and (min-width: 600px) {
    .sm-view {
        display: none;
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
    {{-- end header --}}

    <div class="container">

        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Tentang Kami</h2>
                    <p>Selamat datang di TV Store, toko sepatu online yang siap memenuhi kebutuhan sepatu Anda dengan koleksi terbaik dan terbaru. Kami dengan bangga mempersembahkan pengalaman berbelanja sepatu yang menyenangkan dan memuaskan.

                        Kami di TV Store memiliki dedikasi yang tinggi untuk memberikan produk berkualitas tinggi kepada pelanggan kami. Setiap pasang sepatu yang kami tawarkan dipilih dengan cermat untuk memastikan kualitas terbaik dan gaya yang trendi. Kami bekerja sama dengan merek-merek ternama dan produsen sepatu terpercaya untuk memastikan kepuasan Anda.
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form action="">
                        <h2 class="lg-view">Hubungi Kami</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" placeholder="Nama">
                        <input type="email" placeholder="Alamat Email">
                        <input type="text" placeholder="Perusahaan" autocomplete="off">
                        <input type="phone" placeholder="Telepone" autocomplete="off">
                        <textarea rows="10" placeholder="Pesan"></textarea>
                        <button>
                            <a href="https://wa.me/085711923056?text=Halo%20admin%20saya%20ingin%20pesan%20sepatu">Kirim</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="js/script.js"></script>
</body>
</html>
