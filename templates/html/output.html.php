<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../templates/images/logo.png">
    <title><?=$title ?? 'Bienvenu à Bookshomes';?></title>
    <link rel="stylesheet" type="text/css" href="../../templates/styles/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-top">
            <a href=" " class="logo">Bookshomes</a>
            
        </div>
        <div class="navbar-bottom">
            <form action="" class="input-submit-header">
                <input type="text" class="search-header" >
                <button>Rechercher</button>
            </form>
            <ul>
                <li><a href="/" class="">AudioBook</a></li>
                <li><a href="/news/accueil" class="">News</a></li>
                <li><a href="">Mes lectures</a></li>  
            </ul>
        </div>
        
    </nav>
   
    <main>
        
        <?=$output?>
    </main>
    <footer id="footer">
       
       <div class="footer-top ">
           
               <ul>
                   <li><a href="#" >Accueil</a></li>
                   <li><a href="#">Mes lectures</a></li>
                   <li><a href="#">Contact</a></li>            
               </ul>
          
       </div>

       <div class="footer-bottom">
            Bookshomes 2024
       </div>
     
      
   </footer>
</body>
<script src='../../templates/script/script.js'></script>
<script src='../../templates/script/data_audio.js'></script>
<script src='../../templates/script/data_citation.js'></script>


<script src='../../templates/script/audioGenerator.js'></script>
<script src='../../templates/script/citation.js'></script>

</html>