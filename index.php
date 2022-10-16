<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- pagina register.html -->

        <form action="register.php" method="POST">
            <h2>Registrati</h2>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="inserisci la tua email" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="inserisci il tuo username" required>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="inserisci la tua password" required>

            <input type="submit" value="Invia">
        </form>
    
</body>

</html>