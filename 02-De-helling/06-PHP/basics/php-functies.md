# PHP

## Functies

![Robot presse-oranges](http://ecx.images-amazon.com/images/I/51g-YUKLUoL.jpg)

## Introductie

In het programmeren zeggen we vaak DRY:
> " Don't Repeat Yourself ".

Overweeg even het volgende blokje code,

```php

$name = "Eric";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Stan";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Kyle";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Kenny";
echo "<p>Hello $name!</p>";
echo '<hr>';


// OUTPUT
Hello Eric!
_______________________________
Hello Stan!
_______________________________
Hello Kyle!
_______________________________
Hello Kenny!
```

Dit werkt, maar is het echt DRY? Nee, we herhalen exact dezelfde code 4 keer. Indien we ooit de code hoeven aan te passen of uit te breiden moeten we dit ook 4 keer doen.
Dit verhoogt de kans op bugs en fouten in de toekomst. Vergelijk de bovenstaande code met het onderstaande blokje, ze hebben beide hetzelfde doel, maar de onderstaande versie maakt gebruik
van een functie.


```php

// Declaration of the function
function say_hello($name){
	echo "<p>Hello $name!</p>";
	echo '<hr>';
}

// Function calls
say_hello("Eric")
say_hello("Stan");
say_hello("Kyle");
say_hello("Kenny");

// OUTPUT
Hello Eric!
_______________________________
Hello Stan!
_______________________________
Hello Kyle!
_______________________________
Hello Kenny!
_______________________________
```


Zoals je kan zien in de code, ziet het er allemaaal properder uit en is het makkelijker te lezen. Stel je voor dat een designer een class "red-text" wilt toevoegen aan de paragraph... Via bovenstaande code hoeft ze dit slechts een maal te doen. Alle andere plekken wordt dit al uitgevoerd via de functie.
> Information is power. â€“ Anonymous.

## Definitie
Functies zijn een beetje zoals Â« slimme Â» robots die zich aanpassen in functie van wat je wil doen en een groot deel van de dagdagelijkse taken automatiseren.
Ze gebruiken vaak (alhoewel het niet noodzakelijk is) *inputs* (we noemen deze **arguments** van een functie). Deze kunnen meegegeven worden aan de functie, getransformeerd worden en teruggegeven worden via het `return` commando. En ja! Je kan functies in andere functies gebruiken.


Het is een beetje zoals een sinaasappel pers machine: als *input* steek je verse appelsientjes erin. Als *output* krijg je appelsiensap. (en de restjes)
![Appelsienperser](http://ecx.images-amazon.com/images/I/51g-YUKLUoL.jpg)

Zoals het voorbeeld hierboven kunnen we onze eigen functie maken. Je kan ook altijd dit gebruiken: [De vele functies van php](http://php.net/manual/en/funcref.php).  

Je gebruikt zelf al een paar functies:
- `array()` : dit is een functie die een variabele maakt van het type `array`.  

```php
$team = array('Eric', 'Kyle');   
```  
Hier the argumenten `'Eric', 'Kyle'` gegeven in de functie aanroeping worden op het einde de elementen waaruit de array zal bestaan (gevangen in de variabele `$team`).

- `print_r($array)` : dient om de inhoud van de array weer te geven
- `die("message")` : dient om de code te laten stoppen (afsterven)
- `echo("texte Ã  afficher");` : deze functie toont de meegegeven boodschap in de browser
- `phpinfo();`: toon de php instellingen van je server
- `date('d M Y')`: haal de huidige datum op

### Concreet voorbeeld: een stuk text bewerken

De functie `str_shuffle()` staat ons toe om de karakters in deze string te shufflen.

```php

$tekst = 'Deze zin wordt door elkaar gegooid!';
$tekst = str_shuffle($tekst);

echo $tekst;
```


## Syntax

Het gebruik van een functie splitst zich in twee situaties:
**1. Het maken van de functie**
(we noemen dit definieren of declareren van een functie). Hier is de syntax die je moet respecteren om een functie te maken:

```php
function naam_van_de_functie( $argument1, $argument2,...){
	//	hier voer je een reeks van acties uit die de argumenten aanspreken...
}
```  

Merk op dat de reeks aan commando's tussen twee accolades: `{` eentje voor het blok code te openen`}` en deze voor het te sluiten.  Meestal (maar niet noodzakelijk) gaat een functie een waarde **return**en.

Hier is bijvoorbeeld een functie die mij toestaat een ingegeven tekst op te kuisen:

```php
function sanitize( $input ){
	//	une sÃ©rie d'opÃ©rations manipulant les arguments
	return strip_tags( trim( $input) );

}
```  



Het argument (hier `$input` genoemd ) is verstuurd naar de functie `trim()` die het resultaat terugstuurt naar `strip_tags()` en die stuurt het dan door naar de functie: `return` . Deze stuurt dan deze waarde terug buiten de functie die we hier `sanitize()` genoemd hebben. Op deze manier kan ik veel sneller en gemakkelijker beide trim en strip_tags uitvoeren in een keer.


**2. Het gebruik van de functie** (we noemen dit: "de functie oproepen"):  
Eens de functie ergens is gedeclareerd in uw code, kan je deze gebruiken waar en hoeveel je maar wilt.

Laten we de, inmiddels gekende, functie `sanitize()` even gebruiken:

```php

// Check even of het formulier is ingevuld
if (isset($_POST) && !empty($_POST) ){

	// Opkuis van de ingegeven waardes
	$name = sanitize( $_POST['name'] );
	$email = sanitize( $_POST['email'] );

	// validation...
	...
}
```
