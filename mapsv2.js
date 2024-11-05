// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function updatePosition(latLng)
  {
       
       jQuery('#lat').val(latLng.lat());
       jQuery('#lng').val(latLng.lng());
   
  }

function initMap() 
{
  
   var gcalle = getParameterByName('address');
   var gnro = getParameterByName('nro');
   var glat = getParameterByName('lat');
   var glng = getParameterByName('lng');
   var cuenta = getParameterByName('inin');
   var agua = getParameterByName('obsa');
   var tipo = "inin";
   var miZoom = 18;
   
	if (glat==null) {glat = -31.138363428195888;miZoom = 16;} else if (glat==''){glat = -31.138363428195888;miZoom = 16;}
  	if (glng==null) {glng = -64.29185319391786;miZoom = 16;} else if (glng=='') {glng = -64.29185319391786;miZoom = 16;}
	
	if(cuenta!=null && cuenta != "")
	{		
		
		$.ajax({
                url: "http://salsipuedes.municipalidad.com:9977/sig/getCuenta.php",
                type: 'POST',
				async: false,				
                data:{
                    "cuenta": cuenta,
					"tipo": tipo,
                },
                dataType: 'json',
                success:  function (data){                    
					glat = data.lat;
					glng = data.lon;
					miZoom = 20;
                },
                error: function (xhr, ajaxOptions, thrownError) {				
				//alert(thrownError);
				alert("No se encontro cuenta de inmueble.");
			  }
            });
	}
	
	if(agua!=null && agua != "")
	{		
		tipo="obsa";
		$.ajax({
                url: "http://salsipuedes.municipalidad.com:9977/sig/getCuenta.php",
                type: 'POST',
				async: false,				
                data:{
                    "cuenta": agua,
					"tipo": tipo,
                },
                dataType: 'json',
                success:  function (data){                    
					glat = data.lat;
					glng = data.lon;
					miZoom = 20;
                },
                error: function (xhr, ajaxOptions, thrownError) {				
				//alert(thrownError);
				alert("No se encontro cuenta de agua.");
			  }
            });
		
	}
	
		//alert(gcalle + ' ' +gnro);
	//var geocoder = new google.maps.Geocoder();
	//var address = gcalle + " " + gnro + ", Salsipuedes, Córdoba, Argentina";
	//geocoder.geocode({'address': direccion}, geocodeResult);
	//alert(address);
	//geocoder.geocode({ 'address': address}, geocodeResult);
	var latLng = new google.maps.LatLng(glat,glng);    
  
  var map = new google.maps.Map(document.getElementById('map'), {
    center: 
	{
      lat: parseFloat(glat),
      lng: parseFloat(glng)
    },
    zoom: miZoom
  });
  /*
  if (gcalle != '')
  {
	geocodeAddress(address,geocoder, map);
  }
  */
  var image = {url: '2.png',};
  marker = new google.maps.Marker({
            map: map,//el mapa creado en el paso anterior
            position: latLng,//objeto con latitud y longitud
			draggable: true //que el marcador se pueda arrastrar
        });
   marker.setIcon(image);
	 //alert(lat + ' - ' + lng);
	//mapTypeId: 'satellite'
  /*
  var infoWindow = new google.maps.InfoWindow({
    map: map
  });*/

  var SLPLayer = new google.maps.ImageMapType({
    getTileUrl: function(coord, zoom) {
      var proj = map.getProjection();
      var zfactor = Math.pow(2, zoom);
      // get Long Lat coordinates
      var top = proj.fromPointToLatLng(new google.maps.Point(coord.x * 256 / zfactor, coord.y * 256 / zfactor));
      var bot = proj.fromPointToLatLng(new google.maps.Point((coord.x + 1) * 256 / zfactor, (coord.y + 1) * 256 / zfactor));

      //corrections for the slight shift of the SLP (mapserver)
      var deltaX = 0.0000;
      var deltaY = 0.0000;

      //create the Bounding box string
      var bbox = (top.lng() + deltaX) + "," +
        (bot.lat() + deltaY) + "," +
        (bot.lng() + deltaX) + "," +
        (top.lat() + deltaY);
      //base WMS URL

      var url = "http://salsipuedes.municipalidad.com:8877/geoserver/Salsipuedes/wms?";
      url += "SERVICE=WMS"; //WMS service
      url += "&REQUEST=GetMap"; //WMS operation
      url += "&VERSION=1.1.1"; //WMS version  
      url += "&LAYERS=Salsipuedes:Salsipuedes"; //WMS layers
      url += "&FORMAT=image/png"; //WMS format
      //url += "&BGCOLOR=0xFFFFFF";  
      url += "&TRANSPARENT=TRUE";
      url += "&SRS=EPSG:4326"; //set WGS84 
      url += "&BBOX=" + bbox; // set bounding box
      url += "&WIDTH=256"; //tile size in google
      url += "&HEIGHT=256";
      return url; // return URL for the tile

    },
    tileSize: new google.maps.Size(256, 256),
    isPng: true
  });
  map.overlayMapTypes.push(SLPLayer);
  map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
  
  
  google.maps.event.addListener(marker, 'dragend', function(){
                updatePosition(marker.getPosition());
				
            });
  /*
  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

    //  infoWindow.setPosition(pos);
   //   infoWindow.setContent('se encuentra aqui!.');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
  
  /*





$('#bcoordenadas').live('click', function() {
	    var coordenadas = $('#coordenadas').val();
	   alert("Hello! I am an alert bosd32!!");
		var map = new google.maps.Map(document.getElementById('map'), {
		center: {
		  lat: -32.1367455,
		  lng: -65.2915256
		},
		zoom: 16
	  });
	   map.setCenter(new GLatLng(coordenadas), 15);
	   infoWindow.setPosition(map.getCenter());
		  infoWindow.setContent('paso');
	});
	*/
}
	/*
$('#search').live('click', function() 
{
		alert("Hello! I am an alert box!!");
	    var address = $('#address').val();
	    var geocoder = new google.maps.Geocoder();
	    geocoder.geocode({ 'address': address}, geocodeResult);
		
	});
	*/
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  /*infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
    'Error: No se puede localizar su ubicacion.' :
    'Error: Sensor de ubicacion no soportado.');*/

}

function geocodeAddress(address,geocoder, resultsMap) {
       // var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker2 = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

