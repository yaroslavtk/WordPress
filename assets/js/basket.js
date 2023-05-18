let bin_btns = document.querySelectorAll('.add_to_cart_button')
let products_number = document.querySelector('.producs-added')
let counter = 0;

for (let bin_btn of bin_btns) {
    bin_btn.onclick = function () {
    counter++;
    products_number.textContent = counter;   
    products_number.classList.add('product_inside')
}
};

