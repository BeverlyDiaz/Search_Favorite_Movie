<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet_Allocine</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--Présentation-->

    <section id="hello">

        <div class="container">


            <header>

                <img src="/pictures/logo.png" alt="" id="logo">

            </header>

            <h1>Recherchez votre film ou votre série préférées</h1>


            <!--Barre de recherche-->

            <form method="get">
                <input type="text" name="q" placeholder="Rechercher un film, une série.." value="">
                <input type="submit" name="" value="Rechercher">
            </form>

        </div>
    </section>


    <?php

    if (isset($_GET['q'])) {

        include('./simple_html_dom.php');

            $titre = $_GET['q'];

            $html = file_get_html('https://www.allocine.fr/rechercher/?q=' . $titre);


        foreach ($html->find('.movies-results .meta, .genre, .content-txt ') as $e)
            echo $e . '<br>';
    }

    ?>


</body>

</html>