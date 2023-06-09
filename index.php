<?php 
    session_start();
?>
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
    <?php
        $dsn = 'mysql:dbname=webapp2;host=127.0.0.1';
        $user = 'root';
        $password = '';

        try {
            $connectie = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo "Verbinding werkt niet" . $e;
        }
        $date = date('Y-m-d');
        $date_plus_one_day = date('Y-m-d', strtotime("+1 day"));
    ?>
</head>
<body>
    <header class="header-main">
        <img class="bookly-image" src="Images/Bookly.png" alt="Bookly-image">
        <?php 
            if(isset($_SESSION['user_firstname'])){
                echo '<a href="account.php">' . $_SESSION['user_firstname'] . '</a>';
            } else echo '<a href="Inloggen.php">Inloggen</a>';
        ?>
    </header>
    <main class="main-index">
        <img class="index-image" src="Images/index3.png" alt="Twee stoelen op het strand">
        <form class="reis-search-container" action="homepage-reiszoeken.php" method="GET">
            <div class="reis-search-container2">
                <input class="reis-search" name="search_location" type="search" placeholder="Locatie..." ></input>
                <input class="reis-search" name="search_date_start" type="date" min="<?php echo $date;?>" placeholder="Aankomst"></input>
                <input class="reis-search" name="search_date_end" type="date" min="<?php echo $date;?>" placeholder="Vertrek"></input>
            </div>
            <div class="submit-zoeken-reis">
                <input class="zoeken-button" type="submit" name="Zoeken" value="Zoeken">
                </input>
            </div>
        </form>
        <div id="reis-category">
        <div class="reis-category-container">
            <div class="category-container">
                <img class="reis-category-image" src="Images/imageedit_2_2504844504.png" alt="Zomer Reizen">
                <div class="vacation-category vacation-category-text-decoration">Zomervakantie</div>
                <div class="vacation-category1 vacation-category-text-decoration">ontsnap naar de zon</div>
                <a href="homepage-reiszoeken.php" class="vacation-category2 vacation-category-text-decoration ontdek-button">Ontdek</a>
            </div>
            <div class="category-container">
                <img class="reis-category-image" src="Images/imageedit_5_4238939840.png" alt="Zomer Reizen">
                <div class="vacation-category vacation-category-text-decoration">Wintervakantie</div>
                <div class="vacation-category1 vacation-category-text-decoration">Voor een winter bestemming</div>
                <a href="homepage-reiszoeken.php" class="vacation-category2 vacation-category-text-decoration ontdek-button">Ontdek</a>
            </div>
            <div class="category-container">
                <img class="reis-category-image" src="Images/imageedit_8_2439431152.jpg" alt="Zomer Reizen">
                <div class="vacation-category vacation-category-text-decoration">Populaire Bestemmingen</div>
                <div class="vacation-category1 vacation-category-text-decoration">Even er tussen uit</div>
                <a href="homepage-reiszoeken.php" class="vacation-category2 vacation-category-text-decoration ontdek-button">Ontdek</a>
            </div>
        </div>
        </div>   
    </main>
    <?php 
        include_once("footer.php");
    ?>
</body>     
</html>