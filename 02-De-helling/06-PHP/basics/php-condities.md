# PHP

## Condities

Logica wordt gebruikt om beslissingen te nemen in de code. De keuze om al dan niet een deel van de code uit te voeren is afhankelijk van de gemaakte vergelijkingen. Dit vereist het gebruik van condities. Er zijn een aantal verschillende conidities die je kan gebruiken.


### Operatoren

Het vergelijken van waarden is een zeer belangrijk onderdeel van programmeren. Het maakt het mogelijk om beslissingen te nemen in je code.

* `==` : gelijk aan
* `!=` : verschillend van
* `>`  : groter dan
* `<`  : kleiner dan
* `>=` : groter of gelijk aan
* `<=` : kleiner of gelijk aan

### Condities combineren

Je kan condities combineren met de sleutelwoorden AND en OR.

```PHP
if ($age <= 12 AND $language == "English") {
  .....
}
```

### Condities nesten

Je kan condities nesten.

```PHP
if ($gender == "female") {

  if ($age < 25) {
    ...
  } else {
    ...
  }

} else {
  ...
}
```

### Best practices: PHP voor HTML

Zoals je hebt kunnen zien, kan je html en php mixen in een .php bestand. Het is echter beter om zoveel mogelijk PHP-code te schrijven voordat je HTML start.
