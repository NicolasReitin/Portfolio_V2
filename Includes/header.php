<!doctype html>
<html lang="fr">
    <head>
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5D2YRX7Y1S"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5D2YRX7Y1S');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <title>Nicolas REITIN - <?= $title ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/logo_blanc.png" type="image/x-icon">
    </head>
    <body>
        <!--------------------------------------Header-------------------------------------->
        <header>
            <!-- ------------------------------------LOGO------------------------------------ -->
            <div class="logo" id="Home">
                    <a href="#"><img src="images/logo_blanc.png" alt="logo Nico" class="logo"></a>
            </div>
            <div class="backgroundnav"></div>
            <nav>                
                <!-- ------------------------------------MENU------------------------------------ -->
                <label for="toggle">☰</label>
                <input type="checkbox" id="toggle">
                <div class="main_menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#Présentation">About</a></li>
                        <li><a href="#Mes projets">Projects</a></li>
                        <li><a href="#Mes compétences">Skills</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

