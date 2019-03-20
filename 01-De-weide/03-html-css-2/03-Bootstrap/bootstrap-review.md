# Bootstrap review

## HTML

### Orde van tags in `<head>`

Je HTML wordt door de browser lijn per lijn gelezen en uitgevoerd. De orde waarin je je code plaatst is dus zeer belangrijk. Dit is zeker zo voor de elementen in de `<head>` tag van je document. Deze bepalen in grote mate hoe snel de content van je pagina zal verschijnen.


#### `<meta>` tags

De `<meta>` tags bevatten informatie over je HTML bestand. Deze worden daarom bovenaan het bestand geplaatst.

De eerste `<meta>` tag die geplaatst wordt vertelt de browser welke **character encoding** je gebruikt. Zo kan de browser je document correct lezen. Deze `<meta>` tag komt dus bovenaan in je `<head>`.

De volgende `<meta>` tag bevat **informatie over de viewport**. Deze zorgt ervoor dat je website op verschillende toestellen correct zal weergegeven worden. De informatie in deze tag is belangrijk voor je CSS en moet dus voor je CSS geplaatst worden.

**!! Deze twee tags moeten eerst komen in je `<head>` zodat je document correct gerendered wordt !!**

Daarna kan je optioneel nog informatie over de content toevoegen. De **description** meta tag bevat een beschrijving van je website. Deze zal ook weergegeven worden op google wanneer je website wordt opgezocht. 
Als webdeveloper mag je trots zijn op je werk dus plaats gerust ook een **author** tag.

Tenslotte plaats je ook een `<title>` tag. De **titel** van je pagina wordt weergegeven in het browser tabblad. 

Tot nu toe ziet de inhoud van `<head>` er dus als volgt uit:

```
<head>
	<--! meta tags -->
	
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="De beschrijving van je website.">
	
	<meta name="author" content="Jantje Jansens">
	
	<title>Titel van de pagina</title>	
</head>
```

#### Stylesheets

Hierna worden je assets ingeladen. Indien je gebruik maakt van een **externe CSS**, laad je deze **eerst** in. **Daarna** laad je je **eigen CSS** in. Dit doe je om te vermijden dat je eigen CSS overschreven wordt door het externe CSS bestand.

Om het laden van de CSS zo snel mogelijk te laten gebeuren plaats je je CSS in 1 bestand. Zo moet de webpagina maar 1 verzoek sturen naar de server om je CSS op te halen.

#### Script

Wanneer je browser een Javascript bestand tegenkomt in je HTML zal deze eerst het volledige Javascript bestand laden en uitvoeren. Dit zorgt ervoor dat de rest van je pagina pas daarna geladen wordt. Dit kan je webpagina zeer traag doen lijken.

Je Javascript code wordt best geladen na alle HTML en CSS. Om dit te bereiken kan je je script.js linken op het einde van je `<body>` tag. Zo ben je zeker dat je script wordt ingeladen nadat je hele webpagina gerendered is.


```
<!DOCTYPE html>
<head>
	<--! meta tags -->
	
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="De beschrijving van je website.">
	
	<meta name="author" content="Jantje Jansens">
	
	<title>Titel van de pagina</title>
	
	<--! link assets -->
	
	<link rel="stylesheet" href="extern.css">
	
	<link rel="stylesheet" href="eigen.css">

</head>
<body>

	//De content van je pagina
	
	<script type="text/javascript" src="pad/naar/script.js"></script
</body>
</html>
```


## CSS

Gebruik duidelijke classNames in je HTML en vermijd herhaling.

**niet:** .header1, .header2, ...

**wel:** .mainHeader, .menuHeader, ...

## Algemeen

* Zorg voor een duidelijke structuur van je bestanden en noem je startpagina index.html

```
- index.html
- assets
	- img
	- css
	- js 

```

* geen onnodige bestanden zoals SASS uploaden naar Github (zoek op wat een .gitignore bestand is)
