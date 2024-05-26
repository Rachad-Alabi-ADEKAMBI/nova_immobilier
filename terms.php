<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nova immobilier - Connexion</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <?php include 'parts/meta.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'parts/spinner.php'; ?>

        <?php include 'parts/header.php'; ?>

        <div id="app">
        <div class="row g-0 gx-5 align-items-end">
                    <div class="col-sm-12 col-md-6 mt-4 mx-auto" v-if='showNew'>
                    Bienvenue sur Nova Immobilier. En utilisant notre site web, vous acceptez de respecter et d'être lié par les conditions d'utilisation suivantes. Veuillez les lire attentivement.
 <br>
 
 <h2>
 1. Acceptation des Conditions

 </h2> <br>
En accédant ou en utilisant le site Nova Immobilier, vous acceptez ces Conditions d'Utilisation et toutes les politiques ou directives incorporées par référence. Si vous n'acceptez pas toutes ces conditions, veuillez ne pas utiliser notre site.

<br>

<h2>2. Utilisation du Site</h2> <br>

    Eligibilité: Vous devez avoir au moins 18 ans pour utiliser notre site.
    Exactitude des Informations: Vous vous engagez à fournir des informations exactes, actuelles et complètes lors de votre inscription et utilisation du site.
    Utilisation Autorisée: Vous acceptez d'utiliser notre site uniquement à des fins légales et conformément à toutes les lois applicables.

3. Comptes Utilisateurs

    Inscription: Pour accéder à certaines fonctionnalités, vous devez créer un compte. Vous êtes responsable de la confidentialité de votre compte et de votre mot de passe.
    Responsabilité: Vous êtes responsable de toutes les activités qui se déroulent sous votre compte. Vous acceptez de nous notifier immédiatement toute utilisation non autorisée de votre compte.

4. Contenu du Site

    Propriété Intellectuelle: Tous les contenus du site, y compris les textes, graphiques, logos, images et logiciels, sont la propriété de Nova Immobilier ou de ses fournisseurs de contenu et sont protégés par les lois sur la propriété intellectuelle.
    Utilisation Limitée: Vous pouvez accéder au contenu du site pour un usage personnel et non commercial. Toute autre utilisation, y compris la reproduction, la distribution, la modification ou l'affichage du contenu, est strictement interdite sans notre autorisation écrite préalable.

5. Annonces et Propriétés

    Informations des Annonces: Les annonces de propriétés sont fournies par des tiers et nous ne garantissons pas l'exactitude ou la complétude des informations fournies.
    Responsabilité: Nova Immobilier décline toute responsabilité concernant les transactions ou interactions entre les utilisateurs et les annonceurs de propriétés.

6. Limitation de Responsabilité

    Aucun Garantie: Le site est fourni "tel quel" et "tel que disponible". Nous ne garantissons pas que le site sera ininterrompu, sécurisé ou sans erreur.
    Exonération de Responsabilité: En aucun cas, Nova Immobilier ne pourra être tenu responsable des dommages indirects, accessoires, spéciaux ou consécutifs découlant de l'utilisation ou de l'impossibilité d'utiliser le site.

7. Modifications des Conditions

Nous nous réservons le droit de modifier ces conditions à tout moment. Toute modification sera effective dès la publication sur le site. Votre utilisation continue du site après la publication des modifications constitue votre acceptation des conditions modifiées.
8. Résiliation

Nous pouvons suspendre ou résilier votre accès au site à tout moment, sans préavis et à notre seule discrétion, si nous estimons que vous avez violé ces conditions d'utilisation.
9. Droit Applicable

Ces conditions d'utilisation sont régies par les lois en vigueur dans notre juridiction. Tout litige découlant de ces conditions sera soumis à la compétence exclusive des tribunaux de notre juridiction.
10. Contact

Pour toute question concernant ces conditions d'utilisation, 
veuillez nous contacter à l'adresse suivante : <span>afoudamarius65@gmail.com</span>
                    </div>
                   
                </div>
        </div>

        <?php include 'parts/footer.php'; ?>

    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<style>
          body {
            font-family: Arial, sans-serif;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                display: none;
            }
            tr {
                margin-bottom: 15px;
            }
            td {
                position: relative;
                padding-left: 50%;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                background-color: #f4f4f4;
                border-right: 1px solid #ddd;
                box-sizing: border-box;
            }
        }

        img{
            width: 90px;
            height: 60px;
        }
    </style>

</body>

</html>