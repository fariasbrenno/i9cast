//mobile menu
const burgerMenu = document.querySelector('#burger-menu');
const startMenu = document.querySelector('#start-menu');
const endMenu = document.querySelector('#end-menu');

burgerMenu.addEventListener('click', () => {
    startMenu.classList.toggle('is-active');
    endMenu.classList.toggle('is-active');
})

//modal - Comece por aqui
const firstModal = document.querySelector('#modal-1');
const playButton = document.querySelector('#play-1');
const closeModal = document.querySelector('#close-modal');

playButton.addEventListener('click', () => {
    firstModal.classList.add('is-active');
})
closeModal.addEventListener('click', () => {
    firstModal.classList.remove('is-active');
})