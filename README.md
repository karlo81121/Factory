Priloženu web aplikaciju sam radio pomoću HTML, CSS i PHP tehnologija. Koristio sam XAMPP
cross platformu za prikaz web aplikacije na lokalnom serveru. Web aplikacija omogućuje dodavanje 
željenog jela pritiskom na "Dodaj jelo". Kako bi unijeli jelo potrebno je popuniti obrazac na 
stranici Dodaj jelo. Isto tako, potrebno je pratiti napomenu prilikom unošenja jela. 
Nakon što smo unijeli podatke u obrazac, oni se pohranjuju unutar baze podataka kako bi ih mogli 
objaviti na endpoint aplikacije. Za kreiranje baze podataka koristio sam sustav phpmyadmin. 
Kreirao sam ID kao primarni ključ te ostale atribute koji su bili potrebni, a oni su: 
naziv jela, broj sastojaka jela, svi sastojci jela, tagove, kategoriju koju možemo i ne moramo 
odabrati (pogledati napomenu) te opis jela. Na kraju obrasca nalaze se gumbi poništi (brisanje 
unesenih podataka u obrascu) i dodaj (upisivanje u bazu podataka). U gornjem dijelu stranice nalazi 
se logo kojim se možemo poslužiti da bi se vratili na početnu stranicu. Nakon objave jela, dolazimo 
na početnu stranicu gdje su ona objavljena. Ukoliko želimo nešto odredeno možemo pretražiti jela po 
tagovima koji su uneseni u bazu podataka. Ukoliko ne unesemo pojam u tražilicu dobit ćemo povratnu 
informaciju kako je prije traženja jela potrebno unjeti tag ili pojam. Također, prilikom pretraživanja 
jela, možemo odabrati koliko jela želimo prikazati na početnoj stranici upisom broja kod "Prikaz po stranici". 
Imena svih varijabli, klasa i ostalog su na engleskom jeziku. Komunikacija s bazom podataka odvojena je u zasebnu datoteku. 
Dodana je SQL dump tablica ili SQL file koji sadrži SQL naredbe za kreiranje baze podataka korištene u ovom zadatku.
