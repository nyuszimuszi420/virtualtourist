      <div data-role="page" id="map_page">
            <div data-role="header">
                <h1>Virtuâl Tourist Online Application</h1>
            </div>
            <div data-role="content">
                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
                    <a name="up_page"></a>
                    <div id="map_canvas" style="height:600px;">
                        <div id="welcome">
                            <center>
                                <h1>Bienvenue</h1>
                                S'il vous plaît choisir parmi les options ci-dessous,<br />
                                puis appuyez sur Start et le programme vous donnera automatiquement,<br />
                                Les résultats que vous pourriez être intéressé.
                            
                               
                            </center>
                        </div>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Tourist Objectife:</label>
                        <select name="select-choice-0" onchange="" id="location">
                              <option value=""></option>
                              <option value="airport">Aéroport</option> 
                              <option value="aquarium">Aquarium</option>
                              <option value="art_gallery">Gallerie de Arte</option>
                              <option value="atm">ATM</option>
                              <option value="cafe">Caffé</option>
                              <option value="doctor">Médecin</option>
                              <option value="embassy">Ambassade</option>
                              <option value="gas_station">Station d'essence</option>
                              <option value="hospital">Hosppital</option>
                              <option value="insurance_agency">Agence d'assurance</option>
                              <option value="movie_theater">Cinemâ</option>
                              <option value="museum">Musée</option>
                              <option value="park">Parc</option>
                              <option value="parking">Parking</option>
                              <option value="pharmacy">Pharmacie</option>
                              <option value="police">Police</option>
                              <option value="restaurant">Restaurant</option>
                              <option value="shopping_mall">Mall</option>
                              <option value="stadium">Stade</option>
                              <option value="travel_agency">Agence de Voyage </option>
                        </select>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Methode de Transportation:</label>
                        <select name="select-choice-0" onchange="" id="mode">
                            <option value=""></option>
                            <option value="DRIVING">Faire la voiture</option>
                            <option value="WALKING">Aller au foot</option>
                            <option value="TRANSIT">Transit</option>
                            <option value="BICYCLING">Faire la velô</option>
                        </select>
                    </div>
                    <input type="button" onclick="initialize()" value="Start"/>
                </div>
                <div id="hint_route" style="display: none;"></div>
                
                <div id="table"></div>
            
                
            </div>
        </div>