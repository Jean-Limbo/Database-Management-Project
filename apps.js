let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        "id": "01",
        "name": "Behind Closed Doors",
        "price": 400,
        "image": "images/bcd.jpg"
    },
    {
        "id": "02",
        "name": "Chase Me",
        "price": 500,
        "image": "images/cm.jpg"
    },
    {
        "id": "03",
        "name": "Harry Potter and the Philosopher's Stone",
        "price": 500,
        "image": "images/hp1.jpg"
    },
    {
        "id": "04",
        "name": "His Dark Materials",
        "price": 500,
        "image": "images/hdm.jpg"
    },
    {
        "id": "05",
        "name": "Inkheart",
        "price": 300,
        "image": "images/inkheart.jpg"
    },
    {
        "id": "06",
        "name": "Percy Jackson and the Olympians",
        "price": 750,
        "image": "images/pj1.jpg"
    },
    {
        "id": "07",
        "name": "Shakespeare's Sonnets",
        "price": 560,
        "image": "images/spsonnet.jpg"
    },
    {
        "id": "08",
        "name": "Stardust",
        "price": 500,
        "image": "images/stardust.jpg"
    },
    {
        "id": "09",
        "name": "The Chronicles of Narnia",
        "price": 650,
        "image": "images/tcn1.jpg"
    },
    {
        "id": "10",
        "name": "The Dark is Rising",
        "price": 400,
        "image":"images/tdir.jpg"
    },
    {
        "id": "11",
        "name": "The Hobbit",
        "price": 660,
        "image":"images/thobt.jpg"
    },
    {
        "id": "12",
        "name": "The Hunger Games",
        "price": 500,
        "image": "images/hg1.jpg"
    },
    {
        "id": "13",
        "name": "The Inheritance Cycle",
        "price": 550,
        "image": "images/tinc.jpg"
    },
    {
        "id": "14",
        "name": "The Magicians",
        "price": 350,
        "image": "images/tm.jpg"
    },
    {
        "id": "15",
        "name": "The Old Man and The Sea",
        "price": 700,
        "image": "images/oldman.jpg"
    },
    {
        "id": "16",
        "name": "This Could Be Us",
        "price": 750,
        "image":"images/thcbu.jpg"
    },
    {
        "id": "17",
        "name": "Tipping the Velvet",
        "price": 350,
        "image": "images/ttv.jpg"
    },{
        "id": "08",
        "name": "Stardust",
        "price": 500,
        "image": "images/stardust.jpg"
    }
];
let listCards  = [];
function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        
        let img = document.createElement('img');
        img.src = value.image;
        img.alt = value.name;

        // Set image size using JavaScript
        img.style.width = '150px';  // Adjust width
        img.style.height = 'auto'; // Maintain aspect ratio

        newDiv.innerHTML = `
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Cart</button>`;
        
        newDiv.prepend(img); // Add the image to the newDiv
        list.appendChild(newDiv);
    });
}

initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="images/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}