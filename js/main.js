$(document).ready(function () {

	$(document).on('click', '.yamm .dropdown-menu', function(e) {
		e.stopPropagation()
	});

	$('#twitterb').tooltip({
		placement : 'bottom',
		title : 'Twitter'
	});
	$('#facebookb').tooltip({
		placement : 'bottom',
		title : 'Facebook'
	});
	$('#instagramb').tooltip({
		placement : 'bottom',
		title : 'Instagram'
	});
	$('#googleb').tooltip({
		placement : 'bottom',
		title : 'Google+'
	});
	$('#pinterestb').tooltip({
		placement : 'bottom',
		title : 'Pinterest'
	});
	$('#flickrb').tooltip({
		placement : 'bottom',
		title : 'Flickr'
	});
	$('#rssb').tooltip({
		placement : 'bottom',
		title : 'RSS'
	});
	$('#wordb').tooltip({
		placement : 'bottom',
		title : 'Wordpress'
	});
	$('#stumbleb').tooltip({
		placement : 'bottom',
		title : 'Stumbleupon'
	});
	
	// When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                /*var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{"featureType":"all",		"stylers":[			{"saturation":0},			{"hue":"#e7ecf0"}		]	},	{"featureType":"road",		"stylers":[			{"saturation":-70}		]	},	{"featureType":"transit",		"stylers":[			{"visibility":"off"}		]	},	{"featureType":"poi",		"stylers":[			{"visibility":"off"}		]	},	{"featureType":"water",		"stylers":[			{"visibility":"simplified"},			{"saturation":-60}		]	}]
                };*/

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
               // var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
               // var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                /*var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                  //  map: map,
                    title: 'Snazzy!'
                });*/
            }
});