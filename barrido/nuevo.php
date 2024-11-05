<!DOCTYPE html>
<html>
<head>
    <title>Mapa con capas de GeoServer</title>
    <style>
        #map {
            width: 100%;
            height: 800px;
        }
    </style>
</head>
<body>
	
    <div id="map"></div>

    <script src="https://openlayers.org/en/v6.5.0/build/ol.js"></script>
    <script type="text/javascript">
        var map = new ol.Map({
            target: 'map',
            layers: [
                //new ol.layer.Tile({
                //    source: new ol.source.OSM()
                //}),
				new ol.layer.Tile({
                    source: new ol.source.TileWMS({
                        url: 'http://192.141.209.201:8877/geoserver/Salsipuedes/wms',
                        params: {'LAYERS': 'Salsipuedes:Satelital22'},
                        serverType: 'geoserver'
                    })
                }),
                new ol.layer.Tile({
                    source: new ol.source.TileWMS({
                        url: 'http://192.141.209.201:8877/geoserver/Salsipuedes/wms',
                        params: {'LAYERS': 'Salsipuedes:Salsipuedes'},
                        serverType: 'geoserver'
                    })
                })
                
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([-64.29185319391786, -31.138363428195888]),
                zoom: 10
            })
        });
    </script>
</body>
</html>