<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReisBureau</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header class="header-account">
        <div>
            Image
        </div>
    </header>
    <main>
        <div class="inloggen-page-container">
            <div class="inloggen-image-container">
                <img class="inloggen-image" src="Images/inloggen.png" alt="Login-image">
            </div>
            <div class="inloggen-information-container">
                <a href="index.php"><i class="fa-solid fa-arrow-left" style="color: #000000;"></i>Terug</a>
                <div class="inloggen-registreren-container">
                    <div class="inloggen-container">
                        <img class="bookly-image-inloggen" src="Images/Bookly.png" alt="Bookly-image">
                        <form class="form-inloggen" account="" method="POST">
                            <div class="email-wachtwoord-input">
                                <input class="inloggen-input" type="text" name="email-login" placeholder="E-Mail..."></input>
                                <input class="inloggen-input" type="text" name="password-login" placeholder="Wachtwoord..."></input>
                            </div>
                            <div class="inloggen-wachtwoord-vergeten">Wachtwoord vergeten?</div>
                            <submit class="inloggen-submit">Log In</submit>
                        </form>
                        <div class="naar-registreren-container">
                            <p>Heb je nog geen account?</p>
                            <div class="naar-registratie">
                                <p>Maak er dan </p> <div class="inloggen-registratie-switch">hier</div> <p> een aan!</p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>