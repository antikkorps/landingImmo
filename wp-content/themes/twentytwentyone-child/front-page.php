<?php
get_header();

$description = get_the_archive_description();
?>
<!-- HERO -->
<div class="container-page">
    <div class="jumbotron p-5 p-md-5 text-white rounded bg-dark">
        <div class="col-sm-11 col-md-8  heading">
            <h1 class="display-5 font-italic">Découvrez notre centre de formation Immobilier</h1>
            <p class="lead my-3">Booster votre carrière immobilière grâce à nos formations réglementaires et entrainements spécifiques pour devenir un acteur incontournable de votre marché</p>
            <p class="lead mb-0"><a href="#deroulement_des_formations" class="btn btn-primary">En savoir plus</a></p>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="divider"></div>

    <!-- MAIN CARD -->
    <div class="container_main_card d-flex" id="nos_offres">
        <div class="row section_audio mx-5 my-5 justify-content-center">

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Entrainez-vous</div>
                    <div class="card-body">
                        <h4 class="card-title">Le centre d'entrainement des agents immobiliers</h4>
                        <p>Booster l’efficacité de vos commerciaux et de vos managers avec des entrainements sur-mesure et en distanciel qui permet de gagner du temps. On s'entraine à son rythme</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#section_tc" class="btn btn-primary mx-auto my-2">Développez votre potentiel</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Actualisez vos connaissances</div>
                    <div class="card-body">
                        <h4 class="card-title">FORMATION DCI 2023 – Directive Crédit Immobilier</h4>
                        <p>Formation éligible Loi Alur 100% en ligne qui vous permettra d'actualiser vos connaissances et de mettre à jour votre attestation afin de faire face à vos obligations règlementaires</p>

                    </div>
                    <div class="card-footer text-center">
                        <a href="#dci_section" class="btn btn-primary mx-auto my-2">Cliquez ici pour vous mettre à jour</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION DCI -->
    <div class="dci_section py-5" id='dci_section'>
        <!-- SECTION EXPLICATION -->
        <div class="container_section_explication my-5">

            <div class="animation_group">
                <!-- TODO -->
                <img class="animation_1" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/global2.png';  ?> alt="illustration animation">
                <img class="animation_2" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/roue.png';  ?> alt="illustration animation">
                <img class="animation_3" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/line.png';  ?> alt="illustration animation">
                <img class="animation_4" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/cloud.png';  ?> alt="illustration animation">
                <img class="animation_5" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/cloud.png';  ?> alt="illustration animation">
            </div>

            <div class="card text-center dci_card">
                <div class="card-header">
                    DCI - Loi ALUR
                </div>
                <div class="card-body">
                    <p class="card-text">Vous devez renouveler votre carte professionnelle Transaction d'agent immobilier ou votre attestation de collaborateur</p>
                    <p class="card-text">Vous souhaitez vous perfectionner avec les nouveautés réglementaires du crédit immobilier</p>
                    <p class="card-text">Nous vous proposons de découvrir dès aujourd'hui notre formation Directive Crédit Immobilier - Version 2023</p>
                    <a href="#" class="btn btn-primary btn-lg col-sm-6 col-md-5 col-lg-2 my-3">J'y vais</a>
                </div>
                <div class="card-footer text-muted">
                    Formation en distanciel
                </div>
            </div>

        </div>

        <!-- DIVIDER -->
        <div class="divider"></div>

        <!-- SECTION PICTO -->

        <div class="titre_section d-flex justify-content-center my-5 text-white" id="avantages">
            <h3>NOS AVANTAGES</h3>
        </div>

        <div class="container_logo my-5 text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/horlogeOutline.png';  ?> alt="illustration animation" style="width:25%;">
                            <h6 class='mt-3'>7 heures</h6>
                        </div>
                        <!-- single -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/laptop-white.png';  ?> alt="illustration animation" style="width:35sudo%;">
                            <h6 class='mt-3'>100% e-learning</h6>
                        </div>
                        <!-- single -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/engrenages.png';  ?> alt="illustration animation" style="width:30%;">
                            <h6 class='mt-3'>Mise à jour 2023</h6>
                        </div>
                        <!-- single -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/AmpouleAncrage.png';  ?> alt="illustration animation" style="width:25%;">
                            <h6 class='mt-3'>Ancrage mémoriel performant</h6>
                        </div>
                        <!-- single -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>

        <!-- DIVIDER -->
        <div class="divider"></div>

        <!-- SECTION PROGRAMME -->
        <div class="container" id='deroulement_des_formations'>
            <div class="title_section d-flex justify-content-center my-5">
                <h3 class='text-white'>LE DEROULEMENT DE NOS FORMATIONS</h3>
            </div>
            <p class="my-5 presentation text-white">Elles ont été pensées pour vous permettre de les réaliser en distanciel. Pas besoin de se déplacer et donc un gain substanciel de temps. Elles vous permettront de gagner rapidement en efficacité sur les sujets qui vous intéressent</p>
            <div class="container_illustration">
                <img class="sms_animation" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/Text-messages-remix.gif';  ?> alt="illustration SMS">
                <img class="formation_illus" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/12084857_20944033-scaled.jpg';  ?> alt="illustration SMS">
            </div>

            <div class="row section_audio">

                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-header">Le programme</div>
                        <div class="card-body">
                            <h4 class="title mb-3">Le déroulé</h4>
                            <ul class='list-group'>
                                <li class='list-group-item d-flex justify-content-between align-items-start'>
                                    <div class="ms-2 me-auto">
                                        <p>Enjeux du crédit immobilier et la directive Crédit immobilier</p>
                                        <span class='badge bg-success rounded-pill'>95 min</span>

                                    </div>
                                </li>
                                <li class='list-group-item d-flex justify-content-between'>
                                    <div class="ms-2 me-auto">
                                        <p>Préparation du rendez-vous et découverte du client</p>
                                        <span class='badge bg-success rounded-pill'>140 min</span>

                                    </div>
                                </li>
                                <li class='list-group-item d-flex justify-content-between'>
                                    <div class="ms-2 me-auto">
                                        <p>Différents types de prêts</p>
                                        <span class='badge bg-success rounded-pill'>30 min</span>
                                    </div>
                                </li>
                                <li class='list-group-item d-flex justify-content-between'>
                                    <div class="ms-2 me-auto">
                                        <p>Projet immobilier et financement</p>
                                        <span class='badge bg-success rounded-pill'>80 min</span>
                                    </div>
                                </li>
                                <li class='list-group-item d-flex justify-content-between'>
                                    <div class="ms-2 me-auto">
                                        <p>Faisabilité du financement</p>
                                        <span class='badge bg-success rounded-pill'>70 min</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-primary mx-auto my-2">Vous voulez le détail ?</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-auto col-lg-4">
                    <div class="card">
                        <div class="card-header">Qui?</div>
                        <div class="card-body">
                            <h4 class="title mb-3">A qui s'adresse cette formation ?</h4>
                            <ul class='list-group'>
                                <li class='list-group-item'>
                                    <p>A toutes les personnes exerçant une activité d’élaboration, de proposition, d’octroi ou de conseil en matière de contrat de crédit immobilier pour un usage résidentiel</p>
                                </li>
                                <li class='list-group-item'>
                                    <p>La formation s’adresse également à ceux qui ont déjà validé la capacité professionnelle et leur permet de répondre aux exigences réglementaires de leur métier</p>
                                </li>
                                <li class='list-group-item'>
                                    <p>Vous souhaitez vous perfectionner</p>
                                </li>
                            </ul>

                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-primary mx-auto my-2">Vous êtes concernés ?</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-auto col-lg-4">
                    <div class="card">
                        <div class="card-header">Comment?</div>
                        <div class="card-body">
                            <h4 class="title">Prérequis</h4>
                            <p>La formation est de 7 heures</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p>Cette formation ne nécessite aucun prérequis</p>
                                </li>
                                <li class="list-group-item">
                                    <p>Le passage de l'examen nécessite une connexion internet ainsi qu'un ordinateur/tablette/smartphone</p>
                                </li>
                                <li class="list-group-item">
                                    <p>La formation est composée d'un test de positionnement, de cours e-learning et de quiz</p>
                                </li>
                                <li class="list-group-item">
                                    <p>Chaque parcours est validé par une évaluation finale</p>
                                </li>
                            </ul>

                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-primary mx-auto my-2">Demander des informations</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="description">
                <p class="px-3 my-5 description text-white">
                    La Loi Alur ou Accès au logement et Urbanisme Rénové, entrée en vigueur le 27 mars 2014, vise à favoriser l’accès au logement des personnes vulnérables et à réguler le marché de l’immobilier. Afin d’atteindre ces objectifs, cette loi impose aux professionnels du secteur de suivre une formation loi Alur.
                    La <strong>formation loi Alur</strong> vise à consolider et perfectionner les connaissances des professionnels de l’immobilier (agents immobiliers, administrateurs de biens et syndics).
                </p>
                <a class="btn btn-primary btn-lg d-flex justify-content-center mx-auto my-5 col-sm-6 col-md-5 col-lg-2" href="#contact_container">Se renseigner !</a>
            </div>
        </div>

    </div>

    <div class="section_tc" id='section_tc'>

        <!-- DIVIDER -->
        <div class="divider"></div>

        <!-- SECTION VIDEO -->

        <div class="title_section d-flex justify-content-center mx-auto my-5">
            <h3 class='mx-auto px-2'>Le Training Center By Nouvelles Donnes</h3>
        </div>
        <div class="container_video my-5 mx-auto d-flex row">

            <div class="video_video ratio ratio-16x9 mx-auto px-2">
                <iframe src="https://www.youtube.com/embed/K4A-ll-D8SQ?rel=0&amp;autoplay=1&mute=1" title="Découvrez Nouvelles Donnes avec Aurélie, Directrice" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video_description col-sm-12">
                <p class='mx-5 my-5 py-5'>Centre d’entrainement à distance spécialisé dans les pratiques commerciales et managériales dans le secteur de l’immobilier</p>

            </div>
            <div class="btn_container d-flex mt-3 justify-content-center">
                <a href="#contact_container" class="btn btn-primary btn-lg my-5 mx-auto col-sm-6 col-md-5 col-lg-2">En savoir plus</a>
            </div>
        </div>

        <!-- DIVIDER -->
        <div class="divider"></div>

        <!-- SECTION DECOUVREZ LE TRAINING CENTER -->

        <div class="title_section d-flex justify-content-center my-5">
            <h3>LE CONCEPT DU TRAINING CENTER</h3>
        </div>

        <div class="container my-5 mx-auto d-flex justify-content-center">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/OBJECTIF-1.png';  ?> class="card-img-top" alt="illustration carte">
                        <div class="card-body">
                            <h5 class="card-title">Objectif</h5>
                            <p class="card-text">Entrainer les conseillers immobiliers sur:</p>
                            <ul class="list-group my-3">
                                <li class="list-group-item">L'excellence relationnelle</li>
                                <li class="list-group-item">La performance commerciale</li>
                                <li class="list-group-item">Le coaching managérial</li>
                            </ul>
                            <div class="fw-bold">
                                <p>Via des mises en situation réalistes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/NOS-ENTRAINEURS.png';  ?> class="card-img-top" alt="illustration carte">
                        <div class="card-body">
                            <h5 class="card-title">Nos entraineurs</h5>
                            <p class="card-text">Nos coachs entraineurs sont des experts de la relation client.</p>
                            <p class="card-text">Ils maîtrisent à la perfection les mises en situation</p>
                            <p class="fw-bold"> Avec une capacité d'observation et d'analyse extrêmement précise et juste</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/METHODE.png';  ?> class="card-img-top" alt="illustration carte">
                        <div class="card-body">
                            <h5 class="card-title">Notre méthode</h5>
                            <p class="card-text">Des séances d'appropriation opérationnelles:</p>
                            <ul class="list-group my-3">
                                <li class="list-group-item">A distance</li>
                                <li class="list-group-item">Par téléphone ou visio</li>
                            </ul>
                            <div class="fw-bold">
                                <p>Pour les accompagner dans leur montée en compétence</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/ENREGISTREMENTS-AUDIO.png';  ?> class="card-img-top" alt="illustration carte">
                        <div class="card-body">
                            <h5 class="card-title">Quelques exemples en audio</h5>

                            <ul class="list-group my-3">
                                <li class="list-group-item"><a href="">lien 1</a></li>
                                <li class="list-group-item"><a href="">lien 2</a></li>
                                <li class="list-group-item"><a href="">lien 3</a></li>
                            </ul>
                            <div class="fw-bold">
                                <p>mais le mieux reste encore de nous contacter et de tester en conditions réelles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <figure class='col-sm-12 col-md-8 col-lg-9 mx-auto'>
            <blockquote class="blockquote">
                <p>La répétition est la clef! Pour un résultat optimal et opérationnel, réalisez de 1 à 3 séances d’entrainement d’une heure.
                    Dès la première heure et grâce aux mises en situation (en moyenne 3 à 4 par séance) et au débriefing de nos entraineurs, vous aurez toutes les cartes en main pour avoir des résultats opérationnels direct. </p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Béatrice <cite title="Source Title">Manager au Training Center</cite>
            </figcaption>
        </figure>

        <!-- CALL TO ACTION -->
        <div class="d-grid gap-2 col-sm-6 col-md-5 col-lg-3 mx-auto my-5">
            <a href="#contact_container" class="btn btn-primary btn-lg">Contactez-nous pour tester</a>
        </div>


        <!-- DIVIDER -->
        <div class="divider"></div>

        <!-- SECTION PICTO -->

        <div class="titre_section d-flex justify-content-center mx-auto my-5">
            <h3>QUELQUES CHIFFRES</h3>
        </div>

        <div class="container_logo my-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/smiley.png';  ?> alt="illustration animation" style="width:40%;">
                            <h4 class='mt-5'>Taux de satisfaction</h4>
                            <h4 class='mt-3'>99% en 2022</h4>
                        </div>
                        <!-- single -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/galaxy.png';  ?> alt="illustration animation" style="width:40%;">
                            <h4 class='mt-5'>Nombre d'apprenants</h4>
                            <h4 class='mt-3'>10.000 par an</h4>
                        </div>
                        <!-- single -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/check.png';  ?> alt="illustration animation" style="width:40%;">
                            <h4 class='mt-5'>Des résultats</h4>
                            <h4 class='mt-3'>Mesurables dès la première séance</h4>
                        </div>
                        <!-- single -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                        <div class="single-client text-center">
                            <img class="w-30" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/objectif.png';  ?> alt="illustration animation" style="width:30%;">
                            <h4 class='mt-5'>Des REX</h4>
                            <h4 class='mt-3'>Des retours d'expériences à chaque étape</h4>
                        </div>
                        <!-- single -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>

    </div>

    <!-- DIVIDER -->
    <div class=" divider">
    </div>

    <!-- CONTACT CONTAINER -->
    <div class="contact_container d-flex justify-content-center mx-auto my-5 pt-5" id="contact_container">

        <div class="form-content col-sm-12 col-md-6 col-lg-5 mx-4">
            <h4 class="text-center">Contactez-nous ici</h4>
            <?php echo do_shortcode('[wpforms id="36"]'); ?>
        </div>
        <img class='col-sm-12 col-md-6 col-lg-7 rounded-end illustration_contact' src="<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/4370811-scaled.jpg';  ?>" alt="">
    </div>

    <!-- BACK TO TOP -->
    <a href="#" class="backtotop d-flex justify-content-center align-items-center rounded-circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </a>

    <!-- END CONTAINER PAGE -->
</div>

<?php
get_footer();
