mapboxgl.accessToken = 'pk.eyJ1IjoiYXNuYXdpMTIiLCJhIjoiY2xnbG0zdzQzMDRxdjNsbXJoZmQ3Zzl4NyJ9.rDd9gkx8juwftAB5IXGghw';
var map = new mapboxgl.Map({
	container: 'map', /*container ID*/
	style: 'mapbox://styles/asnawi12/ckmk0ugqm2r7q17qxu94uw2j1', /*style URL*/
	center: [103.831689, 1.363221], /*starting position [lng, lat] , 103.802715,1.378087*/
	zoom: 10.5 /*starting zoom */
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());

// menonaktifkan pan dan zoom di mobile
const isTouchEvent = e => e.originalEvent && "touches" in e.originalEvent;
const isTwoFingerTouch = e => e.originalEvent.touches.length >= 2;

// dragstart
map.on("dragstart", event => {
	if (isTouchEvent(event) && !isTwoFingerTouch(event)) {
		map.dragPan.disable();
	}
});

// Drag events not emited after dragPan disabled, so I use touch event here
map.on("touchstart", event => {
	if (isTouchEvent(event) && isTwoFingerTouch(event)) {
		map.dragPan.enable();
	}
});

// store locatore
var stores = {
	"type": "FeatureCollection",
	"features": [
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.742783, 1.334437]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "Eccellente by HAO mart Westgate <br>#B2-01",
				"store": "Westgate Shopping Mall",
				"street": "3 Gateway Dr., Singapore 608532",
				"country": "Singapore",
				"postalCode": "608532",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.793295, 1.338759]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO Megamart Turf City <br>#01-01",
				"store": "The Grandstand",
				"street": "200 Turf Club Road, Singapore 287994",
				"country": "Singapore",
				"postalCode": "287994",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.791789, 1.277087]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "Eccellente by HAO Mart Bijou <br>#B1-01",
				"store": "Bjiou Condo",
				"street": "2 Jln Mat Jambol,Singapore 119554",
				"country": "Singapore",
				"postalCode": "119554",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.807116, 1.275232]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Telok Blangah <br>#01-02/03/04",
				"store": "",
				"street": "Blk 91 Telok Blangah Street 31, Singapore 101093",
				"country": "Singapore",
				"postalCode": "101093",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.831343, 1.277766]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Bukit Merah <br>#01-1072 & #01-1074",
				"store": "",
				"street": "Blk 146 Jalan Bukit Merah, Singapore 160146",
				"country": "Singapore",
				"postalCode": "160146",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.834639, 1.353363]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Upper Thomson <br>#01-1074",
				"store": "",
				"street": "Upper Thomson Road Estate No. 244I, Singapore 574369",
				"country": "Singapore",
				"postalCode": "574369",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.83543, 1.363418]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO Mart Sin Ming Avenue <br>#01-309",
				"store": "",
				"street": "Blk 410A Sin Ming Avenue, Singapore 571410 ",
				"country": "Singapore",
				"postalCode": "238897",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.86125, 1.328121]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Jalan Tenteram <br>#01-02",
				"store": "",
				"street": "Blk 116 Jalan Tenteram, Singapore 320116",
				"country": "Singapore",
				"postalCode": "320116",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.863316, 1.335618]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Potong Pasir <br>#01-812",
				"store": "",
				"street": "Blk 120 Potong Pasir Ave 1,Singapore 350120",
				"country": "Singapore",
				"postalCode": "350120",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.883647, 1.313175]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Geylang",
				"store": "",
				"street": "Blk 448 Geylang Road, Singapore 389407",
				"country": "Singapore",
				"postalCode": "389407",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.894621, 1.315212]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "Eccellente by HAO Mart KINEX <br>#B1-36",
				"store": "KINEX Shopping Mall ",
				"street": "11 Tanjong Katong Road, Singapore 437157",
				"country": "Singapore",
				"postalCode": "238897",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.924112, 1.332097]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Bedok <br>#01-555",
				"store": " ",
				"street": "Blk 537 Bedok North Street 3, Singapore 460537",
				"country": "Singapore",
				"postalCode": "460537",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.936916, 1.311826]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Bayshore <br>#01-07/08",
				"store": "Bayshore Park ",
				"street": "Blk 54 Bayshore Road, Singapore 469979",
				"country": "Singapore",
				"postalCode": "469979",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.893546, 1.379084]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Hougang 18. <br>#B1-1567",
				"store": " ",
				"street": "Blk 440 Hougang Ave 8, Singapore 530440",
				"country": "Singapore",
				"postalCode": "530440",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}

		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.91935, 1.399967]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Punggol <br>#01-01",
				"store": "",
				"street": "Blk 658 Punggol East, Singapore 820658",
				"country": "Singapore",
				"postalCode": "820658",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.89924, 1.408249]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Punggol Walk <br>#01-352",
				"store": "",
				"street": "Blk 308C Punggol Walk, Singapore 823308",
				"country": "Singapore",
				"postalCode": "823308",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.839687, 1.433594]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Yishun <br>#01-1150",
				"store": "",
				"street": "Blk 239 Yishun Ring Road, Singapore 760239",
				"country": "Singapore",
				"postalCode": "760239",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.821624, 1.449832]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Canberra Link <br>#01-01",
				"store": "",
				"street": "Blk 505 Vanberra Link, Singapore 750505",
				"country": "Singapore",
				"postalCode": "750505",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.92377, 1.307061]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Mandarin Gardens <br>#01-01",
				"store": "",
				"street": "Blk 15 Siglap Road, Singapore 448912",
				"country": "Singapore",
				"postalCode": "448912",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.773926, 1.373429]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "HAO mart Petir <br>#01-595",
				"store": "",
				"street": "Blk 205 Petir Road, Singapore 670205",
				"country": "Singapore",
				"postalCode": "670205",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.852468, 1.320977]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "UMart Balestier <br>#01-05 BT Centre",
				"store": "",
				"street": "207 Balestier Road, Singapore 329683",
				"country": "Singapore",
				"postalCode": "329683",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.946201, 1.331776]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "Eccellente by HAO mart <br>#01-47/48/49",
				"store": "EAST VILLAGE ",
				"street": "430 Upper Changi Road, Singapore 487048",
				"country": "Singapore",
				"postalCode": "487048",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
		{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [103.833793, 1.307177]
			},
			"properties": {
				"phoneFormatted": "+65 6250 2000",
				"phone": "+65 6250 2000",
				"address": "Eccellente by HAO mart <br>#01-08/09/10/11/12/13/14",
				"store": "FAR EAST PLAZA ",
				"street": "14 Scotts Road, Singapore 228213",
				"country": "Singapore",
				"postalCode": "228213",
				"direction": "<span><img src='img/navigator.png' style='width:20px;margin-right:6px;'></span><span> Get Directions</span>",
				"link": ["https://g.page/supressosingapore?share"]
			}
		},
	]
};

stores.features.forEach(function (store, i) {
	store.properties.id = i;
});

// load layer map
map.on('load', function (e) {
	map.addSource("places", {
		"type": "geojson",
		"data": stores
	});
	buildLocationList(stores);
	addMarkers();
});

// customize marker
function addMarkers() {
	stores.features.forEach(function (marker) {
		var el = document.createElement('div');
		el.id = "marker-" + marker.properties.id;
		el.className = 'marker';

		new mapboxgl.Marker(el, { offset: [0, -23] })
			.setLngLat(marker.geometry.coordinates)
			.addTo(map);

		el.addEventListener('click', function (e) {
			flyToStore(marker);
			createPopUp(marker);
			var aktipItem = document.getElementsByClassName('aktip');
			e.stopPropagation();
			if (aktipItem[0]) {
				aktipItem[0].classList.remove('aktip');
			}
			var listing = document.getElementById('listing-' + marker.properties.id);
			listing.classList.add('aktip');
		});
	});
}

// Add a listing for each store to the sidebar
function buildLocationList(data) {
	data.features.forEach(function (store, i) {

		var prop = store.properties;

		var listings = document.getElementById('listings');

		var listingli = listings.appendChild(document.createElement('li'));
		listingli.id = "listingli-" + prop.id;
		listingli.className = 'store-item d-flex flex-nowrap column-gap-2';

		var numberx = listingli.appendChild(document.createElement('div'));
		numberx.innerHTML = prop.id + 1;
		numberx.className = 'number';
		var listing = listingli.appendChild(document.createElement('div'));
		listing.id = "listing-" + prop.id;
		listing.className = 'item';

		var link = listing.appendChild(document.createElement('div'));
		link.href = '#';
		link.className = 'title';
		link.id = "link-" + prop.id;
		link.innerHTML = prop.address; /* add alamat to sidebar */

		var details = listing.appendChild(document.createElement('div'));
		details.className = 'text-store';
		details.innerHTML = prop.store; /*add phone to sidebar*/

		var details = listing.appendChild(document.createElement('div'));
		details.className = 'text ';
		details.innerHTML = prop.street;

		link.addEventListener('click', function (e) {
			for (var i = 0; i < data.features.length; i++) {
				if (this.id === "link-" + data.features[i].properties.id) {
					var clickedListing = data.features[i];
					flyToStore(clickedListing);
					createPopUp(clickedListing);
				}
			}
			var aktipItem = document.getElementsByClassName('aktip');
			if (aktipItem[0]) {
				aktipItem[0].classList.remove('aktip');
			}
			this.parentNode.classList.add('aktip');
		});
	});
}

// animasi
function flyToStore(currentFeature) {
	map.flyTo({
		center: currentFeature.geometry.coordinates,
		zoom: 15
	});
}

// label pop up
function createPopUp(currentFeature) {
	var popUps = document.getElementsByClassName('mapboxgl-popup');
	if (popUps[0]) popUps[0].remove();
	var popup = new mapboxgl.Popup({ closeOnClick: false })
		.setLngLat(currentFeature.geometry.coordinates)
		.setHTML('<h5 class="futura-bold">' + currentFeature.properties.address + '</h5>' + '<p class="futura-medium">' + currentFeature.properties.street + '</p>')
		.addTo(map);
}