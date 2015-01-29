
Kmom07
================

[Github](https://www.github.com/foikila/DV1483-Project)   
[Demo](nodejs1.student.bth.se:8019)


<h2 id="1">Krav nummer 1 - Produkten</h2>

Här kommer min redovisningstext om mitt projekt i DV1483-javascript. Jag valde 
att göra en webb applikation för att dela bilder på ett så enkelt och smidigt 
sätt som möjligt. Min applikation fick namnet Birca efter Bild + IRC då det är 
en typ av irc där man postar bilder. Tyvärr vad det inte jag som kom på detta 
underbara namn, men visst är det inte vackert...? 

Projeket är skrivet i Javascript, både på server-sidan och klient-sidan. På 
server-sidan använder jag mig utav NodeJS och ramverket Express och på klient-
sidan använder jag mig mestadels utav jQuery men även lite Native javascript. 
Birca har stöd för uppladdning av bilder via en Drag-n-Drop-funktion och visning
av bilder i en "tidslinje". 

Birca kommer i framtiden ha stöd för visning av enskrilda bilder. 

Installations guide av Birca hittar du 
[här](https://github.com/foikila/DV1483-Project#installing-the-app-on-your-server).

Finns det frågor om Birca så lämna gärna en issue på gitbub eller maila mig på
[me@jonatankarlsson.se](mailto:me@jonatankarlsson.se)


<h2 id="2">Krav nummer 2 - Konkurrenterna</h2>

Det finns klart stor konkurrans då dela bilder är väldigt populärt på internet.
Det finns [Instagram](https://www.instagram.se), [Imgur](http://imgur.com/), 
[Dropbox](https://dropbox.com) med många, många fler. Min webb applikation är 
någon slags bladning utav dessa ovanlämnda. Jag valde att ha en layout som 
liknar instagram med deras vägg liknande design och deras hämtning av mer data 
när man är längst ner på sidan. Jag tog filuppladningen ifrån imgur där man kan 
dra in en bild och den laddas upp på deras sida. Jag gillar inte att man ska 
logga in på en sida för att kunna snabbt skicka iväg en bild till någon. Utan 
jag valde att inte ha någon inloggning. Detta gör att Birca är mycket bättre än
både Dropbox och Instagram där man måste logga in. På både instagram och imgur 
har möjligheten till att kommentera en bild. Detta är i min mening överflödigt 
så jag valde att inte implementera den funktionen i 
Bicra.

Innan jag utvecklade Birca hade jag en dröse av krav som jag hade tänkt att 
klämma in och ånga av dessa blev också implementerade, dock inte alla. Ett 
exempel är möjligheten till att dela bara en bild och få en länk till denna bild.
Dock sprang tiden iväg och valde att inte ha den funktionen i denna versionen 
av Birca. Men detta är något de flesta bilddelningsidorna har och är en funktion 
jag saknar och kommer implementera i ett senare läge.

<h2 id="3">Krav nummer 3 - Kvalité</h2>

Jag har inte återanvänt något ifrån tidigare kursmoment utan jag har skrivit 
allt ifrån grunden. Har försökt använda mig utav kodtekniker vi lärt oss i 
tidigare kursmomment, så som att till exemple inte lägga ut något i det globala
scopet. För att öka kvalitén på koden hade jag gärna skrivit Unit tester dock 
springer tiden iväg när man jobbar med nya tekniker så det blev inte av att jag 
skrev några. 

Detta är en tidig release och de kommer helt klart finnas buggar och 
förbättringar som man kan göra av produkten. Men för att hålla koll på vad som 
behövs fixas och buggar använder jag mig utav githubs issue-tracker. Så 
förshoppningsvis hittar folk lite buggar och lägger upp dessa på github så jag 
kan fixa dem senare. 

<h2 id="4">Krav nummer 4 - Express</h2>

När jag började med kursmomentet tänkte jag att jag ville testa på nya tekniker.
Vi har skrivit lite NodeJS på serversidan men jag kände att det var ett område
jag ville utforska mer. Jag hade sen tidigare läst om diverse olika ramverk för
nodejs, det finns så otroligt många olika variantent och finns inget bra ställe
att ta reda på vad som är bra / dåligt... Så jag frågade min gode vän Henrik, 
känd som Olund på dbwebb, om vad de är som gäller. Han har tidigare hållt på med
javascript på serversidan då han gjorde det i PA1416 (individuella projektet). 
Han sa att jag skulle testa Express och att det finns gott om guider på hur 
man använder det. Sagt och gjort, jag testade Express. ExpressJs är MVC-liknande 
ramverk där man i orginal har kontrollers, vyer och modeller. Dock använder bara 
modeller och controller delen då jag vill använda mig utav ajax-request på 
klientsidan. 

Som sagt, på klientsidan kör jag en vanlig statisk html-sida och sen hämtar jag 
jag informationen via ajax-request. För att göra detta möjligt och snyggt och för 
att fortsätta med nya tekniker så skapade jag ett RESTful-api på serversidan.
Jag har just nu support för skapa en ny bild via en POST-request, uppdatera en 
bild via PUT-request samt hämta bilder via en GET-request. Jag blev mycket nöjd 
med denna delen av webb applikationen.

<h2 id="5">Krav nummer 5 - SequelizeJS</h2>

När jag var klar med layouten och fått klientsidans javascript till att fungera 
började jag fundera på vilken 
[ORM](http://en.wikipedia.org/wiki/Object-relational_mapping) 
jag skulle använda. Kollade runt vad som användes i diverse guide. Hittade ingen 
som var anpassad för Mysql utan det är otroligt populärt att köra MongoDB ihop 
med Express. Åter igen fick jag höra med Henrik vad han tyckte var en bra ORM.
Han sa att jag kunde använda mig utav SequelizeJS, vilket jag då också gjorde.

SequelizeJS är en otroligt smidig ORM. Koden blir hur vacker som helst och den är
själv förklarande, vilket jag tycker är bra. Sequelize:s hemsida innerhåller 
guide på hur man sätter upp Express ihop med Sequelize. Väldigt enkel guide som 
visade hur jag skulle göra. 

Till en början hade jag velat köra MariaDB ihop med Birca, vilket hade gått lätt
ihop med sequelize, men sen kom jag på att Birca skulle funka out of the box på
studentservern där inte MariaDB finns tillgänglig. Men om jag hade haft MariaDB
på studentservern hade det enkelt kunnat ändra DB i mina inställningar i 
`config/config.json`. 

Som sagt, otroligt smidig ORM väldigt användbar då man kan använda samma ORM till
fyra olika databaser. Skulle helt klart rekommendera denna ORM för folk som 
skriver webb applikationer i NodeJS.

<h2 id="6">Krav nummer 6 - Drag-n-Drop</h2>

Som mitt sista krav har jag valt att ta Drag och släpp funktionen då jag la
väldigt mycket tid till att optionera denna. 

För att kunna ladda upp bilder i Birca måste man dra in en bild och släppa den 
högst upp i en "dropzone". Detta är något som är gjort möjligt av HTML5 och 
lite javascript. Det tog väldigt lång tid till att få allt att fungera. Det 
största problemet jag hade var att få alla animationer till att köras i rätt 
ordning och få serversidan att fungera perfekt ihop med ajax-requesten som 
jag var tvungen att göra på grund av denna funktion. 

Någon jag skulle eventuellt förbättre i uppladdningsfunktionen är att de skulle
varit en progress-bar som skulle animerats lite snygg när man har släppt sin 
bild. Försökte skapa en sådan, men det var inget jag fick att fungera och som 
såg snygg ut. Men kanske i framtiden...

<h2 id="allmant">Allmänt</h2>

Det här projektet har varit mycket givande och roligt. Jag har fått användning
av kunskaper jag fått från tidigare kurser och även denna kursen. Kurser som 
verkligen har hjälpt mig i detta projektet har varit PHPMVC-kursen. Där man lär 
sig grundtänket i MVC. När man väl har fått en förståelese om detta kan man 
lätt anpassa sig till nya MVC-ramverk. Detta har jag själv märkt i just denna 
kursen och i PA1416 som jag läst på Campus. I den kursen blev jag inkastad i 
Python och var tvungen att använda ett MVC-ramverk i Python, vilket man klarade 
av på grund av att man hade koll på MVC. Det är roligt att se att den kunskapen 
man fick i tidigare kurser hjälper en idag, ett halvår senare. PA1416 är inte 
den ända kursen som gett mig kunskaper som jag använt i detta projeket. DV1462, 
HTMLPHP, där vi fick en kunskap om CSS och HTML5 utan den kunskapen hade jag 
nog inte kunnat göra detta projektet. Visst har fått googla lite när jag haft 
problem med CSS3 animationer, men det är inget man inte klarar reda ut. 


Jag hade stora problem med att komma igång med detta projekt. Det mesta berodde 
på att jag ville göra något som var "unikt", det vill säga något som ingen annan 
student hade gjort tidigare, och dels för att jag ville testa på nya teknologier.
Det slutade med en bilddelnings applikation och jag blev väldigt nöjd med 
resultatet. Jag försökte hålla projektet på en lagom svår nivå då projekt 
specifiktionerna gav mig möjlighet till detta. Har inte räknat tiden på hur mycket
tid jag har lagt på projektet men skulle vilja säga att det är en hel det. Allt tar
längre tid än vad man har tänkt sig. Detta är en något jag jobbar på och försöker 
bli bättre på. Jag tror jag allafall har lagt en 60 timmar på projektet, vilket i 
min mening är mycket för ett sånt här litet projekt. 


<h2 id="om">Om kursen</h2>

Som tidigare nämnt har kursen varit mycket givande och helt klart aktuell. Hade dock
gärna sett mer javascript på serversidan i kursen, vilket jag vet är mycket aktuellt 
och betraktas som coolt i industrin. Men vad jag har förstått det så är de på G och 
ska eventuellt läggas till i kursen. 

När jag började med kursen hatade jag allt och alla som använde jQuery. Detta är något
jag verkligen tar tillbaka nu. JQuery är underbart och borde användas av alla. Det jag 
tycker är bäst med just jQuery är att det, oftast, funkar i alla webbläsare direkt. 
Vilket sparar enormt mycket tid för utvecklaren. 

Kursen får en stark 6a av mig. Hade gära sett mer javascript på serversidan annars kanon
bra kurs. Och gärna mindre spel i kursen. Ogillar verkligen att koda spel. 
