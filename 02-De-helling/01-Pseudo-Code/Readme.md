# Algoritme en Pseudo-code


## Doelstellingen
* Ervaring opdoen in de algoritmiek
* Eerste stap in het coderen

## Deadline
Voorziene tijd: 1 dag.

* Afleveren op: **Github**
* Repositorynaam: ``Pseudo-code``
  
## Index

1. Inleiding ←
   * [Wat is algoritmiek?](#wat-is-algoritmiek?)
   * [En pseudo-code?](#en-pseudo-code?)
   * [Installatie](#windows)
2. [Variabelen](code/variables.md)
3. [Condities](code/conditions.md)
4. [Lussen](code/whileAndfor.md)
5. [Arrays](code/array.md)
6. [Functies](code/function.md)

   


## Wat is algoritmiek?
Laten we eens kijken op Wikipedia. 

> Een algoritme is een eindige reeks instructies die vanuit een gegeven begintoestand naar een beoogd doel leidt. 

Algoritmes zijn overal te vinden, niet alleen in computers of wiskunde. Wanneer je bijvoorbeeld de instructies in de gebruiksaanwijzing van uw Ikea ladenkast volgt, volg je eigenlijk een algoritme. Of als je de weg uitlegt naar de plaatselijke kruidenierswinkel, dan gebruik je ook een algoritme. 

````
- Ga rechtdoor.
- Sla linksaf.
- Ga rechtdoor.
- Sla rechtsaf. 
````

Kortom, een algoritme is dus een set van **eenvoudige instructies** die gebruikt kunnen worden om een resultaat te bereiken of een probleem op te lossen.

## En pseudo-code?
Laten we teruggaan naar wikipedia:
> Met pseudocode wordt over het algemeen een onechte (niet-formele) programmeertaal bedoeld. 'Pseudo' betekent onecht, 'code' verwijst naar de broncode van een computerprogramma.

We zullen dus gebruik maken van de pseudo-code die als voordeel heeft dat we ons alleen op de logica richten zonder ons zorgen te maken over de syntax, die specifiek is voor elke technologie. Deze logica zal van toepassing zijn op elke computertaal. We zullen de freeware [Larp](http://larp.marcolavoie.ca/fr/Files/LarpSetup.exe) gebruiken om het te implementeren en te kunnen draaien.

### Windows
Gewoon [Larp](http://larp.marcolavoie.ca/fr/Files/LarpSetup.exe) downloaden en installeren, je hoeft niets anders te doen.

### Linux
Voor de Linux-gebruikers, download en installeer eerst [Wine](https://www.winehq.org/). Wine one is een klein hulpprogramma waarmee je een aantal Windows programma's op linux kunt draaien. Dan kunt u [Larp](http://larp.marcolavoie.ca/fr/Files/LarpSetup.exe) installeren. 

### Mac OSX
Voor degenen die op Mac Osx zijn, is er een equivalent van Wine en dat is [Play on mac](https://www.playonmac.com/en/). Vervolgens kunt u [Larp](http://larp.marcolavoie.ca/fr/Files/LarpSetup.exe) downloaden en installeren.


#### Het creëren van het nieuwe project
Ga naar `` File`` en klik dan op ``New``. Selecteer vervolgens "Pseudo-code".

Je zou zoiets moeten hebben: 

````
\\ Main module
START

END
````

De sleutelwoorden "START" en "END" definiëren een blok waarin uw algoritme wordt uitgevoerd. Als u een deel van uw algo buiten deze trefwoorden plaatst, wordt deze niet uitgevoerd. Erger nog, je hebt een fout. 


**Volgende hoofdstuk**: [Variabelen](code/variables.md)