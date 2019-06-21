##############################
## Security Innovation 		##
## 							##
## Naam :   Vincent Roeland	##
## HZ-Mail: roel0071@hz.nl  ##
##############################

## Onderbouwing Autenticatie  & Autorisatie ## 
Binnen deze Readme.md benadruk is mijn keuze in de gekozen autenticatie & autorisatie. Ik maak gebruik van een automatish geconfigureerd pakket van Laravel zelf, voor authenticatie. Hierdoor moet ik binnen met Laravel folder de volgende code uitvoeren om een log-in systeem te kunnen realiseren. Hierdoor moet een gebruiker zich aanmelden om door te mogen op de applicatie. Binnen deze applicatie heb ik een autorisatie toegepast, waarbij een Admin naar de Admin-Panel kan benaderen. Een normale gebruiker heeft onbevoegde rechten om dit te mogen, en wordt terug ge-redirect naar de homepage. Hierdoor is er binnen het Database een extra 'Role' table aangemaakt. Ik heb gekozen tussen een Managar(Admin rol), en een Employee(gebruiker). 

Automaties bij het aanmaken van een nieuwe gebruiker wordt er een Employee rol toegepast bij voor deze persoon. Alleen een manager of ontwikkelaar heeft de mogelijkheid om dit aan te kunnen passen binnen een database.

