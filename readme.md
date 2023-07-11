# PHP-OOP-3

Progettare un Sistema di Comunicazione, simulando il comportamento di tale sistema:

```
Classe Genitore : CommunicationSystem

Sotto-Classi : Email, Sms, PushNotifications
```

Considerare che:

* Tutte le comunicazioni hanno alcune proprietà in comune come mittente, titolo, messaggio e destinatari;

* Le email possono avere degli allegati;

* Le email possono avere la notifica di consegna;

* Le email può essere inoltrate o stampate;

* Gli sms possono avere la notifica di lettura;

* Gli sms possono accettare una risposta da parte del destinatario;

* Le notifiche push possono avere un'icona;

* Al click sulla notifica push viene azionato un evento;

* Ogni tipologia di comunicazione ha un suono di avviso all'arrivo di una nuova comunicazione;

* Ogni tipologia di comunicazione ha un colore LED per avvisare che c'è una nuova comunicazione;


Il focus di questo esercizio è la progettazione e l'implementazione di classi utilizzando il paradigma della programmazione orientata agli oggetti. 

L'obiettivo è simulare il comportamento di tali sistemi, ma non dovranno inviare comunicazioni reali.

Per esempio, il vostro metodo invia() potrebbe semplicemente stampare un messaggio a schermo per indicare che una comunicazione è stata "inviata". 

Ogni tipo di comunicazione stamperà una stringa personalizzata in base al proprio tipo (es.: "email inviata", "sms inviato", "notifica inviata"), quindi occorrerà ridefinire il metodo in ogni classe derivata.