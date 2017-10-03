
      <div data-role="page" id="map_page">
            <div data-role="header">
                <h1>Aplicatia Online Virtual Tourist</h1>
            </div>
            <div data-role="content">
                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
                    <a name="up_page"></a>
                    <div id="map_canvas" style="height:600px;">
                        <div id="welcome">
                            <center>
                                <h1>Bun venit</h1>
                                Va rugam sa selectati din optiunile de mai jos<br />
                                Apoi apasati start si programul o sa va dea automat<br />
                                Rezultatele care v-ar putea interesa
                            </center>
                        </div>
                        
                    </div>
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Obiectivul turistic:</label>
                        <select name="select-choice-0" onchange="" id="location">
                              <option>Alege obiectivul</option>
                              <option value="airport">Aeroport</option> 
                              <option value="aquarium">Acvariu</option>
                              <option value="art_gallery">Galerie de arte</option>
                              <option value="atm">ATM</option>
                              <option value="cafe">Cafenea</option>
                              <option value="doctor">Doctor</option>
                              <option value="embassy">Amabasada</option>
                              <option value="gas_station">Benzinarie</option>
                              <option value="hospital">Spital</option>
                              <option value="insurance_agency">Agentie de asigurari</option>
                              <option value="movie_theater">Cinema</option>
                              <option value="museum">Museu</option>
                              <option value="park">Parc</option>
                              <option value="parking">Parcare</option>
                              <option value="pharmacy">Farmacie</option>
                              <option value="police">Politie</option>
                              <option value="restaurant">Restaurant</option>
                              <option value="shopping_mall">Mall</option>
                              <option value="stadium">Stadion</option>
                              <option value="travel_agency">Agentie de transport</option>
                        </select>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Modalitatea de transport:</label>
                        <select name="select-choice-0" onchange="" id="mode">
                            <option value="DRIVING">Masina</option>
                            <option value="WALKING">Mers</option>
                            <option value="TRANSIT">Transit</option>
                            <option value="BICYCLING">Bicicleta</option>
                        </select>
                    </div>
                    <input type="button" onclick="initialize()" value="Start"/>
                </div>
                <div id="hint_route" style="display: none;"></div>
                
                <div id="table"></div>
            
                
            </div>
        </div>

 
