# Laravel Comics

### Descrizione

Questo progetto Laravel è stato creato con l'obiettivo di implementare un layout ben strutturato per un sito web di fumetti.

### Layout del Sito

Il focus principale di questo progetto è sul layout del sito. La struttura comune di tutte le pagine è gestita da un file di layout centrale che include le sezioni comuni come head e body.

Header e footer invece sono condivisi per garantire una coerenza visiva su tutte le pagine.

### Pagine

Sono state create più pagine che condividono lo stesso layout:

-   Home: Questa rotta comprende le sezioni condivise (header, footer) e nella sezione main una breve descrizione della DC Comics.

-   Comics: È stata implementata questa rotta per visualizzare la lista di tutti i fumetti. I dati sono recuperati da un file situato nella cartella config. Anche questa rotta comprende le sezioni condivise (header, footer)

### Navigazione tra le Pagine

La navigazione all'interno del sito è gestita nell'header. L'utente può spostarsi tra le diverse sezioni del sito seguendo questi passaggi:

-   Lista di Fumetti: Nel menu di navigazione dell'header, è presente un link denominato "Comics". Cliccando su questo link, l'utente verrà reindirizzato alla pagina che mostra la lista di tutti i fumetti.

-   Torna alla Home: Cliccando sul logo del sito situato nell'angolo in alto a sinistra, l'utente tornerà alla pagina principale del sito.
