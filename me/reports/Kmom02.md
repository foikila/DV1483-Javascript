
Kmom02
================

Gjorda saker:
[Type-def](http://www.student.bth.se/~jokd13/javascript/playground/type-def/)
[Datatypes-and-values-using-strings](http://www.student.bth.se/~jokd13/javascript/playground/datatypes-and-values-using-strings/),
[Datatypes-and-values-using-numbers](http://www.student.bth.se/~jokd13/javascript/playground/datatypes-and-values-using-numbers/),
[Throwing-dice-using-functions/](http://www.student.bth.se/~jokd13/javascript/playground/throwing-dice-using-functions/)
Kollade på koden på dessa två uppgifterna och kände att jag hade koll på just dessa delarna i js på grund av mina förkunskaper. Så jag valde att gå den snabba vägen och kopiera. För uppfinna (tråkiga) hjul igen

Vad lärde jag mig av uppgiften?
-------------------------------

Visste inte att man kunde använda defaultvärden i funktioner.
Jag har alltid kollat om värdet som kommit in är undefined och sen om de är gjort en `typeof` för att kolla typen. Som jag förstår det så har jag gjort detta lite i onördan. Hade ju räckt med denna simpla lösning.

```
function sum(a, b, c) {
    a = a || 0;
    b = b || 0;
    c = c || 0;
    return a + b + c;
}
```

Tyckte de skulle bli kul att få fysik på bollen och visste inte hur jag skulle göra själv. Så denna gången valde jag att skriva av mos och se hur han gjort.

[Myball](http://www.student.bth.se/~jokd13/javascript/playground/pushing-the-ball/) Gick rätt bra att göra. Lite små rolig uppgift. Tycker man fick lite bättre koll på vad objekt var och hur man kan använda dem. Till min boll la jag till kollitions-kontroll som kollar så att inte bollen går utanför skärmen. Det funkade sådär dock, hade problem med att få window.innerhight / window.innerwidth att bli riktigt rätt. Nu får man en vacker scrollbar bara som gör att man hittar bollen. Perfekt.
