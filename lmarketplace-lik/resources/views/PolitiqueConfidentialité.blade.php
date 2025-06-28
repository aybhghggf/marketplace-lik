<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité | LmarketDyalek</title>
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
    <!-- Header -->
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
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Politique de Confidentialité</h1>
                <p class="text-gray-600">Dernière mise à jour: 15 juin 2023</p>
            </div>

            <!-- Introduction -->
            <section class="mb-12">
                <p class="mb-4 text-gray-700">
                    Chez LmarketDyalek, nous nous engageons à protéger votre vie privée. Cette politique de confidentialité explique comment nous collectons, utilisons, partageons et protégeons vos informations lorsque vous utilisez notre marketplace.
                </p>
                <p class="text-gray-700">
                    En utilisant nos services, vous acceptez les pratiques décrites dans cette politique. Veuillez la lire attentivement.
                </p>
            </section>

            <!-- Table of Contents -->
            <section class="mb-12 bg-gray-50 p-6 rounded-lg border-l-4 border-gold">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Sommaire</h2>
                <ol class="list-decimal list-inside space-y-2 text-gold-dark">
                    <li>Informations que nous collectons</li>
                    <li>Comment nous utilisons vos informations</li>
                    <li>Partage des informations</li>
                    <li>Protection des données</li>
                    <li>Vos droits</li>
                    <li>Cookies et technologies similaires</li>
                    <li>Modifications de cette politique</li>
                    <li>Nous contacter</li>
                </ol>
            </section>

            <!-- Content Sections -->
            <section class="space-y-12">
                <!-- Section 1 -->
                <article id="collecte">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">1</span>
                        Informations que nous collectons
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Nous collectons plusieurs types d'informations pour fournir et améliorer nos services :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li><strong>Informations personnelles</strong> : nom, prénom, adresse e-mail, numéro de téléphone, adresse de livraison</li>
                            <li><strong>Informations de paiement</strong> : informations de carte bancaire (stockées de manière sécurisée par nos prestataires de paiement)</li>
                            <li><strong>Données d'utilisation</strong> : historique d'achat, pages visitées, préférences</li>
                            <li><strong>Données techniques</strong> : adresse IP, type de navigateur, appareil utilisé</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 2 -->
                <article id="utilisation">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">2</span>
                        Comment nous utilisons vos informations
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Vos informations sont utilisées pour :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Fournir, maintenir et améliorer nos services</li>
                            <li>Traiter vos transactions et livraisons</li>
                            <li>Communiquer avec vous (confirmations, mises à jour, support)</li>
                            <li>Personnaliser votre expérience utilisateur</li>
                            <li>Détecter et prévenir les fraudes et abus</li>
                            <li>Se conformer aux obligations légales</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 3 -->
                <article id="partage">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">3</span>
                        Partage des informations
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Nous ne vendons pas vos informations personnelles. Nous pouvons les partager avec :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li><strong>Prestataires de services</strong> : prestataires de paiement, services de livraison, hébergeurs</li>
                            <li><strong>Vendeurs</strong> : uniquement les informations nécessaires à la livraison de vos commandes</li>
                            <li><strong>Autorités légales</strong> : lorsque requis par la loi ou pour protéger nos droits</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 4 -->
                <article id="protection">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">4</span>
                        Protection des données
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles appropriées pour protéger vos données :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Chiffrement des données sensibles</li>
                            <li>Contrôles d'accès stricts</li>
                            <li>Audits de sécurité réguliers</li>
                            <li>Formation de notre personnel</li>
                        </ul>
                    </div>
                </article>

                <!-- Section 5 -->
                <article id="droits">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">5</span>
                        Vos droits
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Conformément au RGPD, vous avez le droit de :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Accéder à vos données personnelles</li>
                            <li>Demander la rectification de données inexactes</li>
                            <li>Demander l'effacement de vos données ("droit à l'oubli")</li>
                            <li>Limiter le traitement de vos données</li>
                            <li>Vous opposer au traitement</li>
                            <li>Demander la portabilité de vos données</li>
                        </ul>
                        <p class="mt-4 text-gray-700">
                            Pour exercer ces droits, veuillez nous contacter via les coordonnées fournies ci-dessous.
                        </p>
                    </div>
                </article>

                <!-- Section 6 -->
                <article id="cookies">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">6</span>
                        Cookies et technologies similaires
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Nous utilisons des cookies et technologies similaires pour :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Fonctionnalité de base du site</li>
                            <li>Analyse d'audience</li>
                            <li>Personnalisation du contenu</li>
                            <li>Publicité ciblée</li>
                        </ul>
                        <p class="mt-4 text-gray-700">
                            Vous pouvez gérer vos préférences cookies via les paramètres de votre navigateur.
                        </p>
                    </div>
                </article>

                <!-- Section 7 -->
                <article id="modifications">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">7</span>
                        Modifications de cette politique
                    </h2>
                    <div class="pl-11">
                        <p class="text-gray-700">
                            Nous pouvons mettre à jour cette politique occasionnellement. Nous vous informerons des changements significatifs par e-mail ou via une notification sur notre site. La date de la dernière mise à jour est indiquée en haut de ce document.
                        </p>
                    </div>
                </article>

                <!-- Section 8 -->
                <article id="contact">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-8 h-8 bg-gold text-black rounded-full flex items-center justify-center mr-3">8</span>
                        Nous contacter
                    </h2>
                    <div class="pl-11">
                        <p class="mb-4 text-gray-700">
                            Pour toute question concernant cette politique de confidentialité ou vos données personnelles :
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Email : <a href="ayoubehamadi5@gmail.com" class="text-gold-dark hover:underline">privacy@lmarketdyalek.com</a></li>
                            <li>Adresse :Rabat</li>
                            <li>Téléphone : +212 6 -------</li>
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