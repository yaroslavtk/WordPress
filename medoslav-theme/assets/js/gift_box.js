
let nuts_form = document.querySelector('.fornuts');
let nuts_button = document.querySelector('.nuts-btn');
nuts_button.onclick = function() {
    nuts_form.classList.toggle('visually-hidden');
    nuts_button.classList.toggle('btn-pressed');
};

let cream_form = document.querySelector('.forcream');
let cream_button = document.querySelector('.cream-btn');
cream_button.onclick = function() {
    cream_form.classList.toggle('visually-hidden');
    cream_button.classList.toggle('btn-pressed');
};

let pure_form = document.querySelector('.forpure');
let pure_button = document.querySelector('.pure-btn');
pure_button.onclick = function() {
    pure_form.classList.toggle('visually-hidden');
    pure_button.classList.toggle('btn-pressed');
};

let jar_vol_btn = document.querySelectorAll('.btn-volume');
    jar_vol_btn[0].onclick = function() { 
        jar_vol_btn[0].classList.toggle('btn-pressed');
        jar_vol_btn[1].classList.remove('btn-pressed');
        jar_vol_btn[2].classList.remove('btn-pressed');
    };

    jar_vol_btn[1].onclick = function() { 
        jar_vol_btn[1].classList.toggle('btn-pressed');
        jar_vol_btn[0].classList.remove('btn-pressed');
        jar_vol_btn[2].classList.remove('btn-pressed');
    };

    jar_vol_btn[2].onclick = function() { 
        jar_vol_btn[2].classList.toggle('btn-pressed');
        jar_vol_btn[0].classList.remove('btn-pressed');
        jar_vol_btn[1].classList.remove('btn-pressed');
    };


let filter = document.querySelector('.box-filter');
let jars = document.querySelectorAll('.jars');

filter.onchange = function () {
    for (let jar of jars) {
      if (jar.dataset.quantyty !== filter.value) {
        jar.classList.add('visually-hidden');
      } else {jar.classList.remove('visually-hidden');}
  
    }
  };
