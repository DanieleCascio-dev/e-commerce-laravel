# E-COMMERCE: BACKEND

Per strutturare il lato backend del sito ho deciso di utilizzare Laravel.

1. Ho creato un database utilizzando sqlite
2. Ho creato i modelli e le migration per Product e Order
3. Ho crerato un file products.php nella cartella config per impostare tutti i miei prodotti sotto forma di oggetti
4. Ho creato un seeder per popolare il DB
5. Ho creato i collegamenti tra le tabelle e i modelli, ho creato una tabella ponte (pivot) tra Order e Product, quest'ultima tabella ci servirà per mostrare lo storico degli Orders
6. Ho effetuato le migrazioni e popolato il DB
7. ho creato le API che utilizzeremo per prelevare i Products, prelevare lo storico degli Orders e salvare nuovi Order

    _N.B.! Laravel gestisce già in autonomo possibili attacchi dovuti a SQL injection o XSS._

Per utilizzare il progetto dovremmo inizalmente lanciare i comandi:

1. **npm i**
2. **composer install** o **composer update**

Effetuare i seguenti controlli:

1. controllare che il file .env sia settato per utilizzare sqlite
2. se necessasrio lanciare le migartion con **php artisan migrate** e poi **php artisan db:seed** per lanciare il seeder
3. Infine lanciamo il nostro server con **php artisan serve** (_N.B. L'url del nostro localhost sarà indisbensabile per vedere il sito Frontend!_)

_N.B._ Per vedere un DB fatto con sqlite è necessario un programma come HeidiSQL
