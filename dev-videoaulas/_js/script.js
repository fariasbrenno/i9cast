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
var firstModal = document.querySelector('.modal');
var openModal = document.querySelector('.open-modal');
var closeModal = document.querySelector('.close-modal');
var youtubeIframe = firstModal.querySelector('iframe');

//abrir modal
openModal.addEventListener('click', () => {
    firstModal.classList.add('is-active');
})

//fechar modal
closeModal.addEventListener('click', () => {
    youtubeIframe.src = youtubeIframe.src; //resetando o iframe do youtube para parar o vídeo
    firstModal.classList.remove('is-active');
})

//stop do modal de vídeos do youtube


//function closeVideoModal(modalId) {
    //var modal = document.getElementById(modalId);
    //var iframe = modal.querySelector('iframe');
    //iframe.src = iframe.src; // resetando a src para parar a reprodução
    //modal.classList.remove('is-active');
//}