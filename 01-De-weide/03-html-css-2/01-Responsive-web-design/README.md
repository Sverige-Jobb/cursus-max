# Responsive Web Design

## Doelstelingen

 - Het uitleggen en kunnen toepassen van CSS Media Query`s
 - Webpagina`s kunnen weergeven op verschillende toestellen.


## Deadline


## Het Probleem

![multiplicity of screens](./responsive.jpg)

**Verschillen in weergaven tussen toestellen**
Tegenwoordig kan je dezelfde inhoud in verschillende formaten zien; HD-tv, een laptop, een horloge, een smartphone. 
Je kan je voorstellen dat de inhoud moet worden aangepast voor elk apparaat. 
Hoe dan? Een codebasis voor elk platform? Dupliceren van de code voor elke versie van dezelfde website?

Het probleem ontstond in 2007 met de golf van de eerste Iphones, vanaf dat moment was het een stormloop van nieuwe formaten. 
De industrie had tijd nodig om zich aan te passen en een nieuwe standaard te vinden. 

In 2010 introduceerde de webdesigner [Ethan Marcotte](https://twitter.com/beep) de term "Responsive Web Design" of (RWD) via [A List Apart](http://alistapart.com/article/responsive-web-design).


## De Oplossing : CSS Media Queries

Met Media Queries kunnen we de navigator vertellen: als de grootte van het scherm X is, gebruik dan deze CSS-eigenschappen, anders die.
Het verwachte UX-resultaat is zoiets als dit:

![](responsive-screens.gif)

Danzij de RWD konden we nu heel anders tegen websites aankijken waarbij steeds meer onderscheid wordt gemaakt tussen substantie (inhoud) en uiterlijk (de container: het apparaat).


## Opdrachten
1. [Verdiep je zelf in Media Query`s](https://www.w3schools.com/css/css_rwd_mediaqueries.asp).
2. Voer de volgende oefeningen uit.

### 1. Verander de kleur
Maak een HTML-bestand en een CSS-bestand.
Zorg ervoor dat de achtergrondkleur van het hoofdgedeelte **rood** is wanneer de breedte van het kijkvenster minder is dan 300px, **groen** wanneer het kijkvenster groter is dan 300px en lager dan 768px en **blauw** wanneer de viewport groter is dan 768 px.

### 2. Elementen weergeven / verbergen
Voeg drie `div` toe: één div met de `id="small"`, een div met de `id="medium"`, een andere div met de `id="large"`. Alleen voor weergavedoeleinden voor elk van de elementen voegt u de tekst 'Small', 'Medium' of 'Large' toe.

Zorg ervoor dat er slechts één DIV wordt weergegeven, afhankelijk van de breedte van de huidige viewport.


### 3. Pas de grootte van de tekst aan, op basis van het apparaat
Voeg in elke DIV een titel en een paar alinea's (lorem ipsum) toe. 
Geef de titel een beschrijvende tekst (bijvoorbeeld: "Content for smartphones").
Ook de lettergrootte moet zich aanpassen op basis van het apparaat.

### 4. Aanpassingen
Zorg ervoor dat:
- indien een klein schermgrootte, worden de 3 divs op elkaar gestapeld.
- indien een medium schermgrootte, neemt de eerste div 2/3 van de breedte, de tweede 1/3 van de breedte en de derde de volle breedte in beslag.
- als het scherm groot is, komen de 3 div's naast elkaar staan.


### 5. Uitdaging
Pas [de lay-out (zip)](exo-respons.zip) aan voor tablets en smartphones schermen.

- Gebruik en bewerk alleen het bestaande CSS-bestand

## Done? Congratulations!!
