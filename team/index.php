<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Dev Is It?</title>
    <?php include("../includes/_head.php"); ?>
</head>

<body>
    <?php /* Start Header */ ?>
    <?php include("../includes/_header.php"); ?>
    <!-- Start Main Content -->
    <main>

        <h1>Notre équipe de Rédacteurs</h1>
        <section class="redacteur">
            <div >
                <figure alt="rédacteur, Kévin"></figure>
                <h2>Kévin</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>  
            <div >
                <figure alt="rédacteur, Océane"></figure>
                <h2>Océane</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>  
            <div >
                <figure alt="rédacteur, Kelly">
                    <img src="./images-team/kelly.jpg" alt="rédacteur, Kelly">
                </figure>
                <h2>Kelly</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>  
            <div >
                <figure alt="rédacteur, Julien"></figure>
                <h2>Julien</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>      
        </section>

        <section class='contact-team'>
                <div class="div-h2-paragraphe">
                    <h2>Contactez-nous</h2>
                    <p>Pour contacter notre équipe et nous partager vos artcles préferés c'est par ici.</p>
                </div>

                <div class="div-form">
                    <form id="form-contact" name="form-contact">
                        <input type="email" class="form-email" name="email" placeholder="Votre adresse email">
                        <button>Soumettre</button>
                    </form>
                </div>
        </section>

    </main>
    <!-- Start Footer -->
    <?php include("../includes/_footer.php"); ?>
</body>
</html>