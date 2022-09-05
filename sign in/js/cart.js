let cart = document.querySelectorAll(".cart-btn");
let product = [
    {
        name: 'T-shirt',
        price: '$15',
        size: 'M',
        incart: 0

    },
    {
        name: 'Hoodie',
        price: '$15',
        size: 'M',
        incart: 0

    },
    {
        name: 'Shirt',
        price: '$15',
        size: 'M',
        incart: 0

    },
];

for (let i = 0; i < cart.length; i++) {
  cart[i].addEventListener("click", () => {
    cartNumbers();
  });
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem("cartNumbers");

    if(productNumbers){
        document.querySelector('.icons span').textContent = productNumbers;
    }
}


function cartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");

  productNumbers = parseInt(productNumbers);
  if(productNumbers){
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector('.icons span').textContent = productNumbers + 1; 
  } else{
    localStorage.setItem("cartNumbers", 1);
    document.querySelector('.icons span').textContent = 1;
  }

}

onLoadCartNumbers();
