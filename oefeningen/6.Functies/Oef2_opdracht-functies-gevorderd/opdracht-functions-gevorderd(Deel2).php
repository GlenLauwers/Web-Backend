<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies gevorderd</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <h1 class="extra">Opdracht functies gevorderd: deel 2 (Angry Birds)</h1>

            <ul>
               
                <li>De bedoeling is om een versimpelde tekstversie van Angry Birds te maken (<a href="http://chrome.angrybirds.com/" target="_blank">http://chrome.angrybirds.com/</a>)</li>

                <li>Maak een global variable <code>$pigHealth</code> met value <code>5</code> en een global variable <code>$maximumThrows</code> met value <code>8</code></li>

                <li>Maak een functie <code>calculateHit</code>. Deze functie staat in voor:
                    <ul>
                        <li>Het berekenen van de raakkans (40%). Gebruik hiervoor de functie <code>rand</code>.

                        <li>Het verminderen van de <code>$pigHealth</code> variable met één van zodra er raak is geschoten.

                        <li>Het teruggeven van de string <code>'Raak! Er zijn nog maar xxx varkens over.'</code> of <code>'Mis! Nog xxx varkens in het team.'</code> naargelang het resultaat van het willekeurige getal. De xxx moet vervangen worden door het effectieve getal.
                    </li>
                </li>

                <li>Maak een functie <code>launchAngryBird</code>. Deze functie staat in voor:
                    <ul>
                        <li>Deze functie bevat een static variable om bij te houden hoeveel keer de functie reeds is aangeroepen.

                        <li>Zolang deze static variable kleiner is dan het aantal <code>$maximumThrows</code> wordt de static variable met één vermeerderd en spreekt de functie <code>launchAngryBird</code> zichzelf weer aan.

                        <li>Van zodra de static variabele gelijk is de <code>$maximumThrows</code> wordt er gekeken of het <code>$pigHealth</code> gelijk is aan nul. Als dit het geval is moet de boodschap <code>'Gewonnen!'</code> verschijnen. Is de variable pigHealth groter dan nul verschijnt de boodschap <code>'Verloren!'</code>
                        </li>
                    </ul>
                </li>


                <li>Je mag de functie <code>launchAngryBird</code> maximum één keer aanroepen in het document.</li>

                <li>
                    Het eindresultaat moet er ongeveer als volgt uitzien:

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">

                        <h1>Text-based Angry Birds</h1>
                    
                        <p>Raak! Er zijn nog maar 4 varkens over.</p>
                       
                        <p>Raak! Er zijn nog maar 3 varkens over.</p>
                       
                        <p>Mis! Er zijn nog 3 varkens over.</p>
                       
                        <p>Mis! Er zijn nog 3 varkens over.</p>
                       
                        <p>Mis! Er zijn nog 3 varkens over.</p>

                        <p>Raak! Er zijn nog maar 1 varkens over.</p>

                        <p>Raak! Er zijn nog maar 0 varkens over.</p>

                        <p>Gewonnen!</p>

                    </div>
                </li>

                <li class="extension">Zorg ervoor dat de tekst grammatisch correct is wanneer <code>$pigHealth</code> gelijk is aan 1</li>

                <li class="extension">Zorg ervoor dat de functie automatisch stopt wanneer <code>$pigHealth</code> gelijk is aan 0</li>

            </ul>
        </section>

    </body>
</html>
