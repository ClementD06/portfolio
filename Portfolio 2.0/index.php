<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Portfolio - Dupuis Clément</title>
</head>
<body>
            <nav class="navbar">
                <a href class="logo">Portfolio</a>
                <div class="nav_links">
                    <ul>
                        <li><a href="#a_propos">A propos</a></li>
                        <li><a href="#mes_projets">Mes projets</a></li>
                        <li><a href="#contact_me">Contact</a></li>
                        <li><a href="https://clement-dupuis.students-laplateforme.io/CV_Clement_Dupuis/">Mon Cv</a></li>
                    </ul>
                </div>
                <img src="./images/menu-btn.png" alt="" class="menu_hamburger">
            </nav>
    <section id="a_propos" class="section_1">
        <div class="bloc_presentation">
            <div class="presentation">
                <p id="section_name"><strong>QUI SUIS-JE ?</strong></p>
            </div>
            <div class="name_text">
                <div class="txt_presentation">
                    <h1>Clément Dupuis</h1> <br> 
                    J'ai 32 ans et je suis passionné d'informatique. Actuellement en reconversion, je poursuis une formation de 3 ans à l'école LaPlateforme dans le cadre d'un bachelor en développement web.
                    Je me perfectionne actuellement en HTML, CSS, PHP et Javascript, les bases du développement web front-end. J'apprends également a maitriser des frameworks tels que React et Vue.js.                   
                    Je suis un bon communicant et j'aime travailler en équipe. J'ai une capacité d'analyse et de résolution de problèmes qui me permet de trouver des solutions créatives et efficaces.                   
                    Ce portfolio présente mes projets et mes réalisations. N'hésitez pas à explorer mes travaux pour en savoir plus sur mes compétences.                  
                    Sérieux et determiné, je suis à la recherche d'une alternance pour mettre mes compétences en pratique tout en continuant à apprendre. 
                    Merci pour votre visite et j'espère avoir bientôt l'opportunité de travailler ensemble sur des projets passionnants !</p>
                </div> 
            </div>    
        </div>
        <div class="bloc_competences">
            <div class="competences">
                <p id="section_name"><strong>COMPETENCES</strong></p>
            </div>
            <div class="bar_loading">
                <p id="txt_lang">HTML</p>
                <div class="progress-bar"> 
                <div class="progress html-progress" style="width: 85%;"></div>
                <div class="percentage">85%</div>
                </div>

                <p id="txt_lang">CSS</p>
                <div class="progress-bar">
                <div class="progress css-progress" style="width: 75%;"></div>
                <div class="percentage">75%</div>
                </div>

                <p id="txt_lang">SQL</p>
                <div class="progress-bar">
                <div class="progress sql-progress" style="width: 80%;"></div>
                <div class="percentage">80%</div>
                </div>

                <p id="txt_lang">PHP</p>
                <div class="progress-bar">
                <div class="progress php-progress" style="width: 50%;"></div>
                <div class="percentage">50%</div>
                </div>

                <p id="txt_lang">Javascript</p>
                <div class="progress-bar">
                <div class="progress js-progress" style="width: 25%;"></div>
                <div class="percentage">25%</div>
                </div>

                <p id="txt_lang">Python</p>
                <div class="progress-bar">
                <div class="progress python-progress" style="width: 25%;"></div>
                <div class="percentage">25%</div>
                </div>
            </div>
        </div>
    </section>
    <section id="mes_projets" class="section_2">
        <div class="bloc_projets">
            <div class="titre_sec">
                <p id="section_name"><strong>MES PROJETS</strong></p>
            </div>
            <div class="projets">
                <div class="projet_left">
                    <img id="img_projet_l" src="site_tennis.png" alt="" height="100"> <br>
                    <div class="bouton_left">
                        <button id="bouton_projet_l" type="button"><a href="https://clement-dupuis.students-laplateforme.io/index.php">CONSULTER</a></button>
                    </div>
                </div>
                <div class="projet_right">
                    <img id="img_projet_r" src="site_kidja.png" alt="" height=""> <br>
                    <div class="bouton_right">
                        <button id="bouton_projet_r" type="button"><a href="https://clement-dupuis.students-laplateforme.io/site_kidja/">CONSULTER</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact_me" class="section_3">
        <div class="bloc_contact">
            <div class="titre_contact">
                <p id="section_name"><strong>CONTACT</strong></p>
            </div>
            <div class="contact">
                <div class="formulaire">
                        <form id="form" action="envoi_formulaire.php" method="post">
                            <label id="label_form" for="nom">nom</label>
                            <input id="input_form" type="text" id="nom" name="nom" required><br><br>

                            <label id="label_form" for="prenom">prénom</label>
                            <input id="input_form" type="text" id="prenom" name="prenom" required><br><br>

                            <label id="label_form" for="coordonnees">Adresse Mail</label>
                            <input id="input_form" type="text" id="coordonnees" name="coordonnees" required><br><br>

                            <label id="label_form" for="message">Laissez moi un message</label><br>
                            <textarea id="msg_form" name="message" rows="4" cols="50" required></textarea><br><br>

                            <input id="button_form" type="submit" value="Envoyer">
                        </form>
                </div>        
                <div class="coordonees">
                        06 58 83 65 65 <br>
                        14 Avenue Felix Faure <br>
                        06000 Nice</p>
                        <a href="https://www.linkedin.com/in/cl%C3%A9ment-dupuis-0088ab171/">
                            <img src="logo_link.png" height="50" alt="">
                        </a>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="foot">
            <p>© COPYRIGHT 2023 - Tous Droits Réservés - All Rights Reserved</p>
        </div>
    </section>
</body>

    <script>
        // Définir le pourcentage de compétences
    const competencePercentage = 85; // Remplacez par votre propre valeur

    // Mettre à jour la largeur de la barre de progression et le texte du pourcentage
    const progressBar = document.querySelector('.progress');
    const percentageText = document.querySelector('.percentage');

    progressBar.style.width = `${competencePercentage}%`;
    percentageText.textContent = `${competencePercentage}%`;

    </script>
    <script>
        const menuHamburger = document.querySelector(".menu_hamburger")
        const navLinks = document.querySelector(".nav_links")

        menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
        })
    </script>
</html>