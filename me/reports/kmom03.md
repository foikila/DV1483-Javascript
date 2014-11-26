
Kmom03
================

Innan detta kursmomentet hade jag nästan ingen koll på jQuery. Hade kopierat
lite slideshows/lightboxar till deverse projekt tidigare dock aldrig skrivit 
någon jQuery själv. Var lite i mot hela idéen med jQuery tyckte det var onödigt
att använda. Tänkte att man skulle ju kunna göra allt som går att jQuery i native
javascript. Dessa tankarna måste berott på ovishet om hur **smidigt** och enkelt 
det är med jQuery. Visst stämmer det att man kan skriva allt i native javascript
men då måste man också se till att de ska funka i alla deverse webbläsare. Men nu
har jQuery fundation varit good guys och löst detta åt oss. Helt underbart! Jag
kommer fortsätta skriva jQuery så ofta de går just på grund av detta.

De första uppgifterna var rätt tråkiga. Men det var helt klart lärorika, när man 
hade noll på jQuery så var det ett bra steg in i den världen. Det första fem 
uppgifterna gick snabbt och utan (större) problem. Men sen kom vi till lite 
svårare uppgifter såsom lightbox.

Under den övningen fick jag ta mycket hjälp av Mikeals kod. La till lite extra 
saker jämfört med Mikeals kod. Gjorde en event-lyssnaren på esc-knappen så man 
kan använda den för att ta bort lightboxen. Jag gjorde också en lite snyggare 
animation när man lightboxen håller på att försvinna. Istället för att göra 
`.remove()` så kör jag först `.fadeOute('fast')` och inne i den gör jag `.remove()`
vilket, i min mening, blev mycket snyggare. 

När jag implementera event-lyssnaren på dokumentet hade jag lite problem. När
jag klickade esc så vägrade den registreas. Det visade sig funka om jag använde
mig av `keyup() / keydown()` istället för `keypress()` vilket jag tycker är väldigt
knepigt, men är något jag får leva med antar jag...

När jag skulle göra bild-galleriet så hade jag lite problem då med. `$('gallery-all img').each()`
vägrar att köras och jag fattar inte varför. Det visade sig vara att jag hade glömt av att de är 
en klas jag jobbade med, det vill säga jag jag skulle göra `$('.gallery-all img')`. 

Slideshow har man sett på en del sidor. Kan tycka att det kan vara rätt fresh när 
det finns på rätt sorts sidor (tex [stayhard](https://stayhard.se/)). När jag skulle 
utveckla min visste jag inte riktigt var jag skulle börja. Har sett en del olika
lösning fast men då bara tänk på hur jag kan implementera någons redan färdiga lösning 
och då jobbat med html-delen bara. Tex [carousel](http://getbootstrap.com/javascript/#carousel) 
från bootstrap. Gick in i uppgift 8a att jag skulle göra något sånt. Tänkte "_hur 
svårt kan det vara...?_". Det visa sig vara otroligt mycket svårare än jag först 
tänkt mig. Det största problemet var helt klart att jag suger på css, behöver nog 
gå om kursen om css asså. Det slutade med att jag lägger den extrema varianten på 
hyllan och i stället tog tar den lätta vägen och skrev av Mikeals exempel. 

###Mitt plugin: ContactForm
Jag satt länge och velade om vad för plugin jag ville göra. Hade först en idé om att 
göra en avancerad Lightbox med knappar för att gå igenom olika bilder. Sen jobbade
jag på ett personligt projekt där jag behövde använda cookies på clientsidan. Så 
blev sugen på att göra ett jQuery-plugin för att hantera cookies. Dock hittade jag ett
väldigt bra och användbart plugin på [github](https://github.com/carhartl/jquery-cookie)
och när jag såg det så tappade jag intresset för den idéen.

Allafall, det slutade med att jag gjorde ContactForm som fade:ar in eller åker in från
toppen av sidan. Jag hittade insperationen till detta pluginet i en videoserie på 
[tutsplus](https://code.tutsplus.com/courses/30-days-to-learn-jquery/), tacka Olund
för tipsen, där han skapade en contactform. Jag har gjort rätt många ändringar
ifrån hans ursprungs kod. Hans var kod var inte en del av jQuery-objektet vilket
 jag fick reda på att vårt plugin var tvunga att vara. 

Länk till [plugin](http://www.student.bth.se/~jokd13/javascript/me/ContactForm.php).   
Länk till [övningarna](http://www.student.bth.se/~jokd13/javascript/playground/jQuery/).
