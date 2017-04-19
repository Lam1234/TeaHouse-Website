var myCenter = new google.maps.LatLng(-37.8017305,144.9754732);

function initialize() {
var mapProp = {
center:myCenter,
 zoom:16,
scrollwheel:false,
draggable:false,
 mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

 marker.setMap(map);
 
 google.maps.event.addListener(marker,'click',function() {
 var infowindow = new google.maps.InfoWindow({
	    content: "193 Brunswick St"
	  });
	  infowindow.open(map,marker);
});
}
google.maps.event.addDomListener(window, 'load', initialize);