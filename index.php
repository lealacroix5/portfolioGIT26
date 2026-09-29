<?php

$pageTitle = "Accueil";

include "includes/header.php";
include "includes/navbar.php";

?>

<main>

    <section class="hero">

        <div class="hero-content">

            <p class="hero-tag">
                BTS SIO • Option SLAM
            </p>

            <h1>
                Bonjour, je suis
                <span>Léa Lacroix</span>
            </h1>

            <h2>
                Étudiante en développement informatique
            </h2>

            <p class="hero-description">
                Actuellement étudiante en deuxième année de BTS
                Services Informatiques aux Organisations, option
                Solutions Logicielles et Applications Métiers,
                je me forme au développement d'applications,
                de sites web et à la gestion de bases de données.
            </p>

            <div class="hero-buttons">

                <a href="projets.php" class="btn btn-primary">
                    Découvrir mes projets
                </a>

                <a href="documents.php" class="btn btn-secondary">
                    Voir mon CV
                </a>

            </div>

        </div>

        <div class="hero-card">

            <p>Étudiante</p>

            <h3>BTS SIO</h3>

            <span>SLAM</span>

            <p>
                Solutions Logicielles<br>
                et Applications Métiers
            </p>

        </div>

    </section>


    <section class="introduction">

        <div class="section-title">

            <p>À propos</p>

            <h2>Mon profil</h2>

        </div>

        <div class="intro-grid">

            <article class="intro-card">

                <h3>Développement</h3>

                <p>
                    Je développe des applications et des sites web
                    en utilisant différentes technologies telles que
                    HTML, CSS, PHP, JavaScript, SQL, Python et C#.
                </p>

            </article>


            <article class="intro-card">

                <h3>Formation</h3>

                <p>
                    Je suis actuellement en deuxième année de BTS SIO
                    option SLAM au Campus Saint-Aspais à Melun.
                </p>

            </article>


            <article class="intro-card">

                <h3>Expérience</h3>

                <p>
                    Mon premier stage en développement web chez
                    GenContact m'a permis de travailler sur plusieurs
                    projets professionnels et sur des bases de données.
                </p>

            </article>

        </div>

    </section>


    <section class="discover">

        <div>

            <p class="section-small-title">
                Mon portfolio
            </p>

            <h2>
                Découvrez mon parcours et mes réalisations
            </h2>

            <p>
                Ce portfolio regroupe les compétences acquises durant
                mon BTS SIO, mes projets informatiques, mon expérience
                professionnelle ainsi que ma veille technologique.
            </p>

        </div>

        <a href="parcours.php" class="btn btn-primary">
            Mon parcours
        </a>

    </section>

</main>

<?php include "includes/footer.php"; ?>