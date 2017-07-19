/**
 * Created by root on 19.07.17.
 */
/**
 * Created by root on 15.06.17.
 */
function initMap() {
    var latitude = 59.990147,
        longitude = 30.159004,
        map_zoom = 15;
    var style = [{
        featureType: 'all',
        stylers: [
            {saturation: 0}]
    }, {
        featureType: 'water',
        skylers: [
            {saturation: 1}]
    }];
    var map_options = {
        center: new google.maps.LatLng(latitude, longitude),
        zoom: map_zoom,
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: true
    };
    var map = new google.maps.Map(document.getElementById('map'), map_options);
    var image = '/wp-content/themes/travel/assets/images/map_marker.png';
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
        icon: image
    });

    map.getStreetView().setOptions({
        adressControlOptions: {
            position: google.maps.ControlPosition.BOTTOM
        }
    });
}