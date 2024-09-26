<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="checkout.css"> <!-- Menghubungkan ke file stylesheet eksternal -->
    
</head>
<body>

    <div class="container">
        
    <div class="back">
        <!-- <a href="home.php"><ion-icon name="chevron-back-circle-outline">Back</ion-icon></a> -->
        <!-- <a href="home.php"><i class="fa-solid fa-arrow-left"></i>Back</ion-icon></a> -->
        <a href="home.php"><img src="./assets/back-xl.svg" alt=""></a>
    </div>
        <header>
            <h1>Swiftshop</h1> <!-- Judul toko online -->
            <div class="shopping">
                <img src="./assets/cart.png"> <!-- Gambar keranjang belanja -->
                <span class="quantity">0</span> <!-- Menampilkan jumlah item dalam keranjang -->
            </div>
        </header>

        <div class="list">
            <!-- Daftar produk akan ditampilkan di sini -->
            
            <!-- Kategori Handphone -->
            <h2>Smartphone</h2> <!-- Judul kategori -->
            
            <!-- Produk pertama -->
            <div class="item" data-id="1">
                <div class="image-container">
                    <img src="image/1.jpg"> <!-- Gambar produk -->
                </div>
                <div class="title">Redmi 9C</div> <!-- Nama produk -->
                <div class="price">1.049.000</div> <!-- Harga produk -->
                <button onclick="addToCart(1)">Add To Cart</button> <!-- Tombol untuk menambahkan produk ke keranjang -->
            </div>
            
            <!-- Produk kedua -->
            <div class="item" data-id="2">
                <div class="image-container">
                    <img src="image/2.jpg">
                </div>
                <div class="title">Redmi 10C</div>
                <div class="price">1.999.000</div>
                <button onclick="addToCart(2)">Add To Cart</button>
            </div>
            
            <!-- Produk ketiga -->
            <div class="item" data-id="3">
                <div class="image-container">
                    <img src="image/3.jpg">
                </div>
                <div class="title">Redmi 10A</div>
                <div class="price">2.999.000</div>
                <button onclick="addToCart(3)">Add To Cart</button>
            </div>

            <!-- Produk keempat -->
            <div class="item" data-id="4">
                <div class="image-container">
                    <img src="image/4.jpg">
                </div>
                <div class="title">Redmi A1</div>
                <div class="price">2.599.000</div>
                <button onclick="addToCart(4)">Add To Cart</button>
            </div>

            <!-- Produk kelima -->
            <div class="item" data-id="5">
                <div class="image-container">
                    <img src="image/5.jpg">
                </div>
                <div class="title">Redmi Note 10S</div>
                <div class="price">2.399.000</div>
                <button onclick="addToCart(5)">Add To Cart</button>
            </div>

            <!-- Produk keenam -->
            <div class="item" data-id="6">
                <div class="image-container">
                    <img src="image/6.jpg">
                </div>
                <div class="title">Redmi Note 10 5G</div>
                <div class="price">2.799.000</div>
                <button onclick="addToCart(6)">Add To Cart</button>
            </div>

            <!-- Produk ketujuh -->
            <div class="item" data-id="7">
                <div class="image-container">
                    <img src="image/7.jpg">
                </div>
                <div class="title">Redmi Note 11</div>
                <div class="price">2.699.000</div>
                <button onclick="addToCart(7)">Add To Cart</button>
            </div>

            <!-- Produk kedelapan -->
            <div class="item" data-id="8">
                <div class="image-container">
                    <img src="image/8.jpg">
                </div>
                <div class="title">POCO M5S</div>
                <div class="price">2.699.000</div>
                <button onclick="addToCart(8)">Add To Cart</button>
            </div>

            <!-- Produk kesembilan -->
            <div class="item" data-id="9">
                <div class="image-container">
                    <img src="image/9.jpg">
                </div>
                <div class="title">POCO C40</div>
                <div class="price">2.699.000</div>
                <button onclick="addToCart(9)">Add To Cart</button>
            </div>

            <!-- Produk kesepuluh -->
            <div class="item" data-id="10">
                <div class="image-container">
                    <img src="image/10.jpg">
                </div>
                <div class="title">POCO M4 Pro</div>
                <div class="price">3.399.000</div>
                <button onclick="addToCart(10)">Add To Cart</button>
            </div>

            <!-- Produk kesebelas -->
            <div class="item" data-id="11">
                <div class="image-container">
                    <img src="image/11.jpg">
                </div>
                <div class="title">Xiaomi 12 Pro</div>
                <div class="price">3.499.000</div>
                <button onclick="addToCart(11)">Add To Cart</button>
            </div>
            
            <div class="item" data-id="11">
                <div class="image-container">
                    <img src="image/11.jpg">
                </div>
                <div class="title">Xiaomi 12 Pro</div>
                <div class="price">3.499.000</div>
                <button onclick="addToCart(11)">Add To Cart</button>
            </div>
            
            <!-- Kategori Ipad -->
            <h2>Ipad</h2>
            
            <!-- Produk pertama dalam kategori Ipad -->
            <div class="item" data-id="12">
                <div class="image-container">
                    <img src="image/2.1.jpg">
                </div>
                <div class="title">Redmi Pad</div>
                <div class="price">3.799.000</div>
                <button onclick="addToCart(12)">Add To Cart</button>
            </div>
            
            <!-- Produk kedua dalam kategori Ipad -->
            <div class="item" data-id="13">
                <div class="image-container">
                    <img src="image/2.2.jpg">
                </div>
                <div class="title">Xiaomi Pad 5</div>
                <div class="price">4.999.000</div>
                <button onclick="addToCart(13)">Add To Cart</button>
            </div>
            
            <div class="item" data-id="13">
                <div class="image-container">
                    <img src="image/2.2.jpg">
                </div>
                <div class="title">Xiaomi Pad 5</div>
                <div class="price">4.999.000</div>
                <button onclick="addToCart(13)">Add To Cart</button>
            </div>
            <!-- Kategori Jam -->
            <h2>Smartwatch</h2>
            
            <!-- Produk pertama dalam kategori Jam -->
            <div class="item" data-id="14">
                <div class="image-container">
                    <img src="image/3.1.jpg">
                </div>
                <div class="title">Smartwatch S1 Active</div>
                <div class="price">699.000</div>
                <button onclick="addToCart(14)">Add To Cart</button>
            </div>
            
            <!-- Produk kedua dalam kategori Jam -->
            <div class="item" data-id="15">
                <div class="image-container">
                    <img src="image/3.2.jpg">
                </div>
                <div class="title">Redmi Watch 2 Lite</div>
                <div class="price">899.000</div>
                <button onclick="addToCart(15)">Add To Cart</button>
            </div>
            
             <!-- Produk kedua dalam kategori Jam -->
             <div class="item" data-id="15">
                <div class="image-container">
                    <img src="image/3.2.jpg">
                </div>
                <div class="title">Redmi Watch 2 Lite</div>
                <div class="price">899.000</div>
                <button onclick="addToCart(15)">Add To Cart</button>
            </div>
            <!-- Kategori TV -->
            <h2>TV</h2>
            
            <!-- Produk pertama dalam kategori TV -->
            <div class="item" data-id="16">
                <div class="image-container">
                    <img src="image/4.1.jpg">
                </div>
                <div class="title">Xiomi TV Q1E 55</div>
                <div class="price">2.999.000</div>
                <button onclick="addToCart(16)">Add To Cart</button>
            </div>
            
            <!-- Produk kedua dalam kategori TV -->
            <div class="item" data-id="17">
                <div class="image-container">
                    <img src="image/4.2.jpg">
                </div>
                <div class="title">Xiomi TV P1E 65</div>
                <div class="price">2.799.000</div>
                <button onclick="addToCart(17)">Add To Cart</button>
            </div>
            
             <!-- Produk kedua dalam kategori TV -->
             <div class="item" data-id="17">
                <div class="image-container">
                    <img src="image/4.2.jpg">
                </div>
                <div class="title">Xiomi TV P1E 65</div>
                <div class="price">2.799.000</div>
                <button onclick="addToCart(17)">Add To Cart</button>
            </div>

            <!-- Kategori Laptop -->
            <h2>Redmibook</h2>
            
            <!-- Produk pertama dalam kategori Laptop -->
            <div class="item" data-id="20">
                <div class="image-container">
                    <img src="image/5.1.jpg">
                </div>
                <div class="title">Redmi Book 15</div>
                <div class="price">4.999.000</div>
                <button onclick="addToCart(20)">Add To Cart</button>
            </div>

            <div class="item" data-id="20">
                <div class="image-container">
                    <img src="image/5.1.jpg">
                </div>
                <div class="title">Redmi Book 15</div>
                <div class="price">4.999.000</div>
                <button onclick="addToCart(20)">Add To Cart</button>
            </div>

            <div class="item" data-id="20">
                <div class="image-container">
                    <img src="image/5.1.jpg">
                </div>
                <div class="title">Redmi Book 15</div>
                <div class="price">4.999.000</div>
                <button onclick="addToCart(20)">Add To Cart</button>
            </div>
        </div>
    </div>

    <div class="cart">
        <h1>CART</h1> <!-- Judul keranjang belanja -->
        <ul class="listCart">
            <!-- Daftar produk dalam keranjang akan ditampilkan di sini -->
        </ul>
        <div class="checkOut">
            <div class="total">0</div> <!-- Total harga produk dalam keranjang -->
            <div class="closeShopping">Close</div> <!-- Tombol untuk menutup keranjang belanja -->
        </div>
    </div>

    <script src="checkout.js"></script> <!-- Menghubungkan ke file JavaScript eksternal -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>