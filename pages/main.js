// JavaScript Document
let carts = document.querySelectorAll('.add-cart');

for(let i=0; i<carts.length; i++){
	carts[i].addEventListener('click', () => {
		console.log("added to cart");
	})
}

function cartNumbers(){
	localStorage.settings('cartNumbers', 1);
}