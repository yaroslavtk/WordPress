const map = L.map('map',{scrollWheelZoom:false, dragging:false, tap:false}).setView([47.84819, 30.26615], 17)
;

const basemaps = { 
  StreetView: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',   {attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}),
  Topography: L.tileLayer.wms('http://ows.mundialis.de/services/service?',   {layers: 'TOPO-WMS'}),
  Places: L.tileLayer.wms('http://ows.mundialis.de/services/service?', {layers: 'OSM-Overlay-WMS'})
};

L.control.layers(basemaps).addTo(map);

basemaps.StreetView.addTo(map);

const basicBeachIcon = L.icon({iconUrl: 'https://pixlok.com/wp-content/uploads/2021/07/Map-Pointer-Icon-9desd3.png', iconSize: [25, 25], // size of the icon
});


const marker1 = L.marker([47.84889, 30.26718]).addTo(map)
            .bindPopup('Пасіка "Медослав"')
            .addTo(map);
