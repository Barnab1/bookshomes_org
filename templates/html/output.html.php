<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'Bienvenu à Bookshomes';?></title>
    <link rel="stylesheet" type="text/css" href="../../templates/styles/styles.css">
</head>
<body>
     <nav>
         <header>
            <h1 class='normal-font-w'>Bookshomes</h1>
         </header>
         <ul>
            
            <li><a href='/'>Accueil</a></li>
            <li><a href='#'>Histoire</a></li>
            
         </ul>   
    </nav>
   
    <main>
        
        <?=$output?>
    </main>
    <footer>
        &copy; Bookshomes <?php echo date('Y')?>
    </footer>
</body>
<script src='../../templates/script/hello.js'></script>
</html>