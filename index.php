<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php
    require_once __DIR__ . '/../php-strong-password-generator/utilities/function.php';
    ?>
    <header class="text-center">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
    </header>
    <main>
        <section class="container d-flex flex-column p-4">
            <div class="d-flex">
            <p>Lunghezza password:</p>
            <form action="./index.php" method="GET">
                <label for="passwordLenght"></label>
                <input type="text" name="passwordLenght" id="passwordLenght">
                <div class="mt-3 mb-3 ms-1">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
            </div>
            <p> Your password is: <?php
                                    if (isset($_GET['passwordLenght'])) {
                                        $lenght = $_GET['passwordLenght'];
                                        $newPassword = generateRandomPassword($lenght);
                                        echo $newPassword;
                                    };
                                    ?> 
            </p>

        </section>
    </main>
</body>

</html>