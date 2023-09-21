<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Stylesheet.css?v=123" rel="Stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Garage V. Parrot</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="voituresdoccasion.html">Voitures d'occasion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrosserie.html">Carrosserie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mecanique-entretien.html">Mécanique - Entretien</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="map-address">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.343197574478!2d1.4874042!3d48.4499443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c381da9cd95%3A0xb3400adf7a19416e!2s20%20Rue%20Muret%2C%2028000%20Chartres!5e0!3m2!1sfr!2sfr!4v1695323956473!5m2!1sfr!2sfr"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <section class="info-contact">
        <h1 class="title-contact-page">NOUS CONTACTER</h1>
        <p>Nous sommes disponibles par téléphone.</p>
        <p>Mobile : 06 13 25 25 15</p>
        <p>Assistance : 02 38 51 30 51</p>

        <p>Vous pouvez également venir nous rendre visite à l'adresse suivante :</p>
    </section>

    <section class="garage-address">
        <h2 class="name-contact-page">GARAGE V. PARROT</h2>
        <p class="address">
            90 avenue Gambetta<br>
            28300 CHARTRES
        </p>

    </section>

    <p class="text-pagecontact">N'hésitez pas à nous envoyer un message. Nous vous répondrons au plus vite.</p>

    <?php include('formulaire.php'); ?>

    <footer class="footer-page">

        <h3 class="title-contact">Venez nous rendre visite</h3>
        <p class="adresse-garage">
            Garage V. Parrot<br>
            90 avenue Gambetta
            <br>28400 Chartres
        </p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>