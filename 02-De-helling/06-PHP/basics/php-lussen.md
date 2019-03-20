# PHP

## Loops

Loops gebruik je om een blok opdrachten in te stellen die meer dan een keer worden uitgevoerd. Soms wordt een loop een specifiek aantal keren herhaald, bijvoorbeeld om alle provinciehoofdsteden weer te geven. Een loop kan ook worden herhaald totdat een specifieke conditie zich voordoet, bijvoorbeeld om productinformatie weer te geven totdat alle producten zijn weergegeven, ongeacht het aantal producten, Er zijn verschillende loop-typen.



### For-loop

Een **for**-loop stelt een teller in en herhaalt een blok opdrachten totdat de teller een gespecificeerde waarde heeft bereikt.

Algemeen:

```PHP
for (beginwaarde; eindconditie; increment) {
  Opdrachtenblok
}
```

Voorbeeld:

```PHP
for ($i = 1; $i < 10; $i++) {
  echo "$i. Hello world! <br/>";
}
```

### While-loop

Een **while-loop** stelt een conditie in, controleert de conditie en voert een opdrachtenblok net zo lang uit totdat de conditie niet meer waar is.

Algemeen:

```PHP
while (conditie) {
  Opdrachtenblok
}
```

Voorbeeld:

```PHP
$age = 0;

while ($age < 18) {
  echo "You are not old enough!";
  $age++;
}
```


### Foreach-loop

Een **foreach**-loop werkt enkel voor arrays, en wordt gebruikt om door elk key/value paar in een array te loopen.

Algemeen:

```PHP
foreach ($array as $value) {
  Opdrachtenblok
}
```

Voorbeeld:


```PHP
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
```
