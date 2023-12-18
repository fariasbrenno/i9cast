

let deferredPrompt;

window.addEventListener('beforeinstallprompt', function(event) {
  event.preventDefault();
  deferredPrompt = event;

  // Exiba um botão ou mensagem para solicitar a instalação do aplicativo
  const sumirBaixarApp = document.getElementById('sumir-baixar-app');
  sumirBaixarApp.style.display = 'block';

  const installButton = document.getElementById('install-button');
  installButton.style.display = 'block';
  installButton.addEventListener('click', installApp);
});

function installApp() {
  // Verifique se há um prompt de instalação diferido disponível
  if (deferredPrompt) {
    // Chame o prompt de instalação
    deferredPrompt.prompt();
    // Aguarde a escolha do usuário
    deferredPrompt.userChoice.then(function(choiceResult) {
      if (choiceResult.outcome === 'accepted') {
        alert('Aplicativo sendo baixado.');
      } else {
        console.log('O usuário optou por não instalar o aplicativo.');
      }
      // Limpe o prompt de instalação diferido
      deferredPrompt = null;
    });

  };

};









