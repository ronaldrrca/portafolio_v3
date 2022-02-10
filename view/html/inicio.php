<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="desarrollo web, landing pages, paginas web, sitios web, 
                                        aplicaciones web, diseño responsivo, web development, 
                                        web pages, web sites, web apps, responsive design.">
    <meta name="robots" content="index.follow">
    <link rel="shortcut icon" href="#" /><!--Fixing favicon-->
    <title>Ronald Rodríguez Campillo</title>
</head>
<body>
    <header>
            <?php include 'header.php'?>
    </header>
    <main>
            <section id="introducingMyself">
                <figure id="introducingMyself_photo">
                        <img src="../assets/images/Sin título-1.png" alt="">
                </figure>
                <div id="introducingMyself_info">
                    <div id="introducingMyself_info_socialMediaIcons">
                        <img src="../assets/icons/linkedin_icon.svg" alt="icono de linkedin">
                        <img src="../assets/icons/github_icon.svg" alt="icono de github">
                        <img src="../assets/icons/instagram_icon.svg" alt="icono de instagram">
                        <img src="../assets/icons/twitter_icon.svg" alt="icono de twitter">
                        <img src="../assets/icons/facebook_icon.svg" alt="icono de facebook">
                    </div>
                    <p id="introducingMyself_info_name">Ronald Rodríguez Campillo</p>
                    <p class="introducingMyself_info_text">Tecnólogo en Análisis y Desarrollo de Sistemas de Información</p>
                    <p class="introducingMyself_info_text">Desarrollador web</p>
                    <button id="briefcase_button">Mi Portafolio</button>
                </div>
            </section>
            <section id="myProjects">
                <p id="myProjects_title">Proyectos recientes</p>
                <h1>Desarrollo web responsivo, landing pages, páginas, sitios y aplicaciones web</h1>
                <div class="littleRedLine"></div>
                <div id="projects">
                        <div class="project"> 
                            <img src="../assets/icons/project_icon.svg" alt="">
                            <h3>Mi Portafolio</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ea quos necessitatibus expedita tempora eaque libero provident, cupiditate nobis eius esse totam rerum non laborum sapiente quas exercitationem molestias reiciendis.</p></div>
                        <div class="project">
                            <img src="../assets/icons/project_icon.svg" alt="">
                            <h3>Web App piloto "Diagnóstico de innnovación empresarial"</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ea quos necessitatibus expedita tempora eaque libero provident, cupiditate nobis eius esse totam rerum non laborum sapiente quas exercitationem molestias reiciendis.</p></div>
                        <div class="project">
                            <img src="../assets/icons/project_icon.svg" alt="">
                            <h3>Ecoculture - Landing page</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ea quos necessitatibus expedita tempora eaque libero provident, cupiditate nobis eius esse totam rerum non laborum sapiente quas exercitationem molestias reiciendis.</p></div>
                        <div class="project">
                            <img src="../assets/icons/project_icon.svg" alt="">
                            <h3>Título proyecto</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ea quos necessitatibus expedita tempora eaque libero provident, cupiditate nobis eius esse totam rerum non laborum sapiente quas exercitationem molestias reiciendis.</p></div>
                        <div class="project">
                            <img src="../assets/icons/project_icon.svg" alt="">
                            <h3>Título proyecto</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ea quos necessitatibus expedita tempora eaque libero provident, cupiditate nobis eius esse totam rerum non laborum sapiente quas exercitationem molestias reiciendis.</p></div>
                        <div class="project">
                            <img src="../assets/icons/project_icon.svg" alt="">
                            <h3>Título proyecto</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ea quos necessitatibus expedita tempora eaque libero provident, cupiditate nobis eius esse totam rerum non laborum sapiente quas exercitationem molestias reiciendis.</p></div>
                </div>
            </section>
            <section id="aboutMe">
                    <h2>Sobre mi</h2>
                    <p id="aboutMe_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet veniam error reiciendis ea soluta provident molestiae mollitia sit facilis quaerat minima, ex ducimus consectetur iure libero consequuntur, repellat natus enim?</p>
                    <div class="littleRedLine"></div>
                    <div id="aboutMe_content">
                        <figure id="aboutMe_content_photo">
                                <img src="../assets/images/Sin título-1.png" alt="">
                        </figure>
                        <div id="aboutMe_content_info">
                            <h2>Hola</h2>
                            <p id="aboutMe_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem temporibus ut unde reprehenderit officia atque vel commodi id. Nisi quis atque, amet magnam nesciunt earum. Odio sunt laborum maiores beatae!</p>
                            <div id="aboutMe_contactData">
                                <div>
                                    <p class="contactData_redLetter">Nombre:</p>
                                    <p class="contactData_whiteLetter">Ronald Rodríguez Campillo</p>
                                </div>
                                <div>
                                    <p class="contactData_redLetter">Teléfono:</p>
                                    <p class="contactData_whiteLetter">+57 3003581311</p>
                                </div>
                                <div>
                                    <p class="contactData_redLetter">Email:</p>
                                    <p class="contactData_whiteLetter">ronaldrrca@gmail.com</p>
                                </div>
                                <div>
                                    <p class="contactData_redLetter">Linkedin:</p>
                                    <p class="contactData_whiteLetter">jhgugiebwecj</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </main>
    <footer>
            <?php include 'footer.php' ?>
    </footer>
    <script src="../js/header.js"></script>
</body>
</html>