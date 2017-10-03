      <div data-role="page" id="map_page">
            <div data-role="header">
                <h1>Virtuale Tourist Applicazione Online</h1>
            </div>
            <div data-role="content">
            
                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
                    <a name="up_page"></a>
                    <div id="map_canvas" style="height:600px;" onload="initialize()">
                        <div id="welcome">
                            <center>
                                <h1>Benvenuto</h1>
                                Si prega di selezionare le opzioni di seguito<br />
                                Dopo premi Start e il programma vi dara automaticamente<br />
                                i risultati che vi potrebbe interessare
                                
                                
                            </center>
                        </div>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Obiettivi turistici:</label>
                        <select name="select-choice-0" onchange="" id="location">
                              <option value=""></option>
                              <option value="airport">Aeroporto</option> 
                              <option value="aquarium">Aquario</option>
                              <option value="art_gallery">Galleria d'arte</option>
                              <option value="atm">ATM</option>
                              <option value="cafe">Caffe</option>
                              <option value="doctor">Medico</option>
                              <option value="embassy">Abasciata</option>
                              <option value="gas_station">Rifornimento</option>
                              <option value="hospital">Ospedale</option>
                              <option value="insurance_agency">Agenzia di turismo</option>
                              <option value="movie_theater">Cinema</option>
                              <option value="museum">Muzeo</option>
                              <option value="park">Parco</option>
                              <option value="parking">Parking</option>
                              <option value="pharmacy">Farmacia</option>
                              <option value="police">Polizia</option>
                              <option value="restaurant">Ristorante</option>
                              <option value="shopping_mall">Centro comerciale</option>
                              <option value="stadium">Stadione</option>
                              <option value="travel_agency">Agentia di turismo</option>
                        </select>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Metodo del trasporto:</label>
                        <select name="select-choice-0" onchange="" id="mode">
                            <option value=""></option>
                            <option value="DRIVING">Guidare</option>
                            <option value="WALKING">Caminare</option>
                            <option value="TRANSIT">Transporto</option>
                            <option value="BICYCLING">Bicicletta</option>
                        </select>
                    </div>
                    <input type="button" onclick="initialize()" value="Start"/>
                </div>
                <div id="hint_route" style="display: none;"></div>
                
                <div id="table"></div>
            
                
            </div>
        </div>