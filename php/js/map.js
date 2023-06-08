require([
  "esri/config",
  "esri/Map",
  "esri/views/MapView",
  "esri/Graphic",
  "esri/layers/GraphicsLayer",
], (esriConfig, Map, MapView, Graphic, GraphicsLayer) => {
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

  const graphicsLayer = new GraphicsLayer();
  map.add(graphicsLayer);

  // POINT CARTE 1

  const point1 = {
    //Create a point
    type: "point",
    longitude: 2.2999,
    latitude: 51.03948,
  };

  const simpleMarkerSymbol1 = {
    type: "simple-marker",
    color: [226, 119, 40], // Orange
    outline: {
      color: [255, 255, 255], // White
      width: 1,
    },
  };

  const popupTemplate1 = {
    title: "{Name}",
    content: "{Description}",
  };
  const attributes1 = {
    Name: "Graphic",
    Description: "Camion 1",
  };

  const pointGraphic1 = new Graphic({
    geometry: point1,
    symbol: simpleMarkerSymbol1,

    attributes: attributes1,
    popupTemplate: popupTemplate1,
  });
  graphicsLayer.add(pointGraphic1);

  // POINT CARTE 2

  const point2 = {
    //Create a point
    type: "point",
    longitude: 2.32,
    latitude: 51.03958,
  };

  const simpleMarkerSymbol2 = {
    type: "simple-marker",
    color: [226, 119, 40], // Orange
    outline: {
      color: [255, 255, 255], // White
      width: 1,
    },
  };

  const popupTemplate2 = {
    title: "{Name}",
    content: "{Description}",
  };
  const attributes2 = {
    Name: "Graphic",
    Description: "Camion 2",
  };

  const pointGraphic2 = new Graphic({
    geometry: point2,
    symbol: simpleMarkerSymbol2,

    attributes: attributes2,
    popupTemplate: popupTemplate2,
  });
  graphicsLayer.add(pointGraphic2);

  // POINT CARTE 3

  const point3 = {
    //Create a point
    type: "point",
    longitude: 2.28,
    latitude: 51.03258,
  };

  const simpleMarkerSymbol3 = {
    type: "simple-marker",
    color: [226, 119, 40], // Orange
    outline: {
      color: [255, 255, 255], // White
      width: 1,
    },
  };

  const popupTemplate3 = {
    title: "{Name}",
    content: "{Description}",
  };
  const attributes3 = {
    Name: "Graphic",
    Description: "Camion 3",
  };

  const pointGraphic3 = new Graphic({
    geometry: point3,
    symbol: simpleMarkerSymbol3,

    attributes: attributes3,
    popupTemplate: popupTemplate3,
  });
  graphicsLayer.add(pointGraphic3);

  // POINT CARTE 4

  const point4 = {
    //Create a point
    type: "point",
    longitude: 2.3,
    latitude: 51.039999,
  };

  const simpleMarkerSymbol4 = {
    type: "simple-marker",
    color: [226, 119, 40], // Orange
    outline: {
      color: [255, 255, 255], // White
      width: 1,
    },
  };

  const popupTemplate4 = {
    title: "{Name}",
    content: "{Description}",
  };
  const attributes4 = {
    Name: "Graphic",
    Description: "Camion 4",
  };

  const pointGraphic4 = new Graphic({
    geometry: point4,
    symbol: simpleMarkerSymbol4,

    attributes: attributes4,
    popupTemplate: popupTemplate4,
  });
  graphicsLayer.add(pointGraphic4);
});
