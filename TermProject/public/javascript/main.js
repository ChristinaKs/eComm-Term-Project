function initMap(){
    const uluru = { lat: 45.5017, lng: -73.5673 };
    const map = new google.maps.Map(
        document.getElementById("map"),
        {
          zoom: 11,
          center: uluru,
        }
      );

      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
}