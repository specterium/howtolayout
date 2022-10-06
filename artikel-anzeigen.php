<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dies ist 1 layout für 1 weebshobp</title>
    <link rel="stylesheet" href="node_modules/untoasted/css/minified/toasted.min.css">
    <link rel="stylesheet" href="style/CSS/global.min.css">
    <link rel="stylesheet" href="style/CSS/nav-bar.min.css">
    <link rel="stylesheet" href="style/CSS/artikel-anzeigen.min.css">
    <link rel="stylesheet" href="style/CSS/home.min.css">
    <script src="JS/jquery-3.6.1.min.js"></script>
    <script src="JS/jquery.waypoints.min.js"></script>
    <script src="JS/anime.min.js"></script>
    <script src="JS/nav-bar.js"></script>
    <script src="JS/home.js"></script>
    <script src="JS/artikel-anzeigen.js"></script>
    <script src="node_modules/untoasted/js/minified/toasted.min.js"></script>
    <script src="JS/cart.js"></script>
</head>
<body>
<div id="mobile-nav">
    <div id="mobile-links">
        <p id="mobile-close">X</p>

        <ul>
            <li id="mobile-logo-li"><img src="images/logo.png" alt="Logo"/></li>
            <!-- Don't add links here, the links are automatically generated from the desktop navigation using js -->
        </ul>
    </div>
</div>

<div id="mobile-data">
    <div id="mobile-data-links">
        <p id="mobile-data-close">X</p>
        <!-- Don't add links here, the links are automatically generated from the desktop navigation using js -->
    </div>
</div>

<nav>
    <div id="header-banner">
        <div>
            <div>
                <span id="mobile-data-toggle">Rechtliches & Kontakt</span>
                <a href="datenschutz.html" style="cursor:pointer;">Datenschutzerklärung</a>
                <a href="impressum.html">Impressum</a>
                <a href="#kontakt">Kontakt</a>
            </div>

            <!--div id="icons">
                <a href="" target="_blank">
                    <svg class="icon" id="facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                        <defs>
                            <style>
                                .facebook-f {
                                    fill: #fff;
                                }

                                .facebook-circle {
                                    fill: #343434;
                                }
                            </style>
                        </defs>
                        <path class="facebook-circle"
                              d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78v-357.78h-130v-148h130v-112.8c0-128.32,76.44-199.2,193.39-199.2,56.02,0,114.61,10,114.61,10v126h-64.56c-63.6,0-83.44,39.47-83.44,79.96v96.04h142l-22.7,148h-119.3v357.78c244.77-38.41,432-250.22,432-505.78Z"/>
                        <path class="facebook-f"
                              d="M711.3,660l22.7-148h-142v-96.04c0-40.49,19.84-79.96,83.44-79.96h64.56v-126s-58.59-10-114.61-10c-116.95,0-193.39,70.88-193.39,199.2v112.8h-130v148h130v357.78c26.07,4.09,52.78,6.22,80,6.22s53.93-2.13,80-6.22v-357.78h119.3Z"/>
                    </svg>
                </a>
                <a href="" target="_blank">
                    <svg class="icon" id="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 406.66 332.12">
                        <defs>
                            <style>
                                .b {
                                    fill: #343434;
                                }
                            </style>
                        </defs>
                        <path class="b"
                              d="M0,294.66c45.88,4.18,86.43-6.85,123.41-34.68-23.61-1.18-42.92-9.78-58.66-25.98-8.81-9.07-15.26-19.63-19.36-32.25,12.43,1.71,24.38,1.75,36.93-1.56-43.29-10.42-67.06-47.86-66.18-82.97,11.57,5.61,23.39,9.63,36.75,9.83C12.04,97.29,8.99,47.56,28.02,15.58c45.27,53.34,102.56,82.79,172.72,87.48-2.65-14.7-2.4-28.72,1.45-42.73C213.21,20.35,255.36-6.13,296.27,1.23c17.39,3.13,32.45,10.57,44.99,22.99,1.86,1.84,3.43,2.09,5.95,1.52,16.03-3.62,31.25-9.27,45.61-17.25,.98-.55,1.87-1.53,3.63-1.05-6.46,18.9-18.18,33.45-35.77,44.71,16.55-1.55,31.25-6.43,45.98-11.49-5.27,8.93-11.83,16.55-18.88,23.76-5.86,6-12.15,11.54-18.97,16.45-1.75,1.26-2.51,2.61-2.45,4.95,1.48,52.25-13.03,99.93-41.82,143.29-25.67,38.67-59.92,67.25-102.86,85.13-23.1,9.62-47.25,15.02-72.17,17.03-29.98,2.43-59.48-.29-88.38-8.69-21.36-6.21-41.47-15.25-61.13-27.91Z"/>
                    </svg>
                </a>
            </div-->
        </div>
    </div>

    <div id="links">
        <ul>
            <li><a href="#">Link #1</a></li>
            <li><a href="#">Link #2</a></li>
            <li id="logo-li"><a href="#header"><img src="images/logo.png" alt="Logo"/></a></li>
            <li><a href="#">Link #3</a></li>
            <li><a href="#">Link #4</a></li>
            <li id="hamburger">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="#343434"
                          d="M3,8H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,8Zm18,8H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-5H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/>
                </svg>
            </li>
        </ul>
    </div>
</nav>
<main>

    <section>
        <div class="artikel-head">
            <div class="artikel-mainimage">
                <img src="https://loremflickr.com/640/360">
            </div>
            <div class="artikel-maintext">
                <div class="article-heading">
                    <h1 class="artikel-name">geile artikel überschrift</h1>
                    <p>420,69</p>
                </div>
                <p class="artikel-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem earum
                    maxime molestias necessitatibus nostrum, porro ratione recusandae tempora voluptas!</p>
                <div class="article-actions">
                    <a class="button" onclick="article_add(1)">Haben Will!</a>
                </div>
                <a class="button-tertiary">Andere Optionen</a>
            </div>
        </div>

    </section>
    <section id="duwollenkaufen">
        <h2>Du wollen Kaufen??</h2>
        <div class="kauf-optionen">
            <div class="kauf-option">
                <span class="material-symbols-outlined">store</span>
                <h3>Einmaliger Kauf</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam necessitatibus quos.</p>
                <a class="button icon-text"><span class="material-symbols-outlined">shopping_cart</span>Klick mich hart du Sau!</a>
            </div>
            <div class="kauf-option">
                <span class="material-symbols-outlined">currency_exchange</span>
                <h3>Regelmäßiger Kauf</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt dicta eaque et fugiat, illum natus numquam perspiciatis porro ratione recusandae sequi similique voluptatibus!</p>
                <a class="button icon-text"><span class="material-symbols-outlined">shopping_cart</span>Klick mich hart du Sau!</a>
            </div>
            <div class="kauf-option">
                <span class="material-symbols-outlined">payments</span>
                <h3>Ratenkauf</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id in inventore libero nemo omnis possimus quae quibusdam quos voluptates. Asperiores facilis necessitatibus tenetur. Ea ex iure maxime sed? Animi doloremque dolores doloribus in, iusto magnam omnis quisquam! Blanditiis cumque dolorem ea ipsa, necessitatibus odio pariatur possimus quaerat quia!</P>
                <a class="button icon-text"><span class="material-symbols-outlined">shopping_cart</span>Klick mich hart du Sau!</a>
            </div>
        </div>
    </section>
    <section>
        <h2>Ähnliche Artikel</h2>
        <div class="simmilar-articles">
            <div class="grid-item">
                <div class="grid-info">
                    <p>Lorem ipsum.</p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda corporis deserunt esse quas vero.</span>
                </div>
                <img src="https://loremflickr.com/640/360">
            </div>
            <div class="grid-item">
                <div class="grid-info">
                    <p>Lorem ipsum.</p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda corporis deserunt esse quas vero.</span>
                </div>
                <img src="https://loremflickr.com/640/360">
            </div>
            <div class="grid-item">
                <div class="grid-info">
                    <p>Lorem ipsum.</p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda corporis deserunt esse quas vero.</span>
                </div>
                <img src="https://loremflickr.com/640/360">
            </div>
        </div>
    </section>
    <section>
        <h2>Bewertungen</h2>
        <div class="bewertung-container">
            <div class="gesamtbewertung">
                <div class="heading">
                    <span class="icon">star</span>
                    <p class="sterne"></p>
                </div>
                <p class="info">Diese Bewertung basiert auf den Ergebnissen von <b> 4 Bewertungen.</b> Bitte beachte, dass positive Bewertungen nicht die Funktionalität eines Produktes garantieren.</p>
            </div>

            <div class="bewertungen">
                <div class="bewertung">
                    <img src="https://fakeimg.pl/200/" alt="profilbild">
                    <h3>kreativer name</h3>
                    <p class="sterne"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ipsum nobis odit.</p>
                </div>
                <div class="bewertung">
                    <img src="https://fakeimg.pl/200/" alt="profilbild">
                    <h3>unkreativer name</h3>
                    <p class="sterne"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="bewertung">
                    <img src="https://fakeimg.pl/200/" alt="profilbild">
                    <h3>namiges unkreativ</h3>
                    <p class="sterne"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis id ipsam maxime porro quam, repellat.</p>
                </div>
            </div>
        </div>
    </section>

</main>

</body>
</html>