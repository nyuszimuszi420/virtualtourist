

      <div data-role="page" id="map_page">
            <div data-role="header">
                <h1>Virtuális túrista - Online Aplikáció</h1>
            </div>
            <div data-role="content">
                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
                    <a name="up_page"></a>
                    <div id="map_canvas" style="height:600px;">
                        <div id="welcome">
                            <center>
                                <h1>Hali</h1>
                                Kérlek válassz az alábbi opciókból<br />
                                Kattints a start gombra<br />
                                A helyek amik erdekelhetnek megjelennek lent
                                
                            </center>
                        </div>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Hova szeretnél menni?</label>
                        <select name="select-choice-0" onchange="" id="location">
                              <option value=""></option>
                              <option value="airport">Repülőtér</option> 
                              <option value="aquarium">Akvárium</option>
                              <option value="art_gallery">Művészeti galéria</option>
                              <option value="atm">Bankautomata</option>
                              <option value="cafe">Kávézó</option>
                              <option value="doctor">Orvos</option>
                              <option value="embassy">Nagykövetség</option>
                              <option value="gas_station">Benzinkút</option>
                              <option value="hospital">Kórház</option>
                              <option value="insurance_agency">Biztosító</option>
                              <option value="movie_theater">Mozi</option>
                              <option value="museum">Múzeum</option>
                              <option value="park">Park</option>
                              <option value="parking">Parkoló</option>
                              <option value="pharmacy">Gyógyszertár</option>
                              <option value="police">Rendőrség</option>
                              <option value="restaurant">Étterem</option>
                              <option value="shopping_mall">Bevásárlóközpont</option>
                              <option value="stadium">Sportlétesítmény</option>
                              <option value="travel_agency">Utazási iroda</option>
                        </select>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="mode" class="select">Közlekedési eszköz:</label>
                        <select name="select-choice-0" onchange="" id="mode">
                            <option value=""></option>
                            <option value="DRIVING">Autó</option>
                            <option value="WALKING">Séta</option>
                            <option value="TRANSIT">Tranzit</option>
                            <option value="BICYCLING">Bicikli</option>
                        </select>
                    </div>
                    <input type="button" onclick="initialize()" value="Start"/>
                </div>
                <div id="hint_route" style="display: none;"></div>
                
                <div id="table"></div>
            
                
            </div>
        </div>

