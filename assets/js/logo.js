let logo = document.querySelector('.logo');

// Удалить CSS-класс square-transition

logo.classList.remove('logo-transition');

// Добавить наблюдение за появлением элемента
let observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      logo.classList.add('logo-transition');
      return;
    }
    
  });
});
observer.observe(document.querySelector('.brand'));

