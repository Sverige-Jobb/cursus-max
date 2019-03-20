# SASS


SASS (bestandsextensie: scss) is een frontend development tool, die css genereert uit een taal gemaakt van "verbeterde" CSS. Door je stylesheets in sass te schrijven in plaats van direct in CSS, kan je <br>
- Gebruik maken van enkele zaken die je werktijd kunnen verkorten (je vakbond zal tevreden zijn), 
<br>
- Je code beter herbruikbaar maken van het ene project naar het andere (je baas zal tevreden zijn), 
<br>
- En ook leesbaarder, met name dankzij verbeterde syntaxis, het gebruik van functies (genaamd "mixin") en variabelen (genaamd "variables").

## Doelstellingen

 - Begrip SASS kunnen uitleggen.
 - CSS genereren aan de hand van SASS compilers.
 - Vaardigheden van SASS versterken.

## Deadline

Voorziene tijd: 2 dagen.

## Documentatie

 - [Introductie dia's voor SASS](https://docs.google.com/presentation/d/1IE4YPa8MuvjbtFKbzbFvfiMyJvDouF_C6DxbSasDRE4/edit?usp=sharing) (NL)
 - officiële site: [http://sass-lang.com](http://sass-lang.com)

## Setup

 Om SASS te kunnen gebruiken, heb je software nodig die op je computer draait en die de SASS-bestanden "observeert". Bij elke back-up wordt het bijbehorende CSS-bestand opnieuw gegenereerd.

 Hier zijn enkele toepassingen (gratis en betaald): [http://sass-lang.com/install]( http://sass-lang.com/install)

## Instructies

- Creëer een `learning-sass` repository op github en kloon dit naar je computer

- Creëer een basis html bestand `index.html` om te experimenteren met sass.

- Maak een `assets` map aan met alle bestanden voor het visuele : afbeeldingen, css, javascript.... en SASS bestanden (eindigend in.scss). Binnen deze map wordt voor elk bestandstype een map aangemaakt. Dat geeft zoiets als dit:

![assets-content](images/assets-content.png)

- Merk op dat deze "assets" mappenstructuur wordt aanbevolen omdat het een vorm van conventie is geworden onder frontend ontwikkelaars. Het is aan jou om er vanaf te wijken, als je graag het wiel opnieuw wilt uitvinden.
- Maak een `assets/scss/style.scss` bestand aan en configureer uw sass-toepassing om het `assets/css/style.css` bestand te genereren telkens wanneer het "bronbestand" (.scss-stijl) wordt gewijzigd.
- Zorg ervoor dat uw html bestand gekoppeld is aan uw css bestand (en niet aan het.scss bestand).
- Experimenteer met deze [oefeningen in de basisfuncties van SASS](https://gist.github.com/pixeline/dab8a29566b994453b8c681ed2b7ff2a)


## Project 
- Maak een nieuw project "Cinema-page". Maak een Landings pagina van een Bioscoop. 
- Maakt gebruik van zoveel mogelijk SASS-functies: variabelen, nesting selectors, onzichtbare code commentaren,..... Voel je vrij om je scss code te segmenteren in *partials*, om deze code herbruikbaar te maken in andere projecten. Bijvoorbeeld:  
    - als je dezelfde waarde meer dan eens gebruikt hebt, maak er dan een variabele van
    - als je complexe selectors hebt, gebruik dan nesting
    - als je afgeronde waarden gebruikt (bijv. `breedte: 33%;`), gebruik dan de wiskundige formule ( `breedte: (100/3)*1% ; `)
    - blader door deze [lijst van mixins](http://gillesbertaux.com/andy/doc/#mixin-prefix) en gebruik de mixins die betrekking hebben op uw code 
- Klaar? Push alles naar de master branch en online.

## Conclusie

Als alles goed is gegaan aan het einde van deze fanSASStische reis, begrijp je ondertussen het nut van Sass. Maak het schrijven van je css eenvoudiger en laat Sass wat van het zware werk doen:

![sassy](https://media.giphy.com/media/yx4B89tmk6rhGydqO6/giphy.gif)

## Verder gaan
- lees [Combineren van de bevoegdheden van SEM en BIO voor het verbeteren van CSS](https://css-tricks.com/combining-the-powers-of-sem-and-bio-for-improving-css/) voor veel goed advies over hoe u uw lessen kunt benoemen.
