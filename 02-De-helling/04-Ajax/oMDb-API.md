# Ajax Training Pre-Music API
- - - -
### Overview
Here is a small exercice to help you get into the Music API Challenge.
You will use fetch to request data to an api. The  [Fetch API](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API)  is a simple interface for fetching resources. Fetch makes it easier to make web requests and handle responses than with the older  [XMLHttpRequest](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest) , which often requires additional logic (for example, for handling redirects)

### Exercice
Your mission, should you choose to accept, is to create a movie search engine 🍿. To do so you must use the open API from oMDb. Your web page should work like google :
* First you must have page with just a search bar where you can enter the name of a movie.
* After doing the search, the web page should provide a list of movies that have the name in their title (each element of the list should contain the name of the movie and the year)
* The elements should be clickable. When clicking, the user will navigate to an other page containing all the information the movies, with the poster, and the synopsis.

An icon in the the top left brings the user back to the orignal search page (the one with only the search input)

Flow : Search => List => Detailed movie 

### Tools
For requests you must use an api key in the url to make it work 🔑 : Here is one you can use http://www.omdbapi.com/?apikey=5b5839a9.
Use [Postman](https://www.getpostman.com) to train yourself with requests, it will help you out a lot.

Here are also tutorials about using fetch :  
* 🇫🇷 [Grafikart](https://www.youtube.com/watch?v=B2Jt9bNMxyw)  
* 🇬🇧 [Traversy](https://www.youtube.com/watch?v=Oive66jrwBs)  
* and the MDN [Documentation](https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch)  

### Bonus
Add advanced search option where the user can enter the year and the type of movie he is searching (in the main page)


