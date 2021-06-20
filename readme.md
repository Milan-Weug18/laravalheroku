##############################
## Security Innovation 		##
## 							##
## Naam :   Milan Weug  	##
## HZ-Mail: weug0007@hz.nl  ##
##############################

## Onderbouwing Autenticatie  & Autorisatie ## 
Binnen deze Readme.md benadruk ik mijn keuze op welke manier ik autenticatie & autorisatie gebruik binnen mijn project. Ik maak gebruik van een automatish geconfigureerd pakket van Laravel zelf, voor authenticatie. Hierdoor moet ik binnen met Laravel folder de volgende code uitvoeren om een log-in systeem te kunnen realiseren. Hierdoor moet een gebruiker zich aanmelden om door te mogen op de applicatie. De assignments pagina is bevoegd voor iedereen die een user aanmaakt.  

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

## 3. Registreer met een willekeurig useraccount, probeer vervolgens weer de Assignments pagina te benaderen. Je zult zien dat dit nu mogelijk is.

(Extra)
## 4. Tijdens het inloggen krijg je de mogelijkheid om een de checkbox 'remember me' aan te vinken. Dit betekent dat je ingelogd zult blijven, ook wanneer je de pagina een keer afsluit.




