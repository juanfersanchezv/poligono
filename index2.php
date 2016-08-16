<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="http://openlayers.org/en/v3.3.0/css/ol.css">
<link rel="stylesheet" href="css/ol3-layerswitcher.css">
<link rel="stylesheet" href="css/layerswitcher.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/3.7.0/ol.js"></script-->
<script src="http://openlayers.org/en/v3.3.0/build/ol.js"></script>
<script src="js/ol3-layerswitcher.js"></script>
 <style>
      .map {
        height: 100%;
        width: 100%;
      }
    </style>
</head><body><div class="row">
<div class="col-md-12">
<div class="row">
  <div id="map"><div style="position: relative; overflow: hidden; width: 100%; height: 100%;" class="ol-viewport"><canvas height="698" width="1310" class="ol-unselectable" style="width: 100%; height: 100%;"></canvas><div class="ol-overlaycontainer"></div><div class="ol-overlaycontainer-stopevent"><div class="ol-zoom ol-unselectable ol-control"><button title="Zoom in" type="button" class="ol-zoom-in">+</button><button title="Zoom out" type="button" class="ol-zoom-out">−</button></div><div class="ol-rotate ol-unselectable ol-control ol-hidden"><button title="Reset rotation" type="button" class="ol-rotate-reset"><span style="transform: rotate(0deg);" class="ol-compass">⇧</span></button></div><div class="ol-attribution ol-unselectable ol-control ol-collapsed"><ul><li style=""><a href="http://openlayers.org/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAAHGAAABxgEXwfpGAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAhNQTFRF////AP//AICAgP//AFVVQECA////K1VVSbbbYL/fJ05idsTYJFtbbcjbJllmZszWWMTOIFhoHlNiZszTa9DdUcHNHlNlV8XRIVdiasrUHlZjIVZjaMnVH1RlIFRkH1RkH1ZlasvYasvXVsPQH1VkacnVa8vWIVZjIFRjVMPQa8rXIVVkXsXRsNveIFVkIFZlIVVj3eDeh6GmbMvXH1ZkIFRka8rWbMvXIFVkIFVjIFVkbMvWH1VjbMvWIFVlbcvWIFVla8vVIFVkbMvWbMvVH1VkbMvWIFVlbcvWIFVkbcvVbMvWjNPbIFVkU8LPwMzNIFVkbczWIFVkbsvWbMvXIFVkRnB8bcvW2+TkW8XRIFVkIlZlJVloJlpoKlxrLl9tMmJwOWd0Omh1RXF8TneCT3iDUHiDU8LPVMLPVcLPVcPQVsPPVsPQV8PQWMTQWsTQW8TQXMXSXsXRX4SNX8bSYMfTYcfTYsfTY8jUZcfSZsnUaIqTacrVasrVa8jTa8rWbI2VbMvWbcvWdJObdcvUdszUd8vVeJaee87Yfc3WgJyjhqGnitDYjaarldPZnrK2oNbborW5o9bbo9fbpLa6q9ndrL3ArtndscDDutzfu8fJwN7gwt7gxc/QyuHhy+HizeHi0NfX0+Pj19zb1+Tj2uXk29/e3uLg3+Lh3+bl4uXj4ufl4+fl5Ofl5ufl5ujm5+jmySDnBAAAAFp0Uk5TAAECAgMEBAYHCA0NDg4UGRogIiMmKSssLzU7PkJJT1JTVFliY2hrdHZ3foSFhYeJjY2QkpugqbG1tre5w8zQ09XY3uXn6+zx8vT09vf4+Pj5+fr6/P39/f3+gz7SsAAAAVVJREFUOMtjYKA7EBDnwCPLrObS1BRiLoJLnte6CQy8FLHLCzs2QUG4FjZ5GbcmBDDjxJBXDWxCBrb8aM4zbkIDzpLYnAcE9VXlJSWlZRU13koIeW57mGx5XjoMZEUqwxWYQaQbSzLSkYGfKFSe0QMsX5WbjgY0YS4MBplemI4BdGBW+DQ11eZiymfqQuXZIjqwyadPNoSZ4L+0FVM6e+oGI6g8a9iKNT3o8kVzNkzRg5lgl7p4wyRUL9Yt2jAxVh6mQCogae6GmflI8p0r13VFWTHBQ0rWPW7ahgWVcPm+9cuLoyy4kCJDzCm6d8PSFoh0zvQNC5OjDJhQopPPJqph1doJBUD5tnkbZiUEqaCnB3bTqLTFG1bPn71kw4b+GFdpLElKIzRxxgYgWNYc5SCENVHKeUaltHdXx0dZ8uBI1hJ2UUDgq82CM2MwKeibqAvSO7MCABq0wXEPiqWEAAAAAElFTkSuQmCC"></a></li><li>© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors.</li><li style="display: none;">Map tiles by <a href="http://stamen.com/">Stamen Design</a>, under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</li></ul><button title="Attributions" type="button"><span>i</span></button></div><div class="ol-unselectable ol-control layer-switcher"><button title="LÃ©gende"></button><div class="panel"><ul><li class="group"><label>CAPAS ORISA</label><ul><li><input id="Tipo-de suelos Guatemala Maga_0" type="checkbox"><label for="Tipo-de suelos Guatemala Maga_0">Tipo de suelos Guatemala Maga</label></li><li><input id="Departamentos-Guatemala_1" type="checkbox"><label for="Departamentos-Guatemala_1">Departamentos Guatemala</label></li><li><input id="Tipo-de suelos Honduras_2" type="checkbox"><label for="Tipo-de suelos Honduras_2">Tipo de suelos Honduras</label></li><li><input id="Departamentos-Honduras_3" type="checkbox"><label for="Departamentos-Honduras_3">Departamentos Honduras</label></li><li><input id="-ClimatologÃ­a continental,Temp Minima promedio (tmin)_4" type="checkbox"><label for="-ClimatologÃ­a continental,Temp Minima promedio (tmin)_4"> ClimatologÃ­a continental,Temp Minima promedio (tmin)</label></li><li><input id="-ClimatologÃ­a continental,Temp mÃ¡xima promedio (tmaxp)_5" type="checkbox"><label for="-ClimatologÃ­a continental,Temp mÃ¡xima promedio (tmaxp)_5"> ClimatologÃ­a continental,Temp mÃ¡xima promedio (tmaxp)</label></li><li><input id="Ciudades_6" type="checkbox"><label for="Ciudades_6">Ciudades</label></li></ul></li><li class="group"><label>Fondo de Mapa</label><ul><li><input id="OpenStreetMap_0" name="base" type="radio"><label for="OpenStreetMap_0">OpenStreetMap</label></li><li><input id="Water-color_1" name="base" type="radio"><label for="Water-color_1">Water color</label></li></ul></li></ul></div></div></div></div></div>
  <div id="info" class="" hidden=""></div>
</div>
 </div>
</div>

<div style="position:absolute; top:0px; left:900px; visibility:visible z-index:1"> 
<img src="http://mapgeo.com.gt/mapgeo.png" height="68" width="300"> 
</div> 
<script>

var i, lat, lon, geom, feature, features = [], style, rnd, codigomediciones;





 var birmingham = ol.proj.transform([-85.5, 14], 'EPSG:4326', 'EPSG:3857');
        // Create a View, set it center and zoom level


        var view = new ol.View({
          center: birmingham,
          zoom: 7
        });

var map = new ol.Map({
  //layers: [fondo,vector,vectorLayer],
  layers: [
            new ol.layer.Group({
                'title': 'Fondo de Mapa',
                layers: [
                    new ol.layer.Tile({
                        title: 'Water color',
                        type: 'base',
                        visible: false,
                        source: new ol.source.Stamen({
                            layer: 'watercolor'
                        })
                    }),
                    new ol.layer.Tile({
                        title: 'OpenStreetMap',
                        type: 'base',
                        visible: true,
                        source: new ol.source.OSM("OpenStreetMap")
                    }),
                   /* new ol.layer.Tile({
                        title: 'Satellite',
                        type: 'base',
                        visible: false,
                        source: new ol.source.MapQuest({layer: 'sat'})
                    }),
                     new ol.layer.Tile({
                        title: 'Principal',
                        type: 'base',
                        visible: false,
                        source: new ol.source.MapQuest({layer: 'osm'})
                    }),*/
                   // vectorLayer
                ]
            }),
            new ol.layer.Group({
                title: 'CAPAS ORISA',
                layers: [

                      new ol.layer.Tile({
                        title: 'Ciudades',
                        source: new ol.source.TileWMS({
                            url: 'http://demo.opengeo.org/geoserver/wms',
                            params: {'LAYERS': 'ne:ne_10m_admin_1_states_provinces_lines_shp'},
                            serverType: 'geoserver'
                        })
                    }),


                           new ol.layer.Tile({
                        title: ' ClimatologÃ­a continental,Temp mÃ¡xima promedio (tmaxp)',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://uniatmos.atmosfera.unam.mx/geoserver15/wms?',
                            params: {'LAYERS': 'ACDM:tmax_04'},
                            serverType: 'geoserver'
                        })
                    }), 

    
                           new ol.layer.Tile({
                        title: ' ClimatologÃ­a continental,Temp Minima promedio (tmin)',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://uniatmos.atmosfera.unam.mx/geoserver15/wms?',
                            params: {'LAYERS': 'ACDM:tmin_04'},
                            serverType: 'geoserver'
                        })
                    }), 

                               new ol.layer.Tile({
                        title: 'Departamentos Honduras',
                          visible: true,
                        source: new ol.source.TileWMS({
                            url: 'http://geoportal.icf.gob.hn:8081/geoserver/icf/wms?',
                            params: {'LAYERS': 'icf:m1102va001970_hn'},
                            serverType: 'geoserver'
                        })
                    }),
                               new ol.layer.Tile({
                        title: 'Tipo de suelos Honduras',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://geoportal.icf.gob.hn:8081/geoserver/icf/wms?',
                            params: {'LAYERS': 'icf:n2202va001973_hn'},
                            serverType: 'geoserver'
                        })
                    }),







                               new ol.layer.Tile({
                        title: 'Departamentos Guatemala',
                          visible: true,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/cartografia_basica/wms?',
                            params: {'LAYERS': 'cartografia_basica:Departamentos'},
                            serverType: 'geoserver'
                        })
                    }), 

                               new ol.layer.Tile({
                        title: 'Tipo de suelos Guatemala Maga',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://ide.segeplan.gob.gt/geoserver/det/wms?',
                            params: {'LAYERS': 'det:uso_del_suelo'},
                            serverType: 'geoserver'
                        })
                    }),



/*

                          new ol.layer.Tile({
                        title: 'MicroCuenca Madre Vieja',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://52.39.104.20:8080/geoserver/SIMIC/wms?',
                            params: {'LAYERS': 'SIMIC:microcuencamadrevieja'},
                            serverType: 'geoserver'
                        })
                    }),

                         new ol.layer.Tile({
                        title: 'Cuenca Madre Vieja',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://52.39.104.20:8080/geoserver/SIMIC/wms?',
                            params: {'LAYERS': 'SIMIC:cuencamadrevieja'},
                            serverType: 'geoserver'
                        })
                    }),

                     new ol.layer.Tile({
                        title: 'MicroCuenca  Nahualate',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://52.39.104.20:8080/geoserver/SIMIC/wms?',
                            params: {'LAYERS': 'SIMIC:microcuencadelrionahualate'},
                            serverType: 'geoserver'
                        })
                    }),

                new ol.layer.Tile({
                        title: 'Cuenca Nahualate',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://52.39.104.20:8080/geoserver/SIMIC/wms?',
                            params: {'LAYERS': 'SIMIC:cuencanahualate'},
                            serverType: 'geoserver'
                        })
                    }),

                new ol.layer.Tile({
                        title: 'Cuenca San Francisco',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://52.39.104.20:8080/geoserver/SIMIC/wms?',
                            params: {'LAYERS': 'SIMIC:cuencasanfrancisco'},
                            serverType: 'geoserver'
                        })
                    }), 
                  new ol.layer.Tile({
                        title: 'Cuenca Atitlan',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://52.39.104.20:8080/geoserver/SIMIC/wms?',
                            params: {'LAYERS': 'SIMIC:cuencaatitlan'},
                            serverType: 'geoserver'
                        })
                    }), */

                   /*  new ol.layer.Tile({
                        title: 'Capacidad uso Tierra',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Capacidad uso tierra'},
                            serverType: 'geoserver'
                        })
                    }), 

                        new ol.layer.Tile({
                        title: 'Clasificacion Taxonomica de Suelos',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Clasificacion Taxonomica de suelos'},
                            serverType: 'geoserver'
                        })
                    }), 

                           new ol.layer.Tile({
                        title: 'Cobertura y Uso de la Tierra',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Cobertura y Uso de la tierra'},
                            serverType: 'geoserver'
                        })
                    }), 




                           new ol.layer.Tile({
                        title: 'Reconocimiento de Suelos',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Reconocimiento de Suelos'},
                            serverType: 'geoserver'
                        })
                    }), 



                           new ol.layer.Tile({
                        title: 'Zonas de Vida',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Zonas de Vida'},
                            serverType: 'geoserver'
                        })
                    }), 



                           new ol.layer.Tile({
                        title: 'Vertientes Hidrograficas',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': ' mapas_tematicos:Vertientes Hidrograficas'},
                            serverType: 'geoserver'
                        })
                    }), 


                           new ol.layer.Tile({
                        title: 'Geologico',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Geologico'},
                            serverType: 'geoserver'
                        })
                    }), 


                           new ol.layer.Tile({
                        title: 'Geologia',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Geologia'},
                            serverType: 'geoserver'
                        })
                    }), 


                           new ol.layer.Tile({
                        title: 'Fisiografico Geomorfologico',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Fisiografico Geomorfologico'},
                            serverType: 'geoserver'
                        })
                    }), 



                           new ol.layer.Tile({
                        title: 'Ecoregiones Terrestres',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Ecoregiones Terrestres'},
                            serverType: 'geoserver'
                        })
                    }), 



                           new ol.layer.Tile({
                        title: 'Cuencas Hidrograficas',
                          visible: false,
                        source: new ol.source.TileWMS({
                            url: 'http://www.ign.gob.gt/geoserver/mapas_tematicos/wms?',
                            params: {'LAYERS': 'mapas_tematicos:Cuencas Hidrograficas'},
                            serverType: 'geoserver'
                        })
                    }), */





                

                ]
            })
        ],
  target: document.getElementById('map'),
  view:view
});

 var layerSwitcher = new ol.control.LayerSwitcher({
        tipLabel: 'LÃ©gende' // Optional label for button
    });
    map.addControl(layerSwitcher);
      map.addControl(new OpenLayers.Control.MousePosition());
  map.addControl(new OpenLayers.Control.PanZoomBar());  
  map.addControl(new OpenLayers.Control.ScaleLine());
  map.addControl(new OpenLayers.Control.DrawFeature(pointLayer,OpenLayers.Handler.Point));
/*

var element = document.getElementById('popup');

var popup = new ol.Overlay({
  element: element,
  positioning: 'bottom-center',
  stopEvent: false
});*/
//map.addOverlay(popup);

// display popup on click
  map.on('click', function(evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel,
    function(feature, layer) {
      return feature;
    });

    if (feature) {

      if(feature.get('band'))
      {
        $('#myModal').modal('show');
        var entrada = feature.get('name');
        makeFotos(entrada);

      }else{

       displayFeatureInfo(evt.pixel);
      }
    }else
    {
      //alert('sdsf');
       // $( "#map" ).removeClass( "col-md-10");
       // $( "#map" ).addClass( "col-md-12" );
       // $( "#info" ).removeClass( "col-md-2");
        //$( "#info" ).hide();
        //document.getElementById('info').innerHTML = '&nbsp;';
    //map.getTarget().style.cursor = '';
    }

  });
/*
  var displayFeatureInfo = function(pixel) {
  var features = [];
  map.forEachFeatureAtPixel(pixel, function(feature, layer) {
    features.push(feature);
  });
  if (features.length > 0) {
    var info = [];
    var i, ii;
    for (i = 0, ii = features.length; i < ii; ++i) {
      info.push(features[i].get('description'));
    }
    document.getElementById('info').innerHTML = info.join(', ') || '(unknown)';
    map.getTarget().style.cursor = 'pointer';
   // alert('vamos a ver que pasa');
      $( "#map" ).removeClass( "col-md-12");
      $( "#map" ).addClass( "col-md-10" );
      $( "#info" ).addClass( "col-md-2" );
      $( "#info" ).show();

  } else {
    document.getElementById('info').innerHTML = '&nbsp;';
    map.getTarget().style.cursor = '';
  }
};*/



  makeFotos = function(entrada){
    
    
    var url = window.location.pathname + '?r=tblMediciones/fotografias';
    $.ajax({
      type: 'POST',
     url: url,
      data:
      { 
      entrada:entrada
      },
      beforeSend: function(response)
      {
        //mensaje en el div para procesar
      },
      success: function(response)
      {
        $('#resultadoFotografias').html(response);
        //$('#'+impresion+'').html(response);             
      },
    });
  }




</script>

 

  

</body></html>