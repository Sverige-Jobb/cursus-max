# PHP

##  Variabelen

_Note: Vergeet niet te googlen mocht je ergens vast zitten._

PHP beschikt net als JavaScript over variabelen en conditionele structuren.

```PHP
$naam_van_de_variabele = 'Waarde van de variabele';
$president_usa = 'Donald Trump';
$geboortejaar = 1973;
$is_raining = false;
$team_players = array('john','Jeanne','Julien');
```

Herinner je het PHP-script dat je toelaat om miljarden mensen aan te spreken? Super! We gaan dit nu eens echt maken.

1. Start je Development Environment

2. Maak in je werkfolder een nieuwe folder "variabelen" aan en creëer daarin een `humans.php`-bestand met de volgende code:

```PHP
<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Hello<?php echo $_GET['name']; ?>!</h1>
  </body>
</html>
```

3. Eens je dit gedaan hebt, surf naar de volgende URLs en ga na wat er gebeurt:
  - [http://localhost:80/variabelen/humans.php?name=Alexandre](http://localhost:80/variabelen/humans.php?name=Alexandre)
  - [http://localhost:80/variabelen/humans.php?name=Pierre](http://localhost:80/variabelen/humans.php?name=Peter)
  - [http://localhost:80/variabelen/humans.php?name=Jennifer](http://localhost:80/variabelen/humans.php?name=Jennifer)
  - Test enkele andere variaties uit

4. Herlees de code en tracht ze te begrijpen.
Zoals je kan zien bevat het bestand voornamelijk HTML, met een heel klein beetje PHP-code in het begin. We geven met de volgende tags aan waar de PHP-code van start gaat `<?php` en waar deze eindigt `?>` in een HTML-bestand.

### Bestudeer de volgende PHP-code

```PHP
<?php echo $_GET['name']; ?>
```

Het volgende kan je opgevallen zijn:

- `$_GET` is een variabele
- In PHP begint een variabele steeds met een `$`
- `echo ` is aangeleverde functie van PHP die we gebruiken om iets weer te geven (datgene dat rechts van de functie staat)
- Op het einde van een lijn PHP gebruiken we een `;`

Maar laten we bij het begin beginnen: variabelen

## Variabelen

**Variabelen** laten ons toe om gegevens tijdelijk te bewaren in het geheugen. Met behulp van variabelen kunnen we bijvoorbeeld een naam van gebruiker opslaan, effeciënt rekenen en zo veel meer! In PHP bestaat een variabele enkel gedurende de tijd dat het script loopt. Zodra de PHP-code is uitgevoerd worden alle variabelen uit het geheugen verwijderd (omdat ze niet meer gebruikt worden). Het is dus geen bestand dat op je harde schijf wordt bewaard, maar tijdelijke informatie waarvoor we het RAM-geheugen gebruiken.

**Wat uitleg over harde schijf en RAM**

[![Computer Skills Course: Hard Drives and RAM Video](http://img.youtube.com/vi/kjD5OUroAh4/0.jpg)](http://www.youtube.com/watch?v=kjD5OUroAh4 "Computer Skills Course: Hard Drives and RAM")

### Naam en Waarde

Een variabele bestaat steeds uit twee elementen:

- Een **Naam**: om ze te kunnen oproepen. Probeer steeds je variabelen duidelijk te benoemen zodat derden (of jij op een later moment) deze makkelijk kan begrijpen. Bijvoorbeeld `$leeftijd_van_de_bezoeker`.
- Een **Waarde**: de informatie dat de variabele bevat (die kan veranderen). Bijvoorbeeld: `17`.

Hierboven hebben we het voorbeeld gebruikt van een variabele `$leeftijd_van_de_bezoeker` met de waarde `17`. We kunnen de waarde van deze variabele veranderen, de waarde gebruiken om iets te berekenen of ze in conditionele structuren opnemen. Indien nodig kunnen we ze ook oproepen (mbv de naam en juiste syntax) waarop we haar waarde terugkrijgen.

### Verschillende soorten variabelen
Een goede analogie voor een variabele is een doos. Het is niet veel meer dan een opslagplaats waar we verschillende soorten voorwerpen in kunnen plaatsen (bv. schoenen, belangrijke documenten, voedsel). Net zoals we in een doos verschillende soorten voorwerpen kunnen plaatsen kunnen we dit ook met variabelen. Zo kunnen we er bijvoorbeeld getallen (leeftijd, prijs of hoeveelheid van een item, ...) of tekst (de voornaam van de gebruiker, titel van een boek, etc) in bewaren.

Er zijn verschillende soorten variabelen. Het is aan jou om het juiste type te kiezen in functie van je script en de aard van de informatie die moet worden verwerkt. Hier zijn de belangrijkste soorten:

- **String**: In PHP benoemen we tekst als het type _string_ en deze dient tussen aanhalingstekens (enkel of dubbel, gewoon consistent zijn) geschreven te worden. Bijvoorbeeld `'Ik ben een string'` of `"Ik ben ook een string"`. Alles wat tussen aanhalingstekens staat wordt als een string beschouwd, `'1337'` is dus evengoed een string.

- **Integer**: zijn gehele getallen (zowel positief als negatief). Bijvoorbeeld : `42` of `-12`.  

- **Float**: zijn rationale getallen (kommagetallen). Bijvoorbeeld : `12.876982` of `-0.2873`. Merk op dat we een `.` gebruiken in plaats van een `,` (Engelse notatie).

- **Boolean**: is een type variabele dat twee soorten waardes kan bevatten, met name: `true` en `false`. Wanneer we willen onthouden of iemand al dan niet getrouwd is zouden we bijvoorbeeld de volgende Boolean-variabele kunnen aanmaken: `$is_married = false`.

- **Null**: Hoe vreemd het ook mag lijken hebben we soms nood aan een variabele die leeg is. Om duidelijk te maken dat de variabele leeg is schrijven we `null` achter het `=` teken. Het is dus niet echt een data-soort maar eerder het ontbreken ervan.

- **Array**: of een lijst laat ons toe een reeks van waardes te bewaren die we kunnen raadplegen aan de hand van unieke sleutel of index. Het is een zeer krachtige logische structuur dat een eigen hoofdstuk verdient. Merk op dat we na het `=` **array** schrijven!

Voorbeeld:

```PHP
$klasse = array(0 => 'Cindy', 1 => 'Jan', 2 => 'Mustapha', 3 => 'Peter', 4 => '', 5=>'Eric');
```
De bovenstaande lijst bevat 6 elementen. Elk element heeft een sleutel of index (de getallen) en een waarde (het deel rechts van `=>`).

### Definieer een variabele
Zie hieronder hoe je een nieuwe variabele kan definiëren:

```PHP
$leeftijd_van_de_bezoeker = 17;
```
