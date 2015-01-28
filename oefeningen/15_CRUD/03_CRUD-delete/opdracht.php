<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht CRUD delete</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">

        <style>
            .voorbeeld-query-01 
            {

            }
            .voorbeeld-query-01 table
            {
                font-size:12px;
                overflow:auto;
            }

            .voorbeeld-query-01 table th,
            .voorbeeld-query-01 table td
            {
                padding:4px;
            }

            .voorbeeld-query-01 table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            .voorbeeld-query-01 table tr
            {
                transition: all 0.2s ease-out;
            }

            .voorbeeld-query-01 table tr:hover
            {
                background-color:lightgreen;
            }

            .voorbeeld-query-01 .odd
            {
                background: #F1F1F1;
            }

            .deletion
            {
                color: #b94a48;
                background-color: #f2dede;
            }

            .input-icon-button
            {
                border: none;
                background-color:transparent;
                cursor:pointer;
                text-indent:-1000px;
            }

            .delete
            {
                width:16px;
                height:16px;
                background: url("http://web-backend.local/img/icon-delete.png") no-repeat;
            }
        </style>
        
        <section class="body">
            
            <h1>Opdracht CRUD delete: deel 1</h1>

            <ul>
                <li>Maak een connectie met de lokale MySQL server en selecteer de database bieren</li> 
                <li> Zorg ervoor dat wanneer er niet kan geconnecteerd worden met de database, er een custom foutboodschap verschijnt, inclusief de specifieke fout.</li> 

                <li>Voer de volgende query uit: selecteer alles uit de tabel brouwers</li> 

                <li>Bouw een <code>&lt;table&gt;</code> met de gevonden resultaten.
                    
                    <ul>
                        <li>Werk met een thead waarin je de kolomnamen zet: Brouwernummer, brouwernaam, adres, postcode, gemeente, omzet. Na de laatste kolomnaam moet er nog één lege kolom toegevoegd worden. Deze dient als header voor de verwijder-knop, zie het onderstaande resultaat.</li>

                        <li><code>&lt;tfoot&gt;</code> mag leeg blijven</li>
                        
                        <li>In de <code>&lt;tbody&gt;</code>komen alle gevonden resultaten
                            
                            <ul>
                                <li>In de laatste kolom komt een verwijderknop <code>icon-delete.png</code> <img src="http://web-backend.local/img/icon-delete.png" alt="Delete button icon"></li>

                                <li>Deze knop is een submit-knop, maar met een image <code>icon-delete.png</code> <img src="http://web-backend.local/img/icon-delete.png" alt="Delete button icon"></li>

                                <li>De <code>name</code> attribute value van deze knop is <code>delete</code> en de value van het <code>value</code> attribute is het brouwernummer.</li>

                                <li>Oneven rijen moeten een aparte klasse krijgen. Deze rij moet via CSS gestijld worden en een andere achtergrondkleur krijgen.</li>

                                <li>Het resultaat moet er als volgt uitzien:

                                    <div class="facade-minimal voorbeeld-query-01" data-url="http://www.app.local/index.php">
                        
                                        <h1>Overzicht van de bieren</h1>

                                        <table>
                
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>brouwernr</th>
                                                    <th>brnaam</th>
                                                    <th>adres</th>
                                                    <th>postcode</th>
                                                    <th>gemeente</th>
                                                    <th>omzet</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="odd">
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>Achouffe</td>
                                                    <td>Route du Village 32</td>
                                                    <td>6666</td>
                                                    <td>Achouffe-Wibrin</td>
                                                    <td>10000</td>
                                                    <td><input type="submit" class="input-icon-button delete"></td>
                                                </tr>
                                                <tr class="">
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>Alken</td>
                                                    <td>Stationstraat 2</td>
                                                    <td>3570</td>
                                                    <td>Alken</td>
                                                    <td>950000</td>
                                                    <td><input type="submit" class="input-icon-button delete"></td>
                                                </tr>
                                                <tr class="odd">
                                                   <td>3</td>
                                                    <td>3</td>
                                                    <td>Ambly</td>
                                                    <td>Rue Principale 45</td>
                                                    <td>6953</td>
                                                    <td>Ambly-Nassogne</td>
                                                    <td>500</td>
                                                    <td><input type="submit" class="input-icon-button delete"></td>
                                                </tr>
                                                <tr class="">
                                                    <td>4</td>
                                                    <td>4</td>
                                                    <td>Anker</td>
                                                    <td>Guido Gezellelaan 49</td>
                                                    <td>2800</td>
                                                    <td>Mechelen</td>
                                                    <td>3000</td>
                                                    <td><input type="submit" class="input-icon-button delete"></td> 
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </li>

                                <li>Wanneer er op de verwijderknop wordt gedrukt, moet de datarij verwijderd worden.
                                    <ul>
                                        <li>Dus, een nieuwe query, ditmaal met een delete.</li>
                                        
                                        <li>Wanneer de query succesvol is uitgvoerd, moet er een boodschap getoond worden: 'De datarij werd goed verwijderd.'</li>
                                        
                                        <li>Wanneer dit niet lukt moet de volgende boodschap getoond worden: 'De datarij kon niet verwijderd worden. Probeer opnieuw.'</li>
                                        
                                        <li><span class="remark">Lukt het niet om iets te submitten? Zoja ben je misschien iets vergeten op HTML-niveau (<code>&lt;form&gt;</code>?)</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> 
            </ul>

            <h1>Opdracht CRUD delete: deel 2</h1>

            <ul>
                <li>Zorg voor een modal confirmation message alvorens de delete wordt uitgevoerd</li>

                <li>Wanneer iemand op delete drukt, moet er bovenaan eerst een bevestiging komen:

                    <div class="facade-minimal voorbeeld-query-01" data-url="http://www.app.local/index.php">
                        
                        <h1>Overzicht van de bieren</h1>

                        <div class="modal error">
                            Bent u zeker dat u deze datarij wil verwijderen?
                            <form>
                                <input type="submit" value="Ja!">
                                <input type="submit" value="Néééééé!">
                            </form>
                        </div>

                        <table>

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>brouwernr</th>
                                    <th>brnaam</th>
                                    <th>adres</th>
                                    <th>postcode</th>
                                    <th>gemeente</th>
                                    <th>omzet</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="odd">
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Achouffe</td>
                                    <td>Route du Village 32</td>
                                    <td>6666</td>
                                    <td>Achouffe-Wibrin</td>
                                    <td>10000</td>
                                    <td><input type="submit" class="input-icon-button delete"></td>
                                </tr>   
                                <tr class="deletion">
                                    <td>2</td>
                                    <td>2</td>
                                    <td>Alken</td>
                                    <td>Stationstraat 2</td>
                                    <td>3570</td>
                                    <td>Alken</td>
                                    <td>950000</td>
                                    <td><input type="submit" class="input-icon-button delete"></td>
                                </tr>
                                <tr class="odd">               
                                    <td>3</td>
                                    <td>3</td>
                                    <td>Ambly</td>
                                    <td>Rue Principale 45</td>
                                    <td>6953</td>
                                    <td>Ambly-Nassogne</td>
                                    <td>500</td>
                                    <td><input type="submit" class="input-icon-button delete"></td>
                                </tr>
                                <tr class="">               
                                    <td>4</td>
                                    <td>4</td>
                                    <td>Anker</td>
                                    <td>Guido Gezellelaan 49</td>
                                    <td>2800</td>
                                    <td>Mechelen</td>
                                    <td>3000</td>
                                    <td><input type="submit" class="input-icon-button delete"></td> 
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </li>

                <li>Pas wanneer de gebruiker bevestigt dat hij de rij wil verwijderen, mag de datarij voorgoed verwijderd worden.</li>
                
                <li>Wanneer de gebruiker op ongedaan maken klikt, verdwijnt de boodschap.</li>

                <li><span class="remark">Normaal gebeurt deze confirmatie enkel via JavaScript, maar dit kan perfect via PHP.</span></li>

                <li><span class="extension">zorg ervoor dat wanneer een gebruiker een rij wil verwijderen, deze rij rood wordt opgelicht.</span></li>
            </ul>
            
        </section>
     
    </body>
</html>
