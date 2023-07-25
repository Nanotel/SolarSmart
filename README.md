# SolarSmart
Proiect de monitorizare inteligenta a casei solare

Puteti vedea proiectul in functiune la https://solarsmart.ro/monitorizare/ dar momentam vreau sa fac putina curatenie prin cod, sa separ variabilele de tip IP sau parole de acces si apoi o sa devina codul disponibil si pe github.

Proiectul are mai multe module la care se conecteaza, pe viitor vor fi sparte in module separate dar momentan datele se fac cu scriptul python din folderul cu acelasi nume.

ATENITE: Scriputl ruleaza cu python2, poate fi trecut la python3 daca se renunta sau se modifica modulul care citeste si comanda prizele TP LINK HS110

Foldere:

/pyhon - scriptul care citeste datele si se conecteaza la invertor, baterii, senzori, prize
/monitorizare - interfata veche care afisa informatia in mod text
/monitorizare2 - interfata noua facuta dupa o intrerfata metro my light
/db - baza de date si un sql pentru a introduce valorile lunare daca le aveti salvate in alta parte
