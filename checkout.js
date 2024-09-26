let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCart = document.querySelector('.listCart');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
});

closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
});

let products = [
    {
        id: 1,
        name: 'Redmi 9C',
        image: '1.jpg',
        price: 1049000
    },
    {
        id: 2,
        name: 'Redmi 10C',
        image: '2.jpg',
        price: 1999000
    },
    {
        id: 3,
        name: 'Redmi 10A',
        image: '3.jpg',
        price: 2999000
    },
    {
        id: 4,
        name: 'Redmi A1',
        image: '4.jpg',
        price: 2599000
    },
    {
        id: 5,
        name: 'Redmi Note 10S',
        image: '5.jpg',
        price: 2399000
    },
    {
        id: 6,
        name: 'Redmi Note 10 5G',
        image: '6.jpg',
        price: 2799000
    },
    {
        id: 7,
        name: 'Redmi Note 11',
        image: '7.jpg',
        price: 2699000
    },
    {
        id: 8,
        name: 'POCO M5S',
        image: '8.jpg',
        price: 2699000
    },
    {
        id: 9,
        name: 'POCO C40',
        image: '9.jpg',
        price: 2699000
    },
    {
        id: 10,
        name: 'POCO M4 Pro',
        image: '10.jpg',
        price: 3399000
    },
    {
        id: 11,
        name: 'Xiaomi 12 Pro',
        image: '11.jpg',
        price: 3499000
    },
    {
        id: 12,
        name: 'Redmi Pad',
        image: '2.1.jpg',
        price: 3799000
    },
    {
        id: 13,
        name: 'Xiaomi Pad 5',
        image: '2.2.jpg',
        price: 4999000
    },
    {
        id: 14,
        name: 'Smartwatch S1 Active',
        image: '3.1.jpg',
        price: 699000
    },
    {
        id: 15,
        name: 'Redmi Watch 2 Lite',
        image: '3.2.jpg',
        price: 899000
    },
    {
        id: 16,
        name: 'Xiomi TV Q1E 55',
        image: '4.1.jpg',
        price: 2999000
    },
    {
        id: 17,
        name: 'Xiomi TV P1E 65',
        image: '4.2.jpg',
        price: 2799000
    },
    {
        id: 18,
        name: 'Xiomi TV A2 43',
        image: '4.3.jpg',
        price: 2699000
    },
    {
        id: 19,
        name: 'Xiomi A2 55',
        image: '4.4.jpg',
        price: 2699000
    },
    {
        id: 20,
        name: 'Redmi Book 15',
        image: '5.1.jpg',
        price: 4999000
    },
];

let listCarts = new Array(products.length).fill(null);

function addToCart(key) {
    const existingCartItem = listCarts.find(item => item && item.id === products[key].id);

    if (existingCartItem) {
        if (isInCategory(existingCartItem.id, 'Laptop')) {
            alert('Produk ini sudah ada di keranjang kategori Laptop.');
        } else {
            existingCartItem.quantity++;
            existingCartItem.price = existingCartItem.quantity * products[key].price;
        }
    } else {
        listCarts[key] = JSON.parse(JSON.stringify(products[key]));
        listCarts[key].quantity = 1;
    }

    reloadCart();
}

function reloadCart() {
    listCart.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCarts.forEach((value, key) => {
        if (value != null) {
            totalPrice += value.price;
            count += value.quantity;

            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}" /></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCart.appendChild(newDiv);
        }
    });
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}

function changeQuantity(key, quantity) {
    if (quantity === 0) {
        delete listCarts[key];
    } else {
        listCarts[key].quantity = quantity;
        listCarts[key].price = quantity * products[key].price;
    }
    reloadCart();
}

// Fungsi untuk memfilter produk berdasarkan kategori
function filterProducts(kategori) {
    list.querySelectorAll('.item').forEach(item => {
        const itemId = parseInt(item.getAttribute('data-id'));
        if (isInCategory(itemId, kategori)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Fungsi untuk memeriksa apakah produk berada dalam kategori tertentu
function isInCategory(itemId, kategori) {
    if (kategori === 'Handphone') {
        return itemId >= 1 && itemId <= 11;
    } else if (kategori === 'Ipad') {
        return itemId >= 12 && itemId <= 13;
    } else if (kategori === 'Jam') {
        return itemId >= 14 && itemId <= 15;
    } else if (kategori === 'Laptop') {
        return itemId === 20;
    } else if (kategori === 'TV') {
        return itemId >= 16 && itemId <= 19;
    } else {
        return false; // Produk tidak berada dalam kategori yang dipilih
    }
}

// Event listener untuk navigasi kategori
document.querySelectorAll('h2').forEach(kategori => {
    kategori.addEventListener('click', () => {
        const namaKategori = kategori.textContent.trim();
        filterProducts(namaKategori);
    });
});

// Fungsi untuk menginisialisasi aplikasi
function initApp() {
    // Tambahkan item produk ke daftar
    products.forEach((product, key) => {
        let newDiv = document.createElement('div');
        newDiv.setAttribute('class', 'item');
        newDiv.setAttribute('data-id', product.id);
        newDiv.innerHTML = `
            <img src="image/${product.image}" />
            <h3>${product.name}</h3>
            <p>${product.price.toLocaleString()}</p>
            <button onclick="addToCart(${key})">Add to Cart</button>
        `;
        list.appendChild(newDiv);
    });
}

// Panggil fungsi initApp untuk menginisialisasi aplikasi
initApp();

