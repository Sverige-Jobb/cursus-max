# Condities

1. [Inleiding](../README.md)
1. [Variabelen](./variables.md)
1. Condities ← 
    * [IF, ELSEIF , ENDIF](#if-else-if-endif)
    * [Vergelijking operatoren](#vergelijking-operatoren)
    * [Logische operatoren](#logische-operatoren)
1. [Lussen](./whileAndfor.md)
1. [Arrays](./array.md)
1. [Functies](./function.md)

## IF, ELSE IF, ENDIF
Dat is het, we komen langzaam in wat we het algoritme kunnen noemen. De condities laten ons toe om een beetje logica aan ons programma toe te voegen. Ze beginnen altijd met ``IF`` gevolgd door de betreffende conditie. Als aan de voorwaarde is voldaan, dan gaan we naar het blok ``THEN``.
Als niet aan de voorwaarde wordt voldaan, wordt het blok genegeerd en wordt de volgende regel gepasseerd.


Bijv :
````
\\ Main module
START
    A = 5
    B = 9
    IF A < B THEN
        WRITE "A is kleiner dan B"         
    ENDIF    
END
````

DIn dit voorbeeld gebruiken we de operator ``<`` om te zeggen *Als variabel A kleiner is dan variabel B dan....* Merk op dat we de toestand beëindigen met ENDIF. Dus alles wat tussen ``THEN`` en ``ENDIF`` geschreven staat wordt uitgevoerd als aan de voorwaarde is voldaan. 

Oké, maar in dit voorbeeld, als A groter is dan B, zal er niets gebeuren. We moeten een instructie toevoegen met het woord ``ELSE``.

````
\\ Main module
START
    A = 15
    B = 9
    IF A < B THEN
        WRITE "A is kleiner dan B"
    ELSE
        WRITE "A is groter dan B"
    ENDIF        
END
````
En in het geval dat A gelijk is aan B? In de huidige staat, als A gelijk is aan B hebben we de zin *A is groter dan B* terwijl dit vals is. We konden een 2e test toevoegen met "ELSE IF".

````
\\ Main module
START
    A = 15
    B = 15
    IF A < B THEN
        WRITE "A is kleiner dan B"
    ELSE IF A = B THEN 
        WRITE "A is gelijk aan B"
    ELSE
        WRITE "A is groter dan B"
    ENDIF        
END
````



## Vergelijking operatoren
Om 2 waarden te kunnen vergelijken, hebben we de *vergelijkingsoperatoren* nodig. 

|Operator|Naam|Syntax|Resultaat
|:-------:|:--|:------|:-------
| =      | Gelijkheidsoperator | A = B | Vergelijkt de gelijkheid van 2 waarden en geeft ``TRUE`` als aan de voorwaarde is voldaan en ``FALSE`` als er niet aan is voldaan.
| < | 	Kleiner dan | A < B | Controleert of variabele A strikt genomen minder is dan een waarde B en geeft de waarde TRUE terug als deze waarde waar is en FALSE als dit niet het geval is.
|<= | Kleiner dan of gelijk aan | A <= B | Zelfde als hierboven, maar wordt er tevens aan de voorwaarde voldaan als A gelijk is aan B
| > | Groter dan | A > B | Controleert of een variabele strikt groter is dan een waarde en geeft de waarde TRUE terug als  variabele groter is en FALSE als deze niet waar is
| >= | Groter dan of gelijk aan  | A >= B | Controleert of variabele A groter of gelijk is aan de waarde B en geeft TRUE terug als dat zo is en FALSE als dat niet zo is
| != | Niet gelijk aan | A != B | Controleert of variabele A verschilt van variabele B


## Logische operatoren 
Het is mogelijk om verschillende controles uit te voeren onder de voorwaarden. Om dit te doen hebben we logische operators ``AND`` & ``OR``. Stelt u zich een programma voor dat controleert of een persoon in aanmerking komt om terug te keren naar BeCode. Er zijn twee dingen te controleren, de persoon moet meerderjarig zijn en 25 badges hebben.

````
\\ Main module
START
    WRITE "Wat is uw leeftijd ?"   
    READ age
    WRITE "Hoeveel badges heeft u ?"
    READ badge
    IF age >= 18 AND badge >= 25 THEN
        WRITE "Welkom bij BeCode"
    ELSE 
        WRITE "Je komt niet in aanmerking voor Becode"
    ENDIF
END
````

In dit geval moet de gebruiker voldoen aan de ``AND`` voorwaarden, zo niet, dan zal de console altijd "Je komt niet in aanmerking voor Becode" weergeven.

Als we nu de operator ``OR`` gebruiken in de test:
````
\\ Main module
START
    WRITE "Wat is uw leeftijd ?"   
    READ age
    WRITE "Hoeveel badges heeft u ?"
    READ badge

    IF age >= 18 OR badge >= 25 THEN
        WRITE "Welkom bij BeCode"
    ELSE 
        WRITE "Je komt niet in aanmerking voor Becode"
    ENDIF
END
````
De gebruiker hoeft slechts één van de twee ontwerpen in te vullen. Dus de zin "Welkom bij BeCode" zal verschijnen als de gebruiker meer dan 18 of meer dan 25 badges heeft. Het is dus niet het gedrag dat we willen, maar het is vooral om het verschil tussen AND & OR te illustreren.


## Oefeningen

1. Schrijf een algoritme dat de gebruiker vraagt om zijn leeftijd in te voeren. Als de gebruiker jonger is dan 18 jaar, zal het programma dit aangeven: *U bent te jong om de BeCode opleiding* te volgen. Als de gebruiker echter ouder is dan 18 jaar, moet de zin *U kunt deelnemen aan de training*.

<details>
	<summary>Oplossing </summary>
	
````
\\ Main module
START
   WRITE "Hoe oud bent u ?"
   READ age
    IF age < 18 THEN
        WRITE "Je bent te jong om de opleiding te volgen."
    ELSE
        WRITE "U kunt de training doen"
    ENDIF         
END
````
</details>   
  &nbsp;  

2. Pas de onderstaande code aan zodat de gebruiker weet waarom hij de training bij Becode niet kan doen. Als hij jonger is dan de vereiste leeftijd, moet er een bericht worden weergegeven met het aantal jaren voordat hij kan invoeren. Dus als de gebruiker 17 jaar oud is, moet de boodschap zijn: "Je hebt 1 jaar om deel te nemen aan de training".
Hetzelfde geldt voor de badges.

````
\\ Main module
START
    WRITE "Wat is uw leeftijd?"   
    READ age
    WRITE "Hoeveel badges heeft u ?"
    READ badge

    IF age >= 18 OR badge >= 25 ALORS
        WRITE "Welkom bij BeCode"
    ELSE 
        WRITE "Je komt niet in aanmerking voor Becode"
    ENDIF
END
````

<details>
    <summary>Oplossing </summary>

````
\\ Main module
START
    WRITE "Wat is uw leeftijd?"   
    READ age
    WRITE "Hoeveel badges heeft u?"
    READ badge

    IF age >= 18 AND badge >= 25 THEN
        WRITE "Welkom bij BeCode"
    ENDIF
    IF age < 18 THEN 
        WRITE "U moet minstens", (18-age), "jaren wachten om deel te mogen nemen aan de opleiding"
    ENDIF
    IF badge < 25 THEN 
        WRITE "U mist nog", 25 - badge, "badge(s) om deel te nemen aan de training"
    ENDIF
END
````
</details>
  &nbsp;  

3. Schrijf het algoritme dat een programma beschrijft waarmee een gastvrouw de prijs van een stoel kan berekenen op basis van de leeftijd van de passagier. Kinderen onder de twee jaar betalen niet, kinderen onder de 10 jaar betalen de helft van de prijs en mensen onder de 27 en ouder dan 70 jaar krijgen 10% korting. De gebruiker moet de basisprijs van het ticket en de leeftijd van de passagier invoeren. Het programma toont het resultaat.

<details>
   <summary>Oplossing </summary>
	
````   
\\ Main module
START
    WRITE "Hoe oud bent u?"
    READ age
    IF age < 2 THEN 
        WRITE "U hoeft niet te betalen"
    ELSE IF age < 10 THEN
        WRITE "Wat is de prijs?"
        READ price
        WRITE "U moet betalen : ", price/2
    ELSE IF age <27 OR age >70 THEN
        WRITE "Wat is de prijs?"
        READ price 
        WRITE "U moet betalen : ", price - (price/100)*10
    ELSE
        WRITE "Geen korting"
    ENDIF  
END
````
</details>

&nbsp; 
    
**Volgende hoofdstuk**: [Lussen](./whileAndfor.md)  
