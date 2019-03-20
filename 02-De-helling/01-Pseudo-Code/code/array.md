# Arrays

1. [Inleiding](../README.md)
1. [Variabelen](./variables.md)
1. [Condities](./conditions.md)
1. [Lussen](./whileAndFor.md)  
1. Arrays  ←
    * [Een array](#een-array)
    * [Multidimensionale arrays](#multidimensionale-arrays)
1. [Functies](./function.md)


## Een array

Dankzij de arrays kunnen we onze algoritmes complexer maken en meer herhalingen vermijden. In tegenstelling tot conventionele variabelen kunt u in arrays verschillende waarden in een variabele opslaan. Laten we ons voorstellen dat we een klas van 25 juniors hebben. Als we de eerste namen van elke leerling willen kunnen opslaan voor later gebruik, moeten we dit doen: 

````
\\ Main module
START
    junior1 = "Jeroen"
    junior2 = "Carolinne"
    junior3 = "Sam"
    junior4 = "Eyup"
    ...
    WRITE junior1, " is van de startup Hopper"
    WRITE junior2, " is van de startup Hopper"
    WRITE junior3, " is van de startup Hopper"
    WRITE junior4, " is van de startup Hopper"
END
````
Dat klinkt niet erg D.R.Y., toch? 
Het gebruik van arrays en lussen helpt ons om onze code te verbeteren. 

Een array is als volgt geschreven:
````
juniors = ["Jeroen", "Carolinne", "Sam", "Eyup"]
````
We zetten alle waarden tussen de[ ] gescheiden met een komma(,). 
Om de waarde op te vragen, moet een index worden bepaald. Als we de waarde "Jeroen" willen terugwinnen, moeten we het doen als volgt: "WRITE juniors[1]",
waarbij het getal 1 de index is. Als we "Carolinne" willen opvragen, zullen we in dit geval de index op 2 "WRITE juniors[2]" zetten, enz.

Probeer het!
````
\\ Main module
START   
    juniors = ["Jeroen", "Carolinne", "Sam", "Eyup"]
    WRITE juniors[1]  
END
````

Dankzij de lussen kunnen we de hele array doorlopen door de instructie maar één keer te schrijven. Probeer dit stukje code!

````
\\ Main module
START
    juniors = ["Jeroen", "Carolinne", "Sam", "Eyup"]
    FOR number = 1 TO 4 DO
        WRITE juniors[number], "is een junior van de startup Hopper"
    ENDFOR 
END  
````
Hier word de variabele ``nummer`` als index van de array ``juniors`` gebruikt.


## Multidimensionale arrays

Arrays kunnen ook worden genesteld. Laten we ons voorstellen dat we alle juniors per startup in een array willen opslaan. Dus een array = een promotie. Om dit te doen, zullen we een array maken
````
juniors = []
````

In deze array slaan we nog een array op met de de juniors van de promo Hopper. 
````
juniors = [["David", "Justine", "Valentin","Axel"]]
````

Stel je dan voor dat we de Lovelace-juniors willen toevoegen:
````
juniors = [["David", "Justine", "Valentin","Axel"], ["Julie", "Stéphane", "Mostapha", "Claudiu", "Son"]]
````

Zoals u kunt zien, voegen we een array toe, gescheiden door een komma. We hebben dus een array die zelf twee arrays bevat.
Als we de eerste waarde van de eerste array willen terugkrijgen, moeten we als volgt te werk gaan: 

````
WRITE juniors[1][1]
````

Het resultaat zal zijn: "David". 

Stel je nu voor dat we de eerste naam uit de tweede array willen terugkrijgen, 
Dan gaan we eerst de tweede array in en kiezen we het eerste element.

````
WRITE juniors[2][1]
````

Om al deze tabellen te doorlopen, maken we een lus in een lus....... 
Begint u hoofdpijn te krijgen? Het is normaal, maak je geen zorgen, maar het is niet zo ingewikkeld als het klinkt.

We maken eerste een lus die door de eerste array zal gaan. 
In deze lus nestelen we een tweede lus die door de twee andere array zal gaan....... Snap je het nog? 


![While nesting](https://media0.giphy.com/media/3oKGztUyVs2DTkhGUM/giphy.gif?cid=ecf05e475bb5e19d706464747717fdda)

Hier is een voorbeeld van een code, probeer het eens! 

````
\\ Main module
START
    juniors = [["David", "Justine", "Valentin","Axel", "Redouane"], ["Julie", "Stéphane", "Mostapha", "Claudiu", "Son"]]
  
    FOR i = 1 TO 2 DO
        FOR y = 1 TO 5 DO
            WRITE juniors[i][y] 
        ENDFOR 
    ENDFOR
END  
````

De eerste lus wordt twee keer verhoogd omdat er 2 arrays zijn.
De tweede lus wordt 5 keer verhoogd omdat elke array 5 elementen bevat. 
Nou, dit is niet ingewikkeld, toch? 



## Oefeningen 

1. Maak een array met 5 voornamen. Zorg er dan voor dat deze zin wordt weergegeven: "FIRST_NAME is een junior van de startup Hopper".
1. Herhaal de vorige opdracht en voeg de volgende array toe. Deze keer zorg ervoor dat er één vaardigheid per leerling wordt getoond. ``Skills = ["html", "css", "javascript", "php", "Java"]``.
1. Maak een algoritme dat het grootste aantal van deze array weergeeft. ``numbers = [[18,55],[29,13],[-2,15],[66,44]]``.
1. Gebruik de volgende array ``juniors = [["David", "Justine", "Valentijn", "Axel", "Redouane"], ["Julie", "Stéphane", "Mostapha", "Claudiu", "Zoon"]] ``. Zorg ervoor dat de eerste array "FIRST_NAME is een junior van Turings. De tweede array moet "FIRST_NAME is een junior van Lovelaces" weergeven.



&nbsp; 
    
**Volgende hoofdstuk**: [Functies](./function.md)  
