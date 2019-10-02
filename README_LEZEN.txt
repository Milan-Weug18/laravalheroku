##############################
## Security Innovation 		##
## 							##
## Naam :   Vincent Roeland	##
## HZ-Mail: roel0071@hz.nl  ##
##############################

## Onderbouwing Autenticatie  & Autorisatie ## 
Binnen deze Readme.md benadruk ik mijn keuze op welke manier ik autenticatie & autorisatie gebruik binnen mijn project. Ik maak gebruik van een automatish geconfigureerd pakket van Laravel zelf, voor authenticatie. Hierdoor moet ik binnen met Laravel folder de volgende code uitvoeren om een log-in systeem te kunnen realiseren. Hierdoor moet een gebruiker zich aanmelden om door te mogen op de applicatie. Hierdoor is het mogelijk om anonieme gebruikers gevoelige content te laten in zien. Binnen deze applicatie heb ik een autorisatie toegepast, waarbij een Toets-panel kan benaderen, behalve als de gebruiker geen 'Admin' recht heeft. Een normale gebruiker heeft onbevoegde rechten om dit te mogen, en wordt terug ge-redirect naar de homepage. Hierdoor is er binnen het Database een extra 'Role' table aangemaakt. Ik heb gekozen tussen een Managar(Admin rol), en een Employee(gebruiker). In de role_user table staat de gekoppelde relatie tussen user en role. De Manager heeft recht om de naar de Toets view te routeren, terwijl een normale gebruiker alleen de Assignments table kan openen.  

Automaties bij het aanmaken van een nieuwe gebruiker wordt er een Employee rol toegepast bij voor deze persoon. Alleen een manager of ontwikkelaar heeft de mogelijkheid om dit aan te kunnen passen binnen de database. (role_user)



## Technische Onderbouwing ##


## 1. Door gebruik te maken van autenticatie is het belangrijk de standaard package te installeren wat Laravel zelf heeft ontwikkeld. Deze commando moet in de juiste Laravel directory uitgevoerd worden, als admin in de Terminal. "php artisan make:auth"
Door deze configuratie worden er automatisch tabellen aangemaakt en ingesteld. Ververs vervolgens de pagina, er is een log-in systeem. 

## 2. Vervolgens is het belangrijk 2 extra tabellen aan te maken genaamd, Roles(roles definiert) en Role_user(relatietabel roles & users) via een migration. Koppel deze tabellen met een foreign key.

## 3. Ik heb een nieuwe Middleware klasse aangemaakt die binnen de ToetsController bekijkt of de huidige gebruiker, die ingelogd is, geautoriseerd is om de pagina te mogen benaderen. Vervolgens definier ik binnen de 'kernel.php' deze klasse, zodat ik ze vanuit elke controller/routes deze middleware kan aanroepen. 

## 4. Vervolgens heb ik een middleware group voor de autenticatie binnen mijn web.php(routes) gemaakt. Vanuit hier heb ik de controllers toegevoegd, waarbij er ingelogd moet zijn om de pagina te mogen benaderen Anders wordt de gebruiker naar de login-pagina gestuurd.



#####  Test stappenplan ######

## 1. Run ('php artisan serve') via de terminal.

## 2. Probeer zonder in te loggen naar de Assignments/Toets pagina te benaderen, wat je zal laten moeten inloggen.

## 3. Log in met het useraccount(default) : user@example.com (wachtwoord: 'secret'), probeer vervolgens weer de Toets pagina te benaderen. Je zult zien dat dit niet mogelijk is, terwijl assignments wel te benaderen is!


## 4. Log uit met deze gebruiker en probeer het manageraccount(admin) : manager@example.com (wachtwoord: 'secret').
Je zult zien dat de Toets pagina nu wel te bereiken is. Hierdoor scherm je dus de juiste gebruikers af om deze pagina niet te mogen benaderen.



