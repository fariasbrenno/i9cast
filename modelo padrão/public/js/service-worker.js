
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.open('cache_app').then(function(cache) {
      return cache.match(event.request).then(function(response) {
        // Verificar se a resposta está em cache
        if (response) {
          return response; // Retorna a resposta em cache
        }

        // Caso contrário, fazer uma requisição em tempo real
        return fetch(event.request).then(function(networkResponse) {
          // Verificar se a resposta é válida
          if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic') {
            return networkResponse; // Retorna a resposta original
          }

          // Clonar a resposta para armazenar em cache
          var responseToCache = networkResponse.clone();

          // Determinar o identificador exclusivo do usuário (pode ser obtido a partir dos headers ou dados da sessão)
          var userId = 'exemplo_user_id';

          // Criar uma chave única para o cache do perfil do usuário
          var cacheKey = 'user-profile-' + userId;

          // Armazenar a resposta no cache do perfil do usuário
          cache.put(cacheKey, responseToCache);

          return networkResponse; // Retorna a resposta original
        });
      });
    })
  );
});
