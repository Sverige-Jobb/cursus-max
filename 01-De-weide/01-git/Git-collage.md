## Doelstellingen

- Je vaardigheden met Markdown verbeteren 
- Je vaardigheden met Git verbeteren 
- Leren omgaan met de workflow van Git in samenwerking met anderen

## Instructies

Voorziene tijd: Halve dag

Maak een [Cadavre exquis](https://nl.wikipedia.org/wiki/Cadavre_exquis) aan met GitHub.

**Uitleg**: tegelijkertijd aan dezelfde bestanden werken, conflicten beheren (of vermijden).


### Opdracht 1: Initialisatie
1. Maak een repository aan op GitHub genaamd `opdracht-collage-JeVoornaam`.
1. Maak een bestand aan genaamd *README.md*.
1. Open het bestand en maak een titel met Markdown. Sla het bestand op als je klaar bent.
1. `clone` de repository naar je computer.
1. Maak een branch __"development"__.
1. Ga naar deze nieuwe branch.
1. Schrijf *3* tekstregels in de *README.md* om een verhaal te starten __(volledig opgemaakt in markdown)__ en sla het bestand op.
1. `add` de bestanden aan je Git index.
1. `commit` de bestanden.
1. `push` de bestanden naar de __"development"__ branch.
1. Nodig uw collega's uit als __-contributeurs__.

### Opdracht 2: Bijdragen
1. Bezoek een repository van een collega die u heeft uitgenodigd.
1. Maak een `clone` van de repository.
1. Voer `git branch -a` uit om de lijst met branches op de server weer te geven.
1. Voer een `pull` uit van de __"development"__ branch.
1. Voer een `checkout` uit van de __"development"__ branch.
1. Maak een branch met de naam __"add-your-name"__ uit __"development"__.
1. Voeg uw 3 regels tekst toe in de *README.md* na de vorige gebruiker met behulp van een teksteditor.
1. `add` de bestanden aan je git index.
1. `commit` de bestanden.
1. `push` de bestanden naar de __"add-your-name"__ branch.
1. `merge` de __"add-your-name"__ branch samen met de __"development"__ branch.
1. `push` de __"development"__ branch.
1. Herhaal deze stappen voor al je andere collega`s

### Opdracht 3: Versiebeheer
1. Zodra al uw collega`s klaar zijn, keert u terug naar uw repository
1. `merge` de __"development"__ branch met de __"master"__ branch.
1. Geef de __"master"__ branch een `tag` met de naam __"versie-1"__.

### Opdracht 4: Corrigeren
1. Maak een branch __"correcties"__ van de __"master"__ branch.
1. Voer de spellingcorrecties uit. Als er geen fouten zijn gevonden, voeg je de vermelding toe ("Zonder fout")
1. `add` de bestanden aan je Git index.
1. `commit` de bestanden.
1. `push` de bestanden.
1. `merge` de __"correcties"__ branch samen met de __"master"__ branch.
1. Ga naar de branch __"development"__
1. `merge` de __"development"__ branch samen met de __"corrections"__ branch.

### Opdracht 5: Problemen herstellen
Schrijf een persoonlijke memo in MarkDown over hoe Git werkt, de `workflow`, en de nuttige commando`s. Hou dit lijstje altijd bij de hand. Vul dit lijstje aan naarmate de training vordert.
Zo zal je steeds meer ervaring op doen en jezelf uit elke situatie kunnen redden.

## Hulpbronnen
- [Git Basics](https://rogerdudler.github.io/git-guide/index.nl.html)
- [Git Cheat Sheet](https://rogerdudler.github.io/git-guide/files/git_cheat_sheet.pdf)

![Git workflow](http://blog.launchdarkly.com/wp-content/uploads/2016/07/Slide2.jpg)

