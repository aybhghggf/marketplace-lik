<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions d'Utilisation | LmarketDyalek</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#FFD700',
                        'gold-dark': '#B8860B',
                        'gold-light': '#FFED4E'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #ffffff;
        }
        .gold-gradient {
            background: linear-gradient(135deg, #FFD700 0%, #B8860B 100%);
        }
        .content-section {
            max-width: 800px;
            margin: 0 auto;
        }
        h2 {
            scroll-margin-top: 100px;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Header Simplifié -->
    <header class="gold-gradient py-4 shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex justify-end">
                <a href="{{ route('register') }}" class="flex items-center text-black hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Revenir
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="content-section bg-white rounded-lg shadow-sm p-8 border border-gray-100">
            <!-- Page Title -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Conditions Générales d'Utilisation</h1>
                <p class="text-gray-600">Dernière mise à jour: 15 juin 2023</p>
            </div>

            <!-- Introduction -->
            <section class="mb-12">
                <p class="mb-4 text-gray-700">
                    Les présentes Conditions Générales d'Utilisation (ci-après "CGU") régissent votre utilisation de la marketplace LmarketDyalek.
                </p>
                <p class="text-gray-700">
                    En accédant ou utilisant notre plateforme, vous acceptez d'être lié par ces CGU. Si vous n'acceptez pas toutes ces conditions, veuillez ne pas utiliser notre service.
                </p>
            </section>

            <!-- Table of Contents -->
            <section class="mb-12 bg-gray-50 p-6 rounded-lg border-l-4 border-gold">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Sommaire</h2>
                <ol class="list-decimal list-inside space-y-2 text-gold-dark">
                    <li><a href="#definitions" class="hover:text-gold transition-colors">Définitions</a></li>
                    <li><a href="#compte" class="hover:text-gold transition-colors">Création et gestion de compte</a></li>
                    <li><a href="#achats" class="hover:text-gold transition-colors">Conditions d'achat</a></li>
                    <li><a href="#ventes" class="hover:text-gold transition-colors">Conditions de vente</a></li>
                    <li><a href="#contenu" class="hover:text-gold transition-colors">Contenu utilisateur</a></li>
                    <li><a href="#responsabilites" class="hover:text-gold transition-colors">Responsabilités</a></li>
                    <li><a href="#propriete" class="hover:text-gold transition-colors">Propriété intellectuelle</a></li>
                    <li><a href="#resiliation" class="hover:text-gold transition-colors">Résiliation</a></li>
                    <li><a href="#modifications" class="hover:text-gold transition-colors">Modifications des CGU</a></li>
                    <li><a href="#droit" class="hover:text-gold transition-colors">Droit applicable</a></li>
                </ol>
            </section>

            <!-- Content Sections -->
            <section class="space-y-12">
                <!-- Section 1 -->
                <article id="definitions">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">1</span>
                        Définitions
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Dans les présentes CGU, les termes suivants ont les significations suivantes :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li><strong>Plateforme</strong> : désigne le site web LmarketDyalek et ses services associés</li>
                            <li><strong>Utilisateur</strong> : toute personne accédant à la Plateforme</li>
                            <li><strong>Vendeur</strong> : Utilisateur proposant des produits ou services à la vente</li>
                            <li><strong>Acheteur</strong> : Utilisateur effectuant des achats sur la Plateforme</li>
                            <li><strong>Contenu</strong> : tout élément textuel, visuel ou audiovisuel publié sur la Plateforme</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 2 -->
                <article id="compte">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">2</span>
                        Création et gestion de compte
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Pour accéder à certaines fonctionnalités, vous devez créer un compte utilisateur.
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Vous devez fournir des informations exactes et complètes</li>
                            <li>Vous êtes responsable de la confidentialité de vos identifiants</li>
                            <li>Vous devez avoir au moins 18 ans ou l'âge légal dans votre juridiction</li>
                            <li>Nous nous réservons le droit de suspendre ou résilier tout compte non conforme</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 3 -->
                <article id="achats">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">3</span>
                        Conditions d'achat
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Les prix sont indiqués en dirhams marocains (MAD) TTC</li>
                            <li>Le paiement est dû immédiatement lors de la commande</li>
                            <li>Les délais de livraison sont indicatifs et dépendent des vendeurs</li>
                            <li>Le droit de rétractation s'applique conformément à la loi marocaine</li>
                            <li>Les litiges doivent être signalés dans les 7 jours suivant réception</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 4 -->
                <article id="ventes">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">4</span>
                        Conditions de vente
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Les vendeurs sont responsables de la qualité et conformité de leurs produits</li>
                            <li>Les descriptions doivent être exactes et complètes</li>
                            <li>Les prix doivent inclure toutes taxes applicables</li>
                            <li>LmarketDyalek prélève une commission sur chaque vente</li>
                            <li>Les vendeurs doivent respecter les délais de livraison annoncés</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 5 -->
                <article id="contenu">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">5</span>
                        Contenu utilisateur
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Vous conservez vos droits sur le contenu que vous publiez</li>
                            <li>Vous accordez à LmarketDyalek une licence mondiale pour utiliser ce contenu</li>
                            <li>Le contenu illégal, diffamatoire ou trompeur est interdit</li>
                            <li>Nous pouvons retirer tout contenu non conforme sans préavis</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 6 -->
                <article id="responsabilites">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">6</span>
                        Responsabilités
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            LmarketDyalek agit comme intermédiaire entre acheteurs et vendeurs :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Nous ne sommes pas responsables des transactions entre utilisateurs</li>
                            <li>Nous ne garantissons pas l'exactitude des descriptions de produits</li>
                            <li>Notre responsabilité est limitée au montant de la commission perçue</li>
                            <li>Nous ne sommes pas responsables des interruptions de service techniques</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 7 -->
                <article id="propriete">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">7</span>
                        Propriété intellectuelle
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>La Plateforme et son contenu original sont la propriété de LmarketDyalek</li>
                            <li>La marque LmarketDyalek est protégée</li>
                            <li>Toute reproduction non autorisée est interdite</li>
                            <li>Les signalements de contenu contrefait doivent être envoyés à legal@lmarketdyalek.com</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 8 -->
                <article id="resiliation">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">8</span>
                        Résiliation
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Vous pouvez fermer votre compte à tout moment</li>
                            <li>Nous pouvons suspendre ou résilier votre compte pour violation des CGU</li>
                            <li>Les obligations antérieures à la résiliation restent applicables</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 9 -->
                <article id="modifications">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">9</span>
                        Modifications des CGU
                    </h2>
                    <div class="pl-11">
                        <p class="text-gray-700">
                            Nous pouvons modifier ces CGU à tout moment. Les modifications prendront effet dès leur publication. Votre utilisation continue de la Plateforme constitue votre acceptation des nouvelles CGU.
                        </p>
                    </div>
                </article>

                <!-- Section 10 -->
                <article id="droit">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">10</span>
                        Droit applicable
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Les présentes CGU sont régies par le droit marocain</li>
                            <li>Tout litige relève des tribunaux compétents de Casablanca</li>
                            <li>La version française des CGU fait foi</li>
                        </ul>
                    </div>
                </article>
            </section>

            <!-- Closing -->
            <section class="mt-16 pt-8 border-t border-gray-200">
                <p class="text-gray-600 text-center">
                    © 2023 LmarketDyalek. Tous droits réservés.
                </p>
            </section>
        </div>
    </main>
</body>
</html>