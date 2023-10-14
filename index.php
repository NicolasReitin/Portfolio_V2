<?php
$title = "Portfolio";
include "Includes/header.php";
?>
    <!--------------------------------------Page d'accueil-------------------------------------->
    <section class="home">
        <div class="home_avatar">
            <div class="text_avatar">
                <h7>Salut, je suis</h7>
                <h6>Nicolas <br> REITIN</h6>
                <p id="textdynamic" class="para_home"></p>
                <!-- <p class="para2_home">en cours de formation</p> -->
            </div>
            <div class="image_avatar">
                <img src="images/Avatar_avec_pc.png" alt="avatar">
            </div>
        </div>

    </section>

    <!--------------------------------------Section présentation-------------------------------------->
    <section class="presentation">
        <div class="container" style="max-width: 1000px">
            <p id="Présentation">Hello World! Je m'appelle Nicolas REITIN et je suis développeur Web Junior.</p>
            <p>Avant de me lancer dans le développement, j'ai travaillé en tant que conseiller bancaire et courtier pendant 12 ans. J'ai décidé de me reconvertir dans le développement web et mobile car je suis passionné par ce domaine en constante évolution.</p>
            <p>Je suis actuellement en alternance avec la société <a href="https://xr.plus/fr/" style="color: gold">XR.plus</a> à Caen afin de préparer un Bachelor Concépteur Développeur d'Applications en partenariat avec l'école <a href="https://www.creative-formation.fr/" style="color: gold">Créative</a> et j'ai suivi une formation en développement web et mobile où j'ai acquis des connaissances solides en HTML, CSS, JavaScript, PHP, Laravel et SASS. Ma curiosité naturelle m'incite à apprendre de nouveaux langages et frameworks, et je suis actuellement en train de m'autoformer sur Symfony.</p>
            <p>Mes expériences en tant que conseiller bancaire et courtier m'ont appris à être rigoureux, organisé et à travailler avec précision et efficacité. Ces compétences sont très utiles dans le développement web où la précision et l'organisation sont des éléments clés.</p>
            <p>Je suis convaincu que mes compétences techniques, ma motivation et mes expériences passées feront de moi un atout précieux pour tout projet de développement. Je suis prêt à travailler dur et à contribuer positivement à une équipe de développement.</p>

            <p>Je vous présente ici mon portfolio et les projets sur lesquels j'ai travaillé.</p>

            
            <div class="box_cv">
                <p class="click">Click to zoom</p>
                <!-- Trigger the Modal -->
                <img id="myImg" src="images/CV2023.png" alt="CV" class="mt-5" style="width: 300px">
            </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- The Close Button -->
                <span class="close">&times;</span>
                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">
            </div>


            <form action="">
            <a href="Download/CV2023.pdf" target="_blank"><button type="button" class="btn btn-outline-warning">Télécharger CV</button></a>
            </form>
        </div>
    </section>


    <!--------------------------------------Section Mes Projets-------------------------------------->
    <section class="projects">
        <h2 id="Mes projets">Projects</h2>
        <div class="container_projet">

            <div class="parent">
                <div class="div1"> 
                    <div class="bloc_projet">
                        <!-- <h3>Sophrologie / hypnose (projet en cours)</h3>  -->
                        <a href="https://www.rosemarieallaire.fr" target="_blank"><img src="images/Apercu_rose-marie.png" alt="Bubble_aim" class="images_projet_large"></a>      
                        <div class="hoverImage">
                            <div class="text">Sophrologie / hypnose (projet en cours)</div>
                        </div>
                        <div class="textHoverImage">
                            <p><span>Tech :</span> Wordpress</p>
                        </div>
                        
                    </div>    
                </div>
                <div class="div2"> 
                    <div class="bloc_projet">
                        <!-- <h3>Spotizer</h3> -->
                        <a href="https://projects.nicolas-reitin.fr/Spotizer/public" target="_blank"><img src="images/Aperçu_Spotizer.png" alt="Spotizer" class="images_projet"></a>
                        <div class="hoverImage">
                            <div class="text">Spotizer</div>
                        </div>
                        <div class="textHoverImage">
                            <p><span>Tech :</span> HTML / CSS / SASS / Laravel / Javascript / MySQL</p>
                        </div>
                    </div>            
                </div>
                <div class="div3"> 
                    <div class="bloc_projet">
                        <!-- <h3>Site Budget</h3> -->
                        <a href="https://projects.nicolas-reitin.fr/Appli_budget/index.html" target="_blank"><img src="images/Apercu_appli_budget.png" alt="Appli budget" class="images_projet"></a>      
                        <div class="hoverImage">
                            <div class="text">Site Budget</div>
                        </div>
                        <div class="textHoverImage">
                            <p><span>Tech :</span> HTML / CSS / Javascript</p>
                        </div>
                    </div>            
                </div>
                <div class="div4"> 
                    <div class="bloc_projet">
                        <!-- <h3>NR formation</h3> -->
                        <a href="https://projects.nicolas-reitin.fr/E_formation/index.php" target="_blank"><img src="images/Apercu_E_formation.png" alt="e-learning" class="images_projet" ></a>
                        <div class="hoverImage">
                            <div class="text">NR formation</div>
                        </div>
                        <div class="textHoverImage">
                            <p><span>Tech :</span> HTML / CSS / PhP / MySQL</p>
                        </div>
                    </div>            
                </div>
                <div class="div5"> 
                    <div class="bloc_projet">
                        <!-- <h3>Local Market</h3> -->
                        <a href="https://projects.nicolas-reitin.fr/localMarket/index.php" target="_blank"><img src="images/Apercu_LocalMarket2.png" alt="Site Local Market" class="images_projet_large" ></a>
                        <div class="hoverImage">
                            <div class="text">Local Market</div>
                        </div> 
                        <div class="textHoverImage">
                            <p><span>Tech :</span> HTML / CSS / PhP / MySQL</p>
                        </div>
                    </div>
                </div>
                <div class="div6"> 
                    <div class="bloc_projet">
                        <!-- <h3>Weather Live</h3> -->
                        <a href="https://projects.nicolas-reitin.fr/meteo/index.html" target="_blank"><img src="images/Apercu_appli_meteo.png" alt="pokéball" class="images_projet"></a>    
                        <div class="hoverImage">
                            <div class="text">Weather Live</div>
                        </div>
                        <div class="textHoverImage">
                            <p><span>Tech :</span> HTML / CSS / Javascript / API</p>
                        </div>
                        
                    </div>
                </div>
                <div class="div7"> 
                    <div class="bloc_projet">
                        <!-- <h3>Hôtel unique</h3> -->
                        <a href="https://projects.nicolas-reitin.fr/Hotel_unique/index.html" target="_blank"><img src="images/Apercu_hotel_unique.png" alt="hotel_unique" class="images_projet"></a>      
                        <div class="hoverImage">
                            <div class="text">Hôtel unique</div>
                        </div>
                        <div class="textHoverImage">
                            <p><span>Tech :</span> HTML / CSS</p>
                        </div>
                    </div>             
                </div>
            </div> 
                          
        </div>
    </section>

    <!--------------------------------------Section Mes compétences-------------------------------------->
    <section class="skills">
        <div class="font-skill">
            <h2 id="Mes compétences">My skills</h2>
            <div class="bothSide">
                <div class="leftSide">
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><ion-icon name="logo-html5" style="color: #e44d26;"></ion-icon></span><div id="scroll1" class="bar " data-skill="HTML"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-php.png" alt="logo php" style="width: 80px;"></span><div id="scroll4" class="bar php " data-skill="PHP"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-laravel.jpg" alt="logo laravel" style="width: 80px;"></span><div id="scroll4_5" class="bar laravel " data-skill="Laravel"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><ion-icon name="logo-wordpress" style="color: #21759a;"></ion-icon></span><div id="scroll9" class="bar wordpress " data-skill="Wordpress"></div>
                    </div>                    
                </div>
                <div class="midSide">
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><ion-icon name="logo-css3" style="color: #006bc0;"></ion-icon></span><div id="scroll2" class="bar css " data-skill="CSS"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-sass.png" alt="lmgo sass" style="width: 80px;"></span><div id="scroll6" class="bar sass " data-skill="SASS"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-git.png" alt="logo git" style="width: 80px;"></span><div id="scroll7" class="bar git " data-skill="Git"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-vscode.png" alt="logo vscode" style="width: 80px;"></span><div id="scroll7" class="bar git " data-skill="Git"></div>
                    </div>
                    
                </div>
                <div class="rightSide">
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><ion-icon name="logo-javascript" style="color: #f7e018;"></ion-icon></span><div id="scroll3" class="bar javascript " data-skill="Javascript"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/mysql.svg" alt="logo mysql" style="width: 80px;"></span><div id="scroll5" class="bar SQL " data-skill="MySql"></div>
                    </div>                    
                    
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-bootstrap.png" alt="logo bootstrap" style="width: 80px;"></span><div id="scroll8" class="bar bootstrap " data-skill="Bootstrap"></div>
                    </div>
                    <div class="icon_skill">
                        <span class="margin_icon_skill"><img src="icones/logo-symfony.png" alt="logo symfony" style="width: 80px;"></span><div id="scroll10" class="bar Symfony " data-skill="Symfony"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <!--------------------------------------Formulaire de Contact-------------------------------------->
    <section class="contact">
        <div class="container">
            <h2 id="Contact">Contact</h2>
            <div class="map_formu">
                <p>
                    <ion-icon class="tel" name="call-outline"></ion-icon> <a href="tel:+33695398460">06.02.08.34.43</a>
                    <br>
                    <br>
                    <ion-icon class="mail" name="mail-outline"></ion-icon><a href="mailto: contact@nicolas.reitin.fr">  contact@nicolas.reitin.fr</a> 
                </p>
                <!-- <div class="formu">
                    <p>
                        <a href="mailto: contact@nicolas.reitin.fr"><input type="email" class="btn btn-outline-warning" value="Contact par mail"></a>
                    </p> -->
                    <!-- <form action="" method="post">
                    <div class="form-group">
                        <label for="nom">Entrez votre nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom">
                    </div>
                    <div class="form-group mt-2">
                        <label for="objet">Entrez l'objet de votre message</label>
                        <input type="message" class="form-control" id="nom" placeholder="Objet" name="objet">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Entrez votre mail</label>
                        <input type="text" class="form-control" id="email" placeholder="Mail" name="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="bio">Message</label>
                        <textarea class="form-control" name="messages" id="bio" rows="2" placeholder="Tapez votre message ici"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-outline-warning " id="nom" value="Envoyer mon message" name="envoyer">
                    </div>
                    </form> -->
                </div>
            </div>
        </div>
    </section>
    
    
     <!--------------------------------------Footer-------------------------------------->
<?php
include "Includes/footer.php"
?>
