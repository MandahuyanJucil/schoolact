let navbar = document.querySelector('.header .navbar');
let menu = document.querySelector('#menu-btn');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let cart = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cart.classList.add('active');
}

document.querySelector('#close-form').onclick = () =>{
    cart.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    grabCursor:true,
    loop:true,
    cnteredSlides:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Login functionality
/* let loginButton = document.getElementById('login-btn');

loginButton.onclick = () => {
    // Perform login action here
    // Replace the alert with your actual login code
    alert('Login button clicked!');
}; */

// Get reference to the category box elements
var assortmentsBox = document.getElementById('assortments');
var giftBasketsBox = document.getElementById('gift-baskets');
var darksweetscandyBox = document.getElementById('dark sweets candy');
var whitesweetscandyBox = document.getElementById('white sweets candy');
var nutsBox = document.getElementById('nuts');
// Add click event listeners to the category boxes
assortmentsBox.addEventListener('click', function () {
    // Handle the assortments category click
    console.log('Assortments category clicked');
});

giftBasketsBox.addEventListener('click', function () {
    // Handle the gift baskets category click
    console.log('Gift Baskets category clicked');
});

// Add event listeners to the remaining category boxes similarly

darksweetscandyBox.addEventListener('click', function () {
    // Handle the assortments category click
    console.log('dark sweets candy category clicked');
});

whitesweetscandyBox.addEventListener('click', function () {
    // Handle the assortments category click
    console.log('white sweets candy category clicked');
});

nutsBox.addEventListener('click', function () {
    // Handle the assortments category click
    console.log('nuts category clicked');
});
