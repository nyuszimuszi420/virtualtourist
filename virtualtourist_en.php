      <div data-role="page" id="map_page">
            <div data-role="header">
                <h1>Virtual Turist Online Aplication</h1>
            </div>
            <div data-role="content">
                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
                    <a name="up_page"></a>
                    <div id="map_canvas" style="height:600px;">
                        <div id="welcome">
                            <center>
                                <h1>Welcome</h1>
                                Please select after theese options<br />
                                After that hit the search button<br />
                                Then places of your interest will appear!
                                
                            </center>
                        </div>
                    </div>    
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Turist Obiective:</label>
                        <select name="select-choice-0" onchange="" id="location">
                              <option value=""></option>
                              <option value="airport">Airport</option> 
                              <option value="aquarium">Aquarium</option>
                              <option value="art_gallery">Art gallery</option>
                              <option value="atm">ATM</option>
                              <option value="cafe">Cafe</option>
                              <option value="doctor">Doctor</option>
                              <option value="embassy">Embassy</option>
                              <option value="gas_station">Gas station</option>
                              <option value="hospital">Hospital</option>
                              <option value="insurance_agency">Insurance agency</option>
                              <option value="movie_theater">Cinema</option>
                              <option value="museum">Museum</option>
                              <option value="park">Park</option>
                              <option value="parking">Parking</option>
                              <option value="pharmacy">Pharmacy</option>
                              <option value="police">Police</option>
                              <option value="restaurant">Restaurant</option>
                              <option value="shopping_mall">Mall</option>
                              <option value="stadium">Stadium</option>
                              <option value="travel_agency">Travel agency</option>
                        </select>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Transportation method:</label>
                        <select name="select-choice-0" onchange="" id="mode">
                            <option value=""></option>
                            <option value="DRIVING">Driving</option>
                            <option value="WALKING">Walking</option>
                            <option value="TRANSIT">Transit</option>
                            <option value="BICYCLING">Bicycling</option>
                        </select>
                    </div>
                    <input type="button" onclick="initialize()" value="Start"/>
                </div>
                <div id="hint_route" style="display: none;"></div>
                <div id="table"></div>        
            </div>
        </div>