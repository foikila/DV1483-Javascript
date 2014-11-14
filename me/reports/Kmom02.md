
Kmom02
================

Visste inte att man kunde använda defaultvärden i funktioner. Så det va mycket intressant att få reda på hur man kan göra på ett smidigt sätt. 
Jag har alltid kollat om värdet som kommit in är undefined och sen om de är gjort en `typeof` för att kolla typen. Som jag förstår det så har jag gjort detta lite i onördan. Hade ju räckt med denna simpla lösning.

```
function sum(a, b, c) {
    a = a || 0;
    b = b || 0;
    c = c || 0;
    return a + b + c;
}
```

[Type-def](http://www.student.bth.se/~jokd13/javascript/playground/type-def/)
[Datatypes-and-values-using-strings](http://www.student.bth.se/~jokd13/javascript/playground/datatypes-and-values-using-strings/),
[Datatypes-and-values-using-numbers](http://www.student.bth.se/~jokd13/javascript/playground/datatypes-and-values-using-numbers/),
[Throwing-dice-using-functions/](http://www.student.bth.se/~jokd13/javascript/playground/throwing-dice-using-functions/)
Kollade på koden på dessa två uppgifterna och kände att jag hade koll på just dessa delarna i js på grund av mina förkunskaper. Så jag valde att gå den snabba vägen och kopiera. Varför uppfinna (tråkiga) hjul igen...

[Pushing-the-ball](http://www.student.bth.se/~jokd13/javascript/playground/pushing-the-ball/) gick rätt bra att göra. Lite små rolig uppgift. Tycker man fick lite bättre koll på vad objekt var och hur man kan använda dem. Till min boll la jag till kollitions-kontroll som kollar så att inte bollen går utanför skärmen. Det funkade sådär dock, hade problem med att få window.innerhight / window.innerwidth att bli riktigt rätt. Nu får man en vacker scrollbar bara som gör att man hittar bollen. Perfekt. 

[Boulder-Dash](http://www.student.bth.se/~jokd13/javascript/playground/boulder-Dash/) Jag började väldigt ambitiöst. Tänkte att jag skulle göra en tvådimensionell-array för att representera spelplanen och så vidare. Tänkte göra en riktigt fin algorithm som skulle skapa en bana som "gubben". Men när jag började skriva lite så orkade jag inte ro hem. Ville helre avsluta kursmomentet och gå vidare till något roligare. (Om du vill se hur långt jag kom innan jag valde att göra som mos kan du kolla [här](https://github.com/foikila/DV1483-Javascript/blob/004e482e6027c95245580eccf8b98207b037eaf7/playground/boulder-Dash/main.js))

[Roulettespelet](http://www.student.bth.se/~jokd13/javascript/playground/roulette/) gick bra inga konstigheter. Gjorde inte mer än vad som behövdes... Ville bara bli klar med uppgiften. 

###Extra funktioner

På föreläsningen så fick jag reda på vilka funktioner Mos hade i sin Mos.js. Han tyckte vi skulle lägga in dem också, så det gjorde jag. Det fanns lite allt möjligt smått å gott. Såsom ex Dump(), som man känner igen från PHP-kurserna. Jag gillar att jobba på det sättet att man skriver ut all variablar så den funktionen är perfekt för mig tror jag.
