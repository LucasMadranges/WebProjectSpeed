require(["esri/config", "esri/Map", "esri/views/MapView"], (
  esriConfig,
  Map,
  MapView
) => {
  esriConfig.apiKey =
    "AAPKba7f8f00e7f44b1b83b3e0b2c20a9465-fUAJIFh6kMnVCE9anro184iun6fgtvS2SYgqC1qPhU2EIueHvqYnFsUMhPap9g8";

  const map = new Map({
    basemap: "arcgis-navigation", //Basemap service
  });

  const view = new MapView({
    container: "viewDiv",
    map: map,
    center: [2.2999, 51.03948], //Longitude, latitude
    zoom: 13.5,
    constraints: {
      snapToZoom: false,
    },
  });
});
