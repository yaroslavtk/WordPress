const openButton = document.querySelector("[data-open-modal]");
const closeButton = document.querySelector("[data-close-modal]");
const modal = document.querySelector("[data-modal]");



openButton.addEventListener("click", () => {
    modal.showModal();
});

closeButton.addEventListener("click", () => {
    modal.close();
});

modal.addEventListener("click", e => {
    const dialogDimensions = modal.getBoundingClientRect();
    if (
      e.clientX < dialogDimensions.left ||
      e.clientX > dialogDimensions.right ||
      e.clientY < dialogDimensions.top ||
      e.clientY > dialogDimensions.bottom
    ) {
      modal.close();
    }
  });

// document.addEventListener('DOMContentLoaded', function() {
//     var openModalBtn = document.querySelectorAll('.modal-open'),
//         modalOverlay      = document.querySelectorAll('.modal'),
//         modalContent      = document.querySelectorAll('.modal-content'),
//         closeModalBtn = document.querySelectorAll('.modal-close');
  
//     //open modal
//     openModalBtn.forEach(function(item){
//       item.addEventListener('click', function() {
//         var modalId = this.getAttribute('data-modal-id'),
//             modalElem = document.querySelector('.modal[id="' + modalId + '"]');
//         modalElem.classList.add('open'); 
//       });
//     });
  
//     //close modal on click on close-modal btn
//     closeModalBtn.forEach(function(item) {
//       item.addEventListener('click', function() {
//         item.parentNode.closest('.modal').classList.remove('open')
//       })
//     })
    
//   $(document).click(function(event) {
//     //if you click on anything except the modal itself or the "open modal" link, close the modal
//     if($(".modal").hasClass("open")) {
     
//       if ($(event.target).find(".modal-content").length !== 0 ) {
//         $(event.target).closest(".modal").removeClass("open")
//     }
//     } 
//   }); 
//       // $('.modal').on('mouseup', function(e) {
//       //   if(e.target !== modalContent && modalContent.childNodes(e.target).length === 0) {
//       //     item.classList.remove('open');
//       //   }
//       // })
//   });