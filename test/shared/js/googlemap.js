
// JavaScript Document
function initialize() {
  var latlng = new google.maps.LatLng(35.606313,139.65419);
  var myOptions = {
    zoom: 17, /*拡大比率*/
    center: latlng, /*表示枠内の中心点*/
    mapTypeId: google.maps.MapTypeId.ROADMAP, /*表示タイプの指定*/
    mapTypeControl: false,
    scrollwheel: false
  };
  var map = new google.maps.Map(document.getElementById('gmap'), myOptions);
  /*アイコン設定*/
  var icon = new google.maps.MarkerImage('shared/img/g_point.png',
    new google.maps.Size(110,131),/*アイコンサイズ設定*/
    new google.maps.Point(0,0)/*アイコン位置設定*/
    );
  var markerOptions = {
    position: latlng,
    map: map,
    icon: icon,
    title: 'MAP'
  };
  var marker = new google.maps.Marker(markerOptions);
  /*取得スタイルの貼り付け*/
var styleOptions = [{
   "stylers" : [{
    "saturation" : -20
   }, {
    "hue" : "#ee662f"
   }]
  }];
  var styledMapOptions = { name: 'MAP' }
  var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
  map.mapTypes.set('sample', sampleType);
  map.setMapTypeId('sample');
}
google.maps.event.addDomListener(window, 'load', initialize);