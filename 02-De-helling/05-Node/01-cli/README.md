# Node.JS: CLI

> Our first CLI tool, with node.js

* * *

## Node.js - wat is het ?

Oorspronkelijk was **JavaScript** een taal die uitgevoerd werd in de *browser* die beschikt over een *JavaScript engine*.  
**Node.JS** is een *runtime* die toelaat om JavaScript uit te voeren buiten de browser, op deze manier kunnen we JavaScript zo wat overal gebruiken.

Node.JS geeft JavaScript de mogelijkheid tot interactie met het systeem (zoals bijvoorbeeld het aanpassen van bestanden of het uitvoeren van andere programma's) en een *modulaire* structuur die gebaseerd is op de pakketbeheerder `npm`. Deze bevat honderdduizenden modules om te gebruiken binnen Node.JS . (>850.000 in januari 2019).

### Een beetje overal

Hoewel Node.JS voornamelijk in het back-end gebruikt wordt, waar het de concurrentie aan gaat met PHP/Java/Ruby, is het niet enkel daartoe gelimiteerd. Zo kan je het ook gebruiken voor toepassingen op 

- mobiel (*via* ReactNative bijvoorbeeld), 

- desktop (*via* Electron), 

- of zelfs robotica en IoT (*via* Johnny-Five).

## Eerste Node.JS programma

Om Node.JS te ontdekken ontwikkelen we een kleine toepassing in de command line.

Deze toepassing zal relatief eenvoudig zijn en stelt je in staat om Node.JS, npm en zijn modules te ontdekken.

### 1. Installatie Node.JS en `npm`

Navigeer naar de [officiele Node.JS site](https://nodejs.org/en/) en volg de installatie instructies. Node.JS en `npm` zullen beiden geïnstalleerd worden.

Installeer de versie `11.6+`.

### 2. Creëer je werkomgeving

Maak een GitHub repo aan voor dit project en kopieer dit naar je computer. Gebruik vervolgens het `npm init` command om de set up af te ronden.

> **NOTE:** Wanneer gevraagd wordt naar het **entry point**, laat je de standaard antwoord "index.js" staan.


### 3. Eerste script

Maak een bestand "index.js" aan in je repository en voeg er volgende code aan toe:

```
console.log("Hello, Node.JS!");
```

Typ daarna volgend command in de terminal:

```
$ node .
```

Zie zo, een eerste Node.JS script.

### 4. Aan de slag

Vanaf hier is het aan jullie, lees aandachtig de opdracht en ga daarna aan de slag.

Jullie gaan een CLI tool maken die als parameter een *email adres* krijgt:

```
$ myNodeCLITool email@example.com
```

Het programma zal controleren als de paramater een correct email adres is en vervolgens een HTTP-verzoek doen aan de *[**Have I been pwned?**](https://haveibeenpwned.com)* API service zoals [hier uitgelegd](https://haveibeenpwned.com/API/v2#BreachesForAccount). Geef vorvolgens het resultaat op een leesbare manier weer in de terminal.

> ⚠️ ATTENTION : Om ervoor te zorgen dat de command line tool met Node.JS correct zal geïnterpreteerd worden, plaats je volgende code bovenaan het uit te voeren bestand (in ons geval is dit "index.js") :
>
```
#!/usr/bin/env node
```
>
Deze bizarre lijn code aan het begin van een excecutable noemen we een [shebang](https://en.wikipedia.org/wiki/Shebang_(Unix))

Met deze command line tool zal je kunnen controleren als accounts gekoppeld aan een email adres gecompromitteerd zijn door inbreuken op de veiligheid.

#### Te gebruiken npm packages

Er bestaan *ongelofelijk veel* packages op npm, waaronder packages die exact doen wat er van jullie gevraagd wordt.

Om jullie zoektocht door deze packages iets eenvoudiger te maken, raad ik jullie volgende packages aan: 

- [`email-validator`](https://www.npmjs.com/package/email-validator), om een email adres te verifieren.
- [`axios`](https://www.npmjs.com/package/axios), voor het uitvoeren van HTTP requests

#### Extra opties

Wie zijn toepassing wat mooier wil doen ogen kan volgende packages eens bekijken:

- [`ora`](https://www.npmjs.com/package/ora), voor het weergeven van een spinner *spinner* (animatie van het laden) tijdens je verzoek aan de API
- [`chalk`](https://www.npmjs.com/package/chalk), om kleuren toe te voegen aan de terminal
- [`figlet`](https://www.npmjs.com/package/figlet), om je ouput in de terminal wat extra te geven

### 5. Publicatie voorbereiden en testen

Jullie hebben jullie programma tijdens het ontwikkelen voortdurend kunnen testen, maar voor de publicatie zou het interessant zijn om het een naam te geven. Bijvoorbeeld de naam `pwned` zodat we volgende commando kunnen geven in de command line:

```
$ pwned email@example.com
```

Bekijk hiervoor de [documentatie](https://docs.npmjs.com/files/package.json) van `package.json`, meerbepaald van het `bin` property. Met `npm link` kan je je tool lokaal testen voor je het publiceert.

### 6. Publiceren 

Een eigen package publiceren op npm is gratis. Maak daarvoor eerst een [account aan op npm](https://www.npmjs.com/signup).

Voor je je package effectief publiceert, voer je volgende stappen uit:

#### Vervolledig je README.md

De inhoud van je README bestand wordt weergegeven op de informatie pagina van je package op de npm website. Leg uit wat de functie van je package is, hoe het te gebruiken, ... alle informatie die nuttig kan zijn. Heb je geen inspiratie? Neem dan een kijkje bij andere packages.

> **IMPORTANT:** schrijf je README in het engels

#### Kies een naam voor je package

Je kan vrij de naam van je package kiezen. Het is mogelijk dat je naam al gebruikt wordt op npm, maar geen paniek, je kan je package *"scopen"*: voor het `name` property van je `package.json` voeg je `@jeNpmLogin` toe. 

```
{
	"name": "@naam/pwned"
}
```

Zo kan je zonder problemen je package publiceren, zelfs als de naam reeds in gebruik is.

#### Je versie nummer kiezen

De eerste versie van je package kan `1.0.0`, `0.1.0` of `0.0.1` zijn. De keuze is aan jou.

Wanneer je besluit om je package aan te passen en een nieuwe versie te publiceren, zorg er dan voor dat je het [semver](https://semver.org/) principe volgt. 

#### Publiceren

Om je package tenslotte te publiceren, volstaat het om volgend command in te geven:

```
$ npm publish --access public
```

## Deadline

Dit is een eerste korte verkenning van node, npm en de packages die beschikbaar zijn.
We zullen maximum **drie dagen** werken aan deze opdracht.