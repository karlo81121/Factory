Prilo�enu web aplikaciju sam radio pomocu HTML, CSS i PHP tehnologija. Koristio sam XAMPP
cross platformu za prikaz web aplikacije na lokalnom serveru. Web aplikacija omogucuje dodavanje 
�eljenog jela pritiskom na "Dodaj jelo". Kako bi unijeli jelo potrebno je popuniti obrazac na 
stranici Dodaj jelo. Isto tako, potrebno je pratiti napomenu prilikom uno�enja jela. 
Nakon �to smo unijeli podatke u obrazac, oni se pohranjuju unutar baze podataka kako bi ih mogli 
objaviti na endpoint aplikacije. Za kreiranje baze podataka koristio sam sustav phpmyadmin. 
Kreirao sam ID kao primarni kljuc te ostale atribute koji su bili potrebni, a oni su: 
naziv jela, broj sastojaka jela, svi sastojci jela, tagove, kategoriju koju mo�emo i ne moramo 
odabrati (pogledati napomenu) te opis jela. Na kraju obrasca nalaze se gumbi poni�ti (brisanje 
unesenih podataka u obrascu) i dodaj (upisivanje u bazu podataka). U gornjem dijelu stranice nalazi 
se logo kojim se mo�emo poslu�iti da bi se vratili na pocetnu stranicu. Nakon objave jela, dolazimo 
na pocetnu stranicu gdje su ona objavljena. Ukoliko �elimo ne�to odredeno mo�emo pretra�iti jela po 
tagovima koji su uneseni u bazu podataka. Ukoliko ne unesemo pojam u tra�ilicu dobit cemo povratnu 
informaciju kako je prije tra�enja jela potrebno unjeti tag ili pojam. Takoder, prilikom pretra�ivanja 
jela, mo�emo odabrati koliko jela �elimo prikazati na pocetnoj stranici upisom broja kod "Prikaz po stranici". 
Imena svih varijabli, klasa i ostalog su na engleskom jeziku. Komunikacija s bazom podataka odvojena je u zasebnu datoteku. 
Dodana je SQL dump tablica ili SQL file koji sadr�i SQL naredbe za kreiranje baze podataka kori�tene u ovom zadatku.