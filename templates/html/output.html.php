<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../templates/images/logo.png">
    <title><?=$title ?? 'Bienvenu à Bookshomes';?></title>
    <meta name="description" content="La plateforme qui te permet de retirer le meilleur de la lecture
    des livres" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Mono&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="../../templates/styles/styles.css">
</head>


<body>
    <nav class="navbar">
        <div class="navbar-top">
            <a href="/" class="logo">Bookshomes</a>
            
        </div>
        <div class="navbar-bottom">
            <form action="" class="input-submit-header">
                <input type="text" class="search-header" >
                <button type="submit">Rechercher</button>
            </form>
            <ul>
                <li><a href="/">AudioBook</a></li>
                <li><a href="/news/accueil">News</a></li>
                <li><a href="/audio/personal">Mes lectures</a></li>  
            </ul>
        </div>
        
    </nav>
   
    <main>
        
        <?=$output?>
    </main>

    <footer id="footer" class="footer">
            <p class="footer-copyright">&copy;  Bookshomes <?php echo date('Y')?></p>
   </footer>
</body>
<script src='../../templates/script/script.js'></script>
<script src='../../templates/script/musicPlayer.js'></script>
<script src='../../templates/script/data_audio.js'></script>
<script src='../../templates/script/data_citation.js'></script>


<script src='../../templates/script/audioGenerator.js'></script>
<script src='../../templates/script/citation.js'></script>

</html>