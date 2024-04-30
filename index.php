<!-- 

Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    
    <form action="saluto.php" method="POST">
        <div>
            <label>Paragrafo</label>
            <textarea placeholder="inserisci il testo del paragrafo" name="paragraph" cols="20" rows="5"></textarea>
        </div>

        <div>
            <label>Parola da censurare</label>
            <input name="badword" type="text" />
        </div>

        <div>
            <button type="submit">Invia dati</button>
        </div>
    </form>
</body>
</html>