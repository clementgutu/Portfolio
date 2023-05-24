<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <title>Portfolio</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- ========================= HEADER =========================-->
    <header class="header" id="header">
        <!-- =============== Nav ===============-->
        <nav class="nav container">
            <a href="#" class="nav_logo">GUTU Clement</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home"> 
                            <i class="fa-sharp fa-solid fa-house"></i> Accueil
                        </a>
                    </li>                    
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="fa-solid fa-laptop nav_icon"></i> Compétence
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#experience" class="nav_link">
                            <i class="fa-solid fa-briefcase nav_icon"></i> Expériences
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#projets" class="nav_link">
                            <i class="fa-regular fa-images nav_icon"></i> Projets
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link" >
                            <i class="fa-solid fa-message nav_icon"></i> Contactez-moi 
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="pages/veille.php" class="nav_link" >
                            <i class="fa-solid fa-message nav_icon"></i> veille technologique
                        </a>
                    </li>
                </ul>
                <i class="fa-solid fa-xmark nav_close" id="nav-close"></i>
            </div>
            <div class="nav_btns">
                <div class="nav_toggle" id="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
        <!-- ========================= MAIN =========================-->
    <main class="main">
            <!-- =============== Home ===============-->
     
        
        <div class="skills2_content">
            <div class="skills2_box">
                <h2>Développement Web</h2>
                <p>J'ai une expérience solide en développement de sites web, avec une expertise particulière en utilisant les technologies Python, CSS et HTML pour créer des sites dynamiques et interactifs.</p>
            </div>
        </div>
            <!-- =============== Compétences ===============-->
        <section class="skills section" id="skills">
            <h2 class="section_title">Compétences</h2>
            <span class="section_subtitle">Langages</span>
            <div class="skills_container">
                <ul class="first">
                    <li><figure><img class="logos" src="./asset/html5.png" alt="logo html"></figure></li>
                    <li><figure><img class="logos" src="./asset/css.png" alt="logo css"></figure></li>
                    <li><figure><img class="logos" src="./asset/javascript.png" alt="logo javascript"></figure></li>
                </ul>
                <ul class="second">
                    <li><figure><img class="logos" src="./asset/java.png" alt="logo java"></figure></li>
                    <li><figure><img class="logos" src="./asset/mysql.png" alt="logo mysql"></figure></li>
                </ul>
            </div>
        </section>
        
            <!-- =============== Diplômes / Expériences ===============-->
        <section class="experience section" id="experience">
            <h2 class="section_title">Expériences</h2>
            <span class="section_subtitle">Diplômes / Expériences Professionnelles</span>
            <div class="experience_container container">
                <div class="experience_tabs">
                    <div class="experience_button button-flex experience_active">
                        <i class="fa-solid fa-graduation-cap experience_icon"> Diplomes</i>
                    </div>
                    <div class="experience_button button-flex">
                        <i class="fa-solid fa-briefcase experience_icon-2"> Experiences</i>
                    </div>
                </div>
                <div class="experience_sections">
                            <!-- ========= Expérience Content 1 =========-->
                    <div class="experience_content experience_active">
                        <!-- Exp 1 -->
                        <div class="experience_data">
                            <div class="work">
                                <h3 class="experience_title">BAC S</h3>
                                <span class="experience_subtitle">Lycée Albert Schweitzer</span>
                                <div class="experience_calendar">
                                    <i class="fa-solid fa-briefcase">2019</i>
                                </div>
                            </div>

                            <div>
                                <span class="experience_rounder rounder_work"></span>
                                <span class="experience_line"></span>
                            </div>
                        </div>

                        <!-- Exp 2 -->
                        <div class="experience_data">
                            <div></div>

                            <div>
                                <span class="experience_rounder rounder_education"></span>
                                <span class="experience_line"></span>
                            </div>

                            <div class="education">
                                <h3 class="experience_title">1ère année Maths & Informatique</h3>
                                <span class="experience_subtitle">Université Paris-Est Marne la Vallée</span>
                                <div class="experience_calendar">
                                    <i class="fa-solid fa-graduation-cap">2019 - 2021</i> 
                                </div>
                            </div> 
                        </div>

                                        <!-- ========= Expérience Content 2 =========-->
                    <div class="experience_content experience_active">
                        <!-- Exp 1 -->
                        <div class="experience_data">
                            <div class="education">
                                <h3 class="experience_title">BTS SIO (Option SLAM)</h3>
                                <span class="experience_subtitle">ITIC Paris</span>
                                <div class="experience_calendar">
                                    <i class="fa-solid fa-graduation-cap">2021 - 2023 </i>
                                </div>
                            </div>

                            <div>
                                <span class="experience_rounder rounder_education"></span>
                                <span class="experience_line"></span>
                            </div>
                        </div>

                        <!-- Exp 2 -->
                        <div class="experience_data">
                            <div></div>

                            <div>
                                <span class="experience_rounder rounder_education"></span>
                                <span class="experience_line"></span>
                            </div>

                            <div  class="education">
                                <h3 class="experience_title">Stage Support Informatique</h3>
                                <span class="experience_subtitle">Paris</span>
                                <div class="experience_calendar">
                                    <i class="fa-solid fa-graduation-cap">2022 (16 mai - 24 juin) </i>
                                </div>
                            </div>    
                        </div>

                    </div>  

                </div>

            </div>

        </section>
            <!-- =============== Projets ===============-->
            <section class="project section" id="projets">
                <h2 class="section_title">Projet_1</h2>
                    <a href="pages/ligues.php" >
                <span class="section_subtitle">Travaux effectués</span>
                <div class="project_container container">
                    <div>
                        <figure>
                            <img class="project_img" src="./asset/project.png" alt="Project_1">
                            <figcaption class="project_name">
                                <a href="https://github.com/lucas93220/personnel/tree/master/Personnel/docs">Création d’une application (JAVA) de gestion du personnel des ligues</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            
            <section class="project section" id="projets">
                <h2 class="section_title">Projet_2</h2>
                    <a href="pages/m2l.php">
                <span class="section_subtitle">Travaux effectués</span>
                <div class="project_container container">
                    <div>
                        <figure>
                            <img class="project_img" src="./asset/project.png" alt="Project_2">
                            <figcaption class="project_name">
                                <a href="https://github.com/clementgutu/ProjetM2L">Projet M2L (HTML/CSS/PHP)</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            
            </section> 
        </section>

            <!-- =============== Contact ===============-->
        <section class="contact section" id="contact">
            <h2 class="section_title">Contactez-moi</h2>
            <span class="section_subtitle"></span>

            <div class="contact_container container grid">
                <div>
                    <div class="contact_info">
                        <i class="fa-solid fa-mobile-screen contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Appelez-moi</h3>
                            <span class="contact_subtitle">06 46 91 20 09</span>
                        </div>
                    </div>

                    <div class="contact_info">
                        <i class="fa-solid fa-envelope contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">clement.gutu@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact_info">
                        <i class="fa-solid fa-location-dot contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Localisation</h3>
                            <span class="contact_subtitle">Paris - Île de France</span>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
    </main>
    <!-- ========================= FOOTER =========================-->
    <footer class="footer" id="contact">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Clément</h1>
                    <span class="footer_subtitle">Développeur Informatique</span>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#experience" class="footer_link">Expérience</a>
                    </li>

                    <li>
                        <a href="#contact" class="footer_link">Contactez-moi</a>
                    </li>
                </ul>
            </div>
            <p class="footer_copy">&#169; Clément GUTU - Portfolio. All RightS Reserved.</p>
        </div>
    </footer>
        <!-- ========================= SCROLL UP =========================-->
</body>
</html>