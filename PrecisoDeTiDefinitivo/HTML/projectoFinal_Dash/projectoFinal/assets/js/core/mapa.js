const map = L.map("mapa").setView([39.3999, -8.2245], 13);

// Adiciona a camada de tiles do OpenStreetMap
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

// Adiciona um marcador em Lisboa
const marker = L.marker([38.736946, -9.142685])
  .addTo(map)
  .bindPopup("Lisboa") // Popup de informação no clique
  .openPopup();
