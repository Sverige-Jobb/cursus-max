# Lussen

1. [Inleiding](../README.md)
1. [Variabelen](./variables.md)
1. [Condities](./conditions.md)
1. Lussen ←
    * [De lussen](#de-lussen)
    * [WHILE / ENDWHILE](#WHILE--ENDWHILE)
    * [FOR lussen](#for-lussen)
    * [De verschillen tussen FOR en WHILE](#de-verschillen-tussen-for-en-while)
1. [Arrays](./array.md)
1. [Functies](./function.md)


## De lussen 

We zullen nu een element bespreken dat complexer en obscuurder is dan de condities, ik heb over: de lussen!

Lussen zijn een essentieel element in de programmering. Ze maken het mogelijk om de instructies een aantal keren te herhalen. Ze helpen ook om herhaling te voorkomen. Laten we zeggen dat je de nummers 1 tot en met 10 wilt weergeven. Zonder de lussen moeten we zoiets schrijven: 


````
\\ Main module
START
    WRITE 1
    WRITE 2
    WRITE 3
    WRITE 4
    WRITE 5
    WRITE 6
    ...
END
````
We zouden kunnen kopiëren en plakken, maar het is niet schoon en een goede ontwikkelaar zal zichzelf nooit **herhalen**. Lees het volgende [D.R.Y](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself) !

![Don't repeat your self](https://jenwlee.files.wordpress.com/2016/11/bart.jpg)

## WHILE / ENDWHILE
De lus **WHILE** zal de code blijven uitvoeren zolang de conditie ``TRUE`` is. Als niet meer aan de voorwaarde wordt voldaan, dan stopt de lus. 

Voorbeeld met dit stukje code :

````
\\ Main module
START
    number = 0
    WHILE number <= 10 DO
        WRITE number
        number = number + 1
    ENDWHILE
    WRITE "Einde van de lus"
END
````
In dit voorbeeld, **WHILE** zolang de variabele ``number`` minder dan of gelijk is aan 10, schrijft het algoritme het getal en voegt 1 aan de variabele ``number`` toe. (We zeggen dat we met 1 verhogen) Zodra de variabele ``number`` gelijk is aan 10, gaat de computer naar de volgende regel, in dit geval ``Einde lus``.
 
### /!\ Pas op voor oneindige lussen.

Wees voorzichtig, als we vergeten de lus te verhogen met +1, dan creëren we een oneindige lus. Omdat het variabele getal altijd gelijk zal zijn aan 0, gaan we altijd de voorwaarde in en wordt het op een oneindige manier uitgevoerd. Onder reële omstandigheden kan dit ertoe leiden dat de computer vastloopt. 

![boucle infinie](https://ljdchost.com/flK1FbB.gif)


## Oefeningen
1. Schrijf een algoritme dat de gebruiker vraagt om een nummer in te voeren. Zorg er vervolgens voor dat uw programma alle cijfers tot en met 0 weergeeft. 
Als de gebruiker bijvoorbeeld het getal 3 invoert, dan zal uw programma zoiets als dit weergeven: ``3,2,1,0``.

2. De juiste prijs. Maak een variabele aan die het te vinden getal bevat. Maak vervolgens een algoritme dat de gebruiker vraagt deze prijs te vinden. Als de gebruiker er te veel invoert, krijgt hij de zin: "Het is minder". Als hij een getal invoert dat te laag is, heeft hij de zin: "Het is meer". Als de gebruiker het juiste nummer vindt, krijgt hij de zin: "Goed gedaan, je hebt gewonnen".   


## FOR lussen
Met "FOR" lussen hoeft u niet langer te verhogen met +1. Het vermijdt dus oneindige lussen door zijn structuur. Het lijkt voor sommigen ook leesbaarder. Als we teruggaan naar het voorbeeld dat we eerder gaven: 

````
\\ Main module
START
nombre = 0
WHILE nombre <= 10 DO
    WRITE number
    number = number + 1
ENDWHILE
END
````

En als we dat vertalen met de ``FOR`` lus, zou het er zo uitzien: 

````
\\ Main module
START
FOR number = 0 TO 10 DO
    WRITE number
ENDFOR 
END 
```` 

Hoe wordt de code vereenvoudigd? Er is minder code en het kan ons niet schelen hoe de code wordt uitgevoerd. 

## De verschillen tussen ``FOR`` en ``WHILE``

Met ``WHILE`` lussen weten we niet noodzakelijkerwijs hoeveel iteraties het zal uitvoeren. Als we de uitoefening van de eerlijke prijs hervatten, blijft de lus lopen tot het juiste antwoord is gegeven. We weten dus niet hoe vaak het zal gebeuren. Het zou onmogelijk zijn om deze oefening te doen met de ``FOR`` lus

Met de "FOR" lus kennen we noodzakelijkerwijs het aantal iteraties en zullen we daarom een bepaald aantal keren uitvoeren.

De oefeningen voor de ``FOR`` lus worden in het volgende hoofdstuk behandeld.

&nbsp; 
    
**Volgende hoofdstuk**: [Arrays](./array.md)  
