
$( document ).delegate("#map_canvas", "pageinit", function() {
  alert('A page with an id of "aboutPage" was just created by jQuery Mobile!');
});

         function initialize() {
                var lat, lon, map, myOptions;
                
                $('#table').empty();
                $('#table_hint').hide( 'slow' );
                
                //check if user has geo feature
                if(navigator.geolocation) {
                
                navigator.geolocation.getCurrentPosition(
                //get position
                function(position){
                    
                    geocoder = new google.maps.Geocoder();
                    lat = position.coords.latitude;
                    lon = position.coords.longitude;
			
                    //init map
                    myOptions = {
                       center: new google.maps.LatLng(lat, lon),
                       zoom: 14,
                       mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    
                   map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
                
                   var marker = new google.maps.Marker({
                      position: new google.maps.LatLng(lat, lon),
                      map: map,
                      title: 'My current position !!',
                      icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                  });
                    
                    var location = document.getElementById('location').value;
                    var area = 500;
                                   
                  var request = {
                    location: new google.maps.LatLng(lat, lon),
                    radius: area,
                    query: location
                  };
                
                  service = new google.maps.places.PlacesService(map);
                  service.textSearch(request, placesCallback);
                
                function placesCallback(results, status, pagination) {
                
                if (status == google.maps.places.PlacesServiceStatus.OK) {      
                    get_table(results)
                    for (var int = 0; int < results.length; int++) {    
                        var place_name = results[int].name;
                        var place = results[int];
                      createMarker(results[int], place_name);
                    }
                
                 } 
                
                if (pagination.hasNextPage) {
                    sleep:2;
                    pagination.nextPage();
                  }
                }
                
                function createMarker(place, place_name) {
                  var placeLoc = place.geometry.location;
                  var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location,
                    draggable:false,
                    animation: google.maps.Animation.DROP,
                    title: place_name
                  });
                  
                  google.maps.event.addListener(marker, 'click', function() {
                    
                  });
                  
                  }
                  
                  //$('<table>').appendTo($('#table'));
                  function get_table(obj){
                    console.log("---------------------------");
                    console.log(obj);
                       for (var int = 0; int < obj.length; int++) {
                          var name = obj[int].name;
                          var address = obj[int].formatted_address;
                          var icon = obj[int].icon;
                          
                          var dest_lat = obj[int].geometry.location.lat('a');  
                          var dest_lon = obj[int].geometry.location.lng('b');
                          
                      if(obj[int].rating){
                        var rating = '<i style="color: red; text-sixe: 80%;" >Place Rating: '+obj[int].rating+'</i>';
                      } else{
                        var rating = "";
                      }   
                      
                          
                          $('<div class="destination"><div><img src="'+icon+'" width="30%" max-height="30%" /></div><div class="text-title"><strong>'+name+'</strong><br />'+rating+'</div><hr /><div>'+address+'</div><hr /><div><a href="new_design.php#up_page" ><button class="btn btn-default" onclick="display_route('+dest_lat+', '+dest_lon+')">Get Directions&nbsp<span class="glyphicon glyphicon-play";></span></button></a></div></div>').appendTo($('#table'));
                       }
                  }
                  
                },
                // if there was an error
                function(error){
                    alert('Your Browser dosent support geolocation api by google');
                });
                }
                //case the users browser doesn't support geolocations
                else {
                   alert("Your Browser In Not Compatibile With Geolocation Support...Try Installing Google Chrome");
                  }
                 }
               
         function display_route(dest_lat, dest_long){
                 $.mobile.silentScroll(0);
                 var markerArray = [];
                
                 var mode = $('#mode').val();
                //console.log("------------------------"+mode);
                    
                if(navigator.geolocation){
                
                navigator.geolocation.getCurrentPosition(
                //get position
                function(position){
                    lat = position.coords.latitude;
                    lon = position.coords.longitude;
                
                    //init map
                    myOptions = {
                       center: new google.maps.LatLng(lat, lon),
                       zoom: 14,
                       mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    
                   map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
                
                  // First, clear out any existing markerArray
                  // from previous calculations.
                  for (i = 0; i < markerArray.length; i++) {
                    markerArray[i].setMap(null);
                  }
                 
                   var marker = new google.maps.Marker({
                      position: new google.maps.LatLng(lat, lon),
                      map: map,
                      title: 'The my current position !!',
                      icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                  });
                  
                var directionsService = new google.maps.DirectionsService()
                  , directionsDisplay = new google.maps.DirectionsRenderer({
                      /* options */
                    })
                  , origin = new google.maps.LatLng(lat, lon)
                  , destination = new google.maps.LatLng(dest_lat, dest_long)
                  , // request options
                    request = {
                      origin: origin,
                      destination: destination,
                      travelMode: google.maps.TravelMode[mode]
                    };
                
                 //console.log(origin);
                 //console.log(destination);
                 //console.log("+++++++++++++++++++++++++++++++"+request);
                // set your map to the directions Display
                directionsDisplay.setMap(map);
                
                // route it (passing request options as 1st parameter)
                directionsService.route(request, function(response, status) {
                console.log("--------->".response);
                var route = response.routes.length;
                  if(route == 0){
                        alert("The Tranportation method isnt available at your location");
                  }else{
                      if (status === google.maps.DirectionsStatus.OK) { // if it can route it
                            directionsDisplay.setDirections(response); // show route
                            showSteps(response);
                          }
                  }
                  
                });
                  });
                      }
                      
                function show_hint_maps(myRoute){
                    $('#hint_route').hide( 'slow' );
                    console.log(myRoute);
                    var myRoute_lenght = myRoute.steps.length;
                    $('#hint_route').empty();
                    $('<table>').attr('id','table_hint').attr('class','table').appendTo($('#hint_route'));
                    
                    for(i=0; i<myRoute_lenght; i++){
                        var duration = myRoute.steps[i].duration.text;
                        var distance = myRoute.steps[i].distance.text;
                        var instructions = myRoute.steps[i].instructions;
                      $("#table_hint").append('<tr><td>'+i+'</td><td>'+duration+'</td><td>'+distance+'</td><td>'+instructions+'</td></tr>');
                    }
                    
                    $('#hint_route').show( 'slow' );
                }    
                  
                //show maps in the maps  
                function showSteps(directionResult) {
                  // For each step, place a marker, and add the text to the marker's
                  // info window. Also attach the marker to an array so we
                  // can keep track of it and remove it when calculating new
                  // routes.
                  var myRoute = directionResult.routes[0].legs[0];
                  
                  show_hint_maps(myRoute);
                  
                  for (var i = 0; i < myRoute.steps.length; i++) {
                      var marker = new google.maps.Marker({
                        position: myRoute.steps[i].start_point,
                        map: map
                      });
                      //console.log(myRoute.steps[i]);
                      attachInstructionText(marker, myRoute.steps[i].instructions);
                      markerArray[i] = marker;
                  }
                }
                
                function attachInstructionText(marker, text) {
                  google.maps.event.addListener(marker, 'click', function() {
                    stepDisplay.setContent(text);
                    stepDisplay.open(map, marker);
                  });
                }    
                      
                      }    
                      
    