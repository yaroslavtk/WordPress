let wellcome_1 = document.querySelector('.wellcome-text-1');
let wellcome_2 = document.querySelector('.wellcome-text-2');

// Добавить наблюдение за появлением элемента
//let hello_observer = new IntersectionObserver(entries => {
//  entries.forEach(entry => {
//    if (entry.isIntersecting) {
//     hello_1.classList.add('hello-1-active');
//     hello_2.classList.add('hello-2-active');
//      return;
//    }
//    
//  });
//});

window.onscroll = function () {
  if (window.pageYOffset > 100) {
    wellcome_1.classList.add('wellcome-text-1-active');
    wellcome_2.classList.add('wellcome-text-2-active');
    } 
};
