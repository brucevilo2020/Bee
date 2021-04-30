
// JavaScript Document
function initialize() {
  var latlng = new google.maps.LatLng(35.606313,139.65419);
  var myOptions = {
    zoom: 17, /*�g��䗦*/
    center: latlng, /*�\���g���̒��S�_*/
    mapTypeId: google.maps.MapTypeId.ROADMAP, /*�\���^�C�v�̎w��*/
    mapTypeControl: false,
    scrollwheel: false
  };
  var map = new google.maps.Map(document.getElementById('gmap'), myOptions);
  /*�A�C�R���ݒ�*/
  var icon = new google.maps.MarkerImage('http://wordpress.test/wp-content/themes/Bee/shared/img/g_point.png',
    new google.maps.Size(110,131),/*�A�C�R���T�C�Y�ݒ�*/
    new google.maps.Point(0,0)/*�A�C�R���ʒu�ݒ�*/
    );
  var markerOptions = {
    position: latlng,
    map: map,
    icon: icon,
    title: 'MAP'
  };
  var marker = new google.maps.Marker(markerOptions);
  /*�擾�X�^�C���̓\��t��*/
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