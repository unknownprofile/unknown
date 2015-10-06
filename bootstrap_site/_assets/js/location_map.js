var LocationData = [
					[7.092588, 125.606566, "Bangkal, Davao City" ],
					[7.089766, 125.584780, "Boulevard, Davao City " ],
				   ];

 
function initialize()
{
    var map = new google.maps.Map(document.getElementById('map_canvas'));
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();
     
    for (var i in LocationData)
    {
        var p = LocationData[i];
        var latlng = new google.maps.LatLng(p[0], p[1]);
		var LocationNum = [ [00000000], [11111111 ], ];
        bounds.extend(latlng);
         
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            content:'Office hours: (Monday to Saturday) - 10 to 5pm  <br/> Contact: +839-4356  <br/> Email: fish@gmail.com <br/> Address:' + p[2],
			icon:'_assets/images/fish.png',
            title: 'click Me'
        });
     
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(this.content);       
            infowindow.open(map, this);
			map.setZoom(16);
			map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
        });
    }
     
    map.fitBounds(bounds);
	// Create a DIV to hold the control and call HomeControl()
  var homeControlDiv = document.createElement('div');
  var homeControl = new HomeControl(homeControlDiv, map);
  //  homeControlDiv.index = 1;
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(homeControlDiv);
}
var map;
function HomeControl(controlDiv, map) {
  controlDiv.style.padding = '5px';
  var controlUI = document.createElement('div');
  controlUI.style.backgroundColor = '#3071a9';
  controlUI.style.border='1px solid #080808';
  controlUI.style.cursor = 'pointer';
  controlUI.style.textAlign = 'center';
  controlUI.title = 'Set map to original';
  controlDiv.appendChild(controlUI);
  var controlText = document.createElement('div');
  controlText.style.fontFamily='Arial,sans-serif';
  controlText.style.fontSize='12px';
  controlText.style.paddingLeft = '4px';
  controlText.style.paddingRight = '4px';
  controlText.innerHTML = '<b>Home<b>'
  controlUI.appendChild(controlText);

  // Setup click-event listener: simply set the map to original g.map
    google.maps.event.addDomListener(controlUI, 'click', initialize);
}

google.maps.event.addDomListener(window, 'load', initialize);
