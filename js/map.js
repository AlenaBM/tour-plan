ymaps.ready(init);
      function init() {
        var myMap = new ymaps.Map("map", {
          center: [7.890703, 98.294772],
          zoom: 16,
        });
        var myGeoObject = new ymaps.GeoObject({
          geometry: {
            type: "Point",
            coordinates: [7.890703, 98.294772],
          },
        });
        myMap.geoObjects.add(myGeoObject);

        var myPlacemark = new ymaps.Placemark(
          myMap.getCenter(),
          {
            balloonContentBody: [
              "<address>",
              "<strong>DoubleTree by Hilton Phuket Banthai Resort</strong>",
              "<br/>",
              "Thailand, Phuket, Ka Thu, Patong city",
              "<br/>",
              "</address>",
            ].join(""),
          },
          
        );

        myMap.geoObjects.add(myPlacemark);
      }