// yarn add google-maps

/* global google */
import GoogleMapsLoader from 'google-maps';

// https://developers.google.com/maps/documentation/javascript/get-api-key
GoogleMapsLoader.KEY = 'x';

// map
let map;

let defaults = {
  zoom: 15,
  styles: [],
  lat: '',
  lng: '',
  icon: '',
};

// https://snazzymaps.com
// let styles = [{'featureType':'water','elementType':'geometry','stylers':[{'color':'#e9e9e9'},{'lightness':17}]},{'featureType':'landscape','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':20}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#ffffff'},{'lightness':17}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#ffffff'},{'lightness':29},{'weight':0.2}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':18}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':16}]},{'featureType':'poi','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':21}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#dedede'},{'lightness':21}]},{'elementType':'labels.text.stroke','stylers':[{'visibility':'on'},{'color':'#ffffff'},{'lightness':16}]},{'elementType':'labels.text.fill','stylers':[{'saturation':36},{'color':'#333333'},{'lightness':40}]},{'elementType':'labels.icon','stylers':[{'visibility':'off'}]},{'featureType':'transit','elementType':'geometry','stylers':[{'color':'#f2f2f2'},{'lightness':19}]},{'featureType':'administrative','elementType':'geometry.fill','stylers':[{'color':'#fefefe'},{'lightness':20}]},{'featureType':'administrative','elementType':'geometry.stroke','stylers':[{'color':'#fefefe'},{'lightness':17},{'weight':1.2}]}];

// google maps callback
function addMap(el) {
  // config
  let config = {
    zoom: defaults.zoom,
    center: new google.maps.LatLng(0, 0),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    styles: defaults.styles,
  };

  // markers
  let markers = el.querySelectorAll('.js-map-marker');

  // init
  map = new google.maps.Map(el, config);

  // funcs
  addMapMarkers(markers);
  centerMap();

  // return map
  return map;
}

function addMapMarkers(markers) {
  // assign markers to map
  map.markers = [];

  // add marker
  markers.forEach((marker) => {
    // data from data- attributes
    let data = {
      lat: marker.getAttribute('data-lat'),
      lng: marker.getAttribute('data-lng'),
      // icon: marker.getAttribute('data-icon'),
    };

    // position
    let position = new google.maps.LatLng(data.lat, data.lng);

    // show props here from documentation
    /*
    let icon = {
      url: data.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(25, 25),
    };
    */

    // create instance
    let instance = new google.maps.Marker({
      position,
      map,
      // icon,
    });

    // add to map.markers array
    map.markers.push(instance);
  });
}

function centerMap() {
    // bounds
    let bounds = new google.maps.LatLngBounds();

    // get bounds for each marker
    map.markers.forEach((marker) => {
      let latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
      bounds.extend(latlng);
    });

    // determine if single or multiple
    if (map.markers.length === 1) {
      // set center and zoom
      map.setCenter(bounds.getCenter());
      map.setZoom(defaults.zoom);
    } else {
      // fit markers into map
      map.fitBounds(bounds);
    }
}

function init() {
  GoogleMapsLoader.load(google => {
      let els = document.querySelectorAll('.js-map');

      if (!els) {
        return;
      }

      els.forEach(el => google.map = addMap(el));
  });
}

export default init;
