# PHP

## Arrays

Herinner je je het hoofdstuk [Variabelen](php-variabelen.md)? We hadden het toen over verschillende soorten variabelen.

1. String (bv: `"Hello"`)  
2. Integer (bv: `11` )  
3. Float (bv: `3.141518`)  
4. Booleans (`true` of `false`)  
5. Leeg (`null`)  

Arrays zijn het 6de en laatste type variabelen. Ze zijn enigszins speciaal: waar andere soorten variabelen steeds bestonden uit een naam en een waarde kunnen arrays verschillende waarden bevatten.

Arrays zijn zeer handig om groepen of lijsten te representeren, bijvoorbeeld:
- Landen van de wereld
- Familieleden
- Ingrediënten van je favoriete recept
- Verlanglijstje voor je verjaardag

**Analogie**  
Een goede vergelijking voor een array is een kast met verschillende lades.

```php
$persoonlijke_voornaamwoorden = array( 'ik' , 'jij' , 'hij' , 'wij' , 'jullie' , 'zij' );
```

PHP slaat het volgende op in het geheugen:

```
Array
(
    [0] => ik
    [1] => jij
    [2] => hij
    [3] => wij
    [4] => jullie
    [5] => zij
)
```
De getallen (gaande van 0 tot 5) worden automatisch bijgevoegd door PHP. Het zijn de **keys of indices** van de array en laten ons toe om een bepaalde **waarde** te vinden. Je kan je inbeelden dat zij de lades van de kast vormen.

Merk op dat het eerste element zich op key of index 0 bevindt (en dus niet op 1).  

Bijvoorbeeld:

```php
echo $persoonlijke_voornaamwoorden[2];
// geeft "hij" terug
```

## Hoe maak ik een array?

Je kan een array aanmaken met de functie `array()`.

```php
$team = array();
```

Er bestaat ook een kortere notatie:

```php
$team = [];
```
Tijdens het aanmaken kan je reeds elementen invoegen.

```php
$team = [ 'Vincent Kompany', 'Eden Hazard', 'Manneken Pis' ];
```
Merk op dat de elementen van de array gescheiden zijn mbv een `,`.

Je kan ook element per element een array aanmaken:

```php
$team[0] = 'Vincent Kompany';
$team[1] = 'Eden Hazard';
$team[2] = 'Manneken Pis';
```

### Oefeningen (optioneel)

1. Zie volgende array:

```php
$land = array( 'België', 'Frankrijk' , 'Duitsland', 'Nederland', 'Spanje' );
```
Wat gaat het volgende commando teruggeven?

```php
 echo $land[2];
```

2. Maak een array aan dat je familie voorstelt
3. Print de inhoud uit met de functie `print_r`
4. Maak een array met je favoriete gerechten
5. Print de inhoud uit met de functie `print_r`
6. Maak een array met je favoriete films en series
7. Gebruik de array met je favoriete films en series om enkel je favoriete film/serie te tonen.

### Veel voorkomende handelingen
#### Weergeven
Zoals je hierboven hebt gezien maken we gebruik van de key of index in `[ ]` om informatie uit een array op te vragen. In PHP kunnen deze keys een string zijn (associatieve array) of een getal (numerieke arrays)

```php
// associatieve array :
echo $person['firstname'];
echo $person['papa']['firstname']; // geeft de waarde van de key 'firstname' uit de array 'papa' van de array $person.
// numerieke array
 echo $land[2]; // geeft het derde item uit de array land terug.
 echo $person['papa']['hobbies'][1]; // geeft het 2de element van de array hobby van de $person papa

```

#### Een element toevoegen

Dit kan op 2 wijzes:

De lange wijze:

```php
array_push($person['hobbies'], 'Football');
```

De korte wijze:

```php
// Bij een numerieke index volstaat het volgende
$person['hobbies'][] = 'Football';

// in het geval van een associatieve array:
$person['papa']['firstname'] = 'Georgio';
```

#### De waarde van een index vervangen
Stel je voor `$person['papa']['firstname'] = 'Georgio'; `

Om de voornaam te veranderen volstaat het volgende:

```php
$person['papa']['firstname'] = 'Georgio';
echo $person['papa']['firstname'];
$person['papa']['firstname'] = 'Sebastano';
echo '<br>';
echo $person['papa']['firstname']; // geeft "Sebastano" terug
```


## Associatieve arrays

Tot nu hebben we steeds arrays gemaakt die een numerieke index hadden.

Associateve arrays werken op gelijkaardige wijze. In plaats dat de indices genummerd zijn **benoemen we hen met een unieke naam**.

Bijvoorbeeld: Stel je voor dat ik de contactgegevens van iemand in een array wil opslagen. Hoe kan ik bij een genummerde array weten dat op index[0] de achternaam staat, op index[1] de voornaam, etc. Het is voor dergelijke gevallen dat associatieve arrays handig zijn.

### Een associatieve array maken

Om een associatieve array te maken gebruiken we de `array` functie (of zijn met de kortere schrijfwijze `[]`), maar plaatsen we een label (ter vervanging van de numerieke index) voor elke waarde.


```php
$gebruiker = array (
    'voornaam' => 'Juan',
    'naam' => 'Pablo',
    'adres' => 'Koningstraat 3',
    'stad' => 'Brussel'
    );
```
**Bemerking 1**:  
Bovenstaande code bevat slechts 1 verklaring (1 enkele `;`). We zouden alles op 1 lijn kunnen schrijven, maar niets belet ons de code op verschillende lijnen te verdelen. Dit helpt onze code leesbaar te houden.

**Bemerking 2**:  
Merk op dat we gebruik maken van de pijl (`=>`) om een associatie aan te duiden. Zo associeren we bijvoorbeeld stad met Brussel.

Associatieve arrays zijn dus een meer intuïtieve manier om de inhoud van een array weer te geven.

```php
echo $gebruiker['stad'];
```

#### Oefening
1. Maak een associatieve array aan: `$ik`. Gebruik tenminste 2 waardes van het type text, boolean en integer.

## multi-dimensional arrays
In de vorige oefening zag je hoe we verschillende soorten variabelen in een array kunnen plaatsen. Het is ook mogelijk om arrays in een array te plaatsen, met dit te doen krijgen we een multi-dimensionele array (of *multi-dimensional array* in het Engels).

Beeld je dus in dat je ook je hobbies in de array `$ik` moet bewaren. Dit zou het volgende geven:

```php
$ik = array(
	'geboorte'	=> 1987 ,
	'voornaam' 	=> 'Jan' ,
	'achternaam'=> 'Van den Enden',
	'hobbies' 	=> array()
);

echo '<pre>';
print_r($ik);
echo '</pre>';

```
### Oefeningen (optioneel)
1. Voeg je hobbies (in array-formaat) toe aan de array `$ik`.
2. Maak een tweede gelijkaardige array `$papa` aan en beschrijf hierin je papa.
3. Maak er zeker van dat de array (uit de vorige stap) ook zijn hobbies beschrijft.
4. Voeg vervolgens in je array `$ik` een element met de index `'papa'` toe. Geef het de waarde `$papa`.
5. Geef met behulp van de functie `print_r()` de inhoud van `$ik` weer. Maak gebruik van de html tags `<pre>` om het meer leesbaar te maken.
6. Herlees je code en tot je er zeker van bent dat je elke lijn begrijpt.

##  Arrays  manipuleren

### Tellen

 - Je wil weten hoeveel hobbies je vader heeft. Zoek de PHP-functie die ons toelaat het aantal elementen van een array te **tellen** en tel zijn hobbies.
 - Tel je eigen hobbies
 - Tel beide resultaten op en geef het resultaat weer.

### Toevoegen
Een vriend leert je de geneugden van taxidermie en dit wordt een nieuwe hobby van jou. Voeg taxidermie toe aan je lijst van hobbies.

### Vervangen
Je maakt ruzie met je vader en beslist van naam te veranderen. Verander je achternaam naar "Peeters".

### Maak een array obv andere arrays (2 of meer)

Op een dag ontmoet je je soulmate. Beschrijf hem/haar (op gelijke wijze als `$ik`) in een nieuwe array `$soulmate`. Wat zouden de hobbies van je kind zijn?

Het valt mee dat je net een documentaire hebt gezien waarin een specialist Genetica de 2 mogelijkheden van overerving besprak:

1. **intersectie** (gemeenschappelijke hobbies van 2 arrays)
2. **fusie** (alle hobbies van elke array)

Zoek de namen van de PHP intersectie-functie en PHP fusie-functie (HINT: ze beginnen beide met `array_`) en test hun syntax. Geef beide resultaten weer met de `print_r()` functie.

## Oefeningen (optioneel)

**Bemerking**: Geef voor elk van de oefeningen het resultaat weer met de functie `print_r()` om na te gaan of je het goede resultaat bekomt. Maak gebruik van de html tags `<pre>` om het meer leesbaar te maken.

- Maak een array `$web_development` met een index "frontend" en een index "backend"
- Voeg vervolgens een lijn toe waarmee je "xhtml" aan de juiste index (frontend of backend) toewijst.
- Voeg vervolgens een lijn toe waarmee je "Ruby on Rails" aan de juiste index (frontend of backend) toewijst.
- Voeg vervolgens een lijn toe waarmee je "CSS" aan de juiste index (frontend of backend) toewijst.
- Voeg vervolgens een lijn toe waarmee je "Flash" aan de juiste index (frontend of backend) toewijst.
- Voeg vervolgens een lijn toe waarmee je "JavaScript" aan de juiste index (frontend of backend) toewijst.
- Voeg vervolgens een lijn toe waarmee je "xhtml" met "html" vervangt.
- Voeg vervolgens een lijn toe waarmee je "Flash" verwijdert.
