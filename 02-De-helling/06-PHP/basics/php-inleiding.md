# PHP

## PHP : "Hypertext Preprocessor"
PHP is software die wordt uitgevoerd op de **Backend**-kant, dwz. op het niveau van de webserver. **Frontend** geeft aan wat er gebeurt op de Client-kant (browser).

PHP laat de server toe "**te denken alvorens te spreken**". In informatica staat "denken" gelijk aan berekenen. De server kan dus gegevens manipuleren en deze terugsturen naar de "Client" (browser) in verschillende formaten (vaak HTML, XML, JSON, simple text, CSS, Javascript...).

**Wat uitleg over het verschil tussen Frontend en Backend:**

[![What is the difference between frontend and backend development? Video](http://img.youtube.com/vi/eCUeoPp-5do/0.jpg)](http://www.youtube.com/watch?v=eCUeoPp-5do "What is the difference between frontend and backend development?")

## Waarom PHP gebruiken als het iets anders dan PHP terugstuurt?
PHP laat je toe meer dynamische pagina's te maken.

Beeld je in dat je een webpagina moet maken die "Hallo" kan zeggen tegen elk van de 7 miljard mensen op aarde. Dit zou betekenen dat je 7 miljard HTML pagina's moeten maken, elk toegankelijk via een url van bijvoorbeeld de volgende stijl: http://citizens.net/humans/jose-garcia.html.

```HTML
<html>
<head>...</head>
<body><h1>Hallo José Garcia!</h1></body>
</html>
```

Dit zou gruwelijk lang duren en de opdracht afwerken is knap lastig gezien je eeuwig files zou moeten deleten (mensen die komen te overlijden) en aanvullen (nieuwgeborenen).

PHP laat je toe slechts één bestand (een "php-script") aan te maken waar de naam van de mens via het URL-adres mee kan worden verzonden, wat de HTML dynamisch "maakt".

Het URL-adres wordt bijvoorbeeld http://citizens.net/humans/index.php?name=jose-garcia

```HTML
<html>
<head>...</head>
<body><h1>Hello<?php echo $_GET['name']; ?>!</h1></body>
</html>
```

Het volstaat nu dus dat iedereen een gepersonaliseerde URL krijgt. Het is niet meer nodig om 7 miljard afzonderlijke HTML-bestanden aan te maken.

## De Set-Up

### Development / production / staging server
Gedurende de ontwikkeling van een digitaal product werken we niet direct op de server waar de website of applicatie op draait. Met een klein foutje zouden we immers de gehele applicatie kunnen breken, dit ter frustratie van de gebruikers.

Het is beter te werken op onze eigen computer: het is gemakkelijk, laat ons toe om te testen zonder anderen te storen en te werken zonder internet (bv. op de trein). Dit is wat we de _Local Development Environment_ of simpelweg de _Development Server_ noemen. De uiteindelijke server waar ons product op gehost zal worden noemen we dan weer de _Production Server_. Soms wordt er ook gebruik gemaakt van een _Staging Environment_ die nog te valideren code bevat alvorens deze in productie gaat (dus een extra stap tussen de Local Development Environment en de Production Server).

### Een Local Development Environment aanmaken

Voor een Local Development Environment aan te maken hebben we nood aan een "Development Stack", wat verwijst naar de nodige software voor een webapplicatie op de server. De meest voorkomende PHP-stacks zijn LAMP en LEMP: Linux / Windows / MacOS + Apache (of nginx wat wordt uitgesproken als "engine X") + MySQL + PHP.

Voor Windows heb je ook "WAMP" en voor Mac heb je "MAMP".

#### 1. Installatie

1. Installeer een LAMP omgeving

Maakt niet uit hoe je het doet, maar je moet een server aanmaken met het adres http://localhost:PORT/ zodat je verder kan.

2. Maak een map "test" aan
3. Maak in de map een file index.php aan waarin het volgende staat:

```php
<?php
echo "Hello!";
?>
```

#### 2. Open je browser en surf naar http://localhost/test

Je zou het sympatieke berichtje "Hello!" moeten ontvangen. Proficiat, je hebt net je eerste PHP-script geschreven.


### Oefeningen

- Neem de tijd om te spelen met je index.php file. Voeg bijvoorbeeld een foto van een kat toe.
- Maak in dezelfde folder een tweede file aan (`cats.php`). Voeg wat content toe en maak er zeker van dat je beide de pagina's linkt zodat je makkelijk tussen de twee kan wisselen.
- Klaar? Geweldig!
