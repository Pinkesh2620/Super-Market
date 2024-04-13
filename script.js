//search bar
let searchform = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>
{

    searchform.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginform.classList.remove('active');
    navbar.classList.remove('active');
}



// shopping cart
let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>
{
    searchform.classList.remove('active');
    shoppingCart.classList.toggle('active');
    loginform.classList.remove('active');
    navbar.classList.remove('active');
}


//login-form
let loginform = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>
{
    searchform.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginform.classList.toggle('active');
    navbar.classList.remove('active');
}


//navbar in phone view
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>
{
    searchform.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginform.classList.remove('active');
    navbar.classList.toggle('active');
}

window.onscroll = () =>
{
    searchform.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginform.classList.remove('active');
    navbar.classList.remove('active');
}


var swiper = new Swiper(".product-slider", {
   loop:true,
    spaceBetween: 20,

  autoplay:{
    delay: 7500,
    desableOnInteraction: false,
  },

    
    

    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1020: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

  var swiper = new Swiper(".review-slider", {
    loop:true,
     spaceBetween: 20,
 
   autoplay:{
     delay: 7500,
     desableOnInteraction: false,
   },
 
     breakpoints: {
       0: {
         slidesPerView: 1,
         
       },
       768: {
         slidesPerView: 2,
         spaceBetween: 40,
       },
       1020: {
         slidesPerView: 3,
         spaceBetween: 50,
       },
     },
   });




   function logout() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'logout.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // If the logout was successful, redirect the user to the login page
            window.location.href = 'login.html'; // Replace 'login.html' with the actual login page URL
        }
    };
    xhr.onerror = function() {
        // Handle the case where the request encounters an error
        console.error('Logout request failed');
        // Optionally, inform the user about the logout failure
    };
    xhr.send();
}
