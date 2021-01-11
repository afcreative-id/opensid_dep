<div id="map">
  <div class="canvas">
    <div id="place" class="place"></div>
    <div class="content">
      <a class="osm" href="https://www.openstreetmap.org/#map=15/<?= $data_config['lat']."/".$data_config['lng'];?>" target="_blank" title="Tampilkan peta lengkap di OpenStreetMap"><i class="fa">&#xf041;</i></a>
      <a class="gmaps" href="https://www.google.com/maps/place/<?= $data_config['lat'].",".$data_config['lng'];?>" target="_blank" title="Tampilkan peta lengkap di Google Maps"><i class="fa">&#xf21d;</i></a>
    </div>
  </div>
</div>

<script>
<?php if(!empty($data_config['lat']) && !empty($data_config['lng'])):?>
var co_lat = <?= $data_config['lat'];?>;
var co_lng = <?= $data_config['lng'];?>;
var zoom = <?= $data_config['zoom'];?>;
<?php else:?>
var co_lat = 0;
var co_lng = 0;
var zoom = 15;
<?php endif;?>
var token_mapbox = 'pk.eyJ1IjoiYWZjcmVhdGl2ZSIsImEiOiJjazcxcmF5NTYwM2JtM2VsZzdpMXRkam1wIn0.O7GZxjncqnc-XyoKFya9xg';
var token_maptiler = 'wB9jf3smga0xUI9RFLzd';
var zone_style = {stroke:true,color:'#F4D03F',opacity:0.4,weight:1,fillColor:'#F7DC6F',fillOpacity:0.1};

var map = L.map('place').setView([co_lat,co_lng],zoom);
var map_default = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/256/{z}/{x}/{y}?access_token='+token_mapbox).addTo(map);

var base = {
'Tampilkan Peta':map_default,
'Tampilkan Satelit' :L.tileLayer('https://api.mapbox.com/v4/mapbox.streets-satellite/{z}/{x}/{y}@2x.png?access_token='+token_mapbox)
};

var control = L.control.layers(base,null,{position:'topright',collapsed:true}).addTo(map);
var marker_office = L.marker([co_lat,co_lng]).addTo(map);
marker_office.bindPopup("<b>Lokasi Kantor Kelurahan</b><br><?= ucwords($this->setting->sebutan_desa).' '.($desa['nama_desa']);?>").openPopup();

<?php if(!empty($data_config['path'])):?>
var village_zone = <?= $data_config['path'];?>;
var village_area = L.polygon(village_zone,zone_style).bindTooltip("Area Wilayah <?= ucwords($this->setting->sebutan_desa).' '.$data_config['nama_desa'];?>").addTo(map);
<?php endif;?>
</script>
