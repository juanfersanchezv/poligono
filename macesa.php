<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"></script>
<script type="text/javascript" src="js/OpenLayers_base.js"></script>
<script type="text/javascript" src="js/OpenLayers_features.js"></script>
<script type="text/javascript">
//Variables a utilizar
var mapa,capa;
function iniciar()
{
    //Creando el mapa
    mapa=new OpenLayers.Map("mapa");
    //Creando la capa
    capa=new OpenLayers.Layer.OSM("OSM Map");
    //Agregando la capa
    mapa.addLayer(capa);
    //Establenciendo donde visualizara el mapa, para esto debemos pasarle las coordenadas
    //de latitud y longitud, ademas del zoom, que indica que en este caso es 12
    mapa.setCenter(
    new OpenLayers.LonLat(-90.5133, 14.6416).transform(
        new OpenLayers.Projection("EPSG:4326"),
        mapa.getProjectionObject()
    ), 12);
}
</script>
<style type="text/css">
    	.smallmap {
    		width: auto;
    		height: 500px;
   		}
</style>
</head>
<body <body onLoad="iniciar();iniciarDrawFeacture();">
	<h3>Macesa</h3>
	<div id="mapa" class="smallmap">
	
	</div>
	<table width="80%">
        	<tr>
        		<td align="center">
                	<input type="submit" name="crearFeature" id="crearFeature" value="Crear Zona" onclick="activarDrawFeacture()" /> 
        		</td>
                <td align="center">
                	<input type="submit" name="editarFeature" id="editarFeature" value="Editar Zona" onclick="activarModifyFeacture()" />
                </td>
			</tr>
        </table>
          
                               
      <!--   <p align="center"><strong>Coordenadas Zona</strong></p>
        <div align="center">
          <textarea name="coordenadasZona" cols="80" rows="10" id="coordenadasZona"></textarea>
         </div>  -->
</body>
</html>