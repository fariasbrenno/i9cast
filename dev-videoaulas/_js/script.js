//MOBILE MENU
const burgerMenu = document.querySelector('#burger-menu');
const startMenu = document.querySelector('#start-menu');
const endMenu = document.querySelector('#end-menu');

//abrir e fechar mobile menu
burgerMenu.addEventListener('click', () => {
    startMenu.classList.toggle('is-active');
    endMenu.classList.toggle('is-active');
})

//MODAL - COMECE POR AQUI
const firstModal = document.querySelector('.modal');
const playButton = document.querySelector('#play-1');
const closeModal = document.querySelector('#close-modal');

//abrir modal
playButton.addEventListener('click', () => {
    firstModal.classList.add('is-active');
})
//fechar modal
closeModal.addEventListener('click', () => {
    firstModal.classList.remove('is-active');
})

//stop do modal de vídeos do youtube


//function closeVideoModal(modalId) {
    //var modal = document.getElementById(modalId);
    //var iframe = modal.querySelector('iframe');
    //iframe.src = iframe.src; // resetando a src para parar a reprodução
    //modal.classList.remove('is-active');
//}