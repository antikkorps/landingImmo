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
            <p class="lead mb-0"><a href="#" class="btn btn-primary">En savoir plus</a></p>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="divider"></div>

    <!-- MAIN CARD -->
    <div class="container_main_card d-flex">
        <div class="row section_audio mx-5 my-5 justify-content-center">

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="title">Le titre</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>

                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="btn btn-primary mx-auto my-2">Call To Action</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="title">Le titre</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>

                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="btn btn-primary mx-auto my-2">Call To Action</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- DIVIDER -->
    <div class="divider"></div>


    <!-- SECTION EXPLICATION -->
    <div class="container_section_explication my-5">

        <div class="animation_group">
            <div class="animation_1">
                <img class="animation_1" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/global2.png';  ?> alt="illustration animation">
            </div>
            <div class="animation_2">
                <img class="animation_2" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/roue.png';  ?> alt="illustration animation">
            </div>
            <div class="animation_3">
                <img class="animation_3" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/line.png';  ?> alt="illustration animation">
            </div>
            <div class="animation_4">
                <img class="animation_4" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/cloud.png';  ?> alt="illustration animation">
            </div>
            <div class="animation_5">
                <img class="animation_5" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/cloud.png';  ?> alt="illustration animation">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Loi ALUR</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fonctionnement</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION LOGO -->


    <div class="container_logo my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                    <div class="single-client text-center">
                        <img src="https://cdn.ayroui.com/1.0/images/client-logo/graygrids.svg" alt="Logo" />
                        <h6 class='mt-3'>7 heures</h6>
                    </div>
                    <!-- single -->
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                    <div class="single-client text-center">
                        <img src="https://cdn.ayroui.com/1.0/images/client-logo/uideck.svg" alt="Logo" />
                        <h6 class='mt-3'>100% e-learning</h6>
                    </div>
                    <!-- single -->
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                    <div class="single-client text-center">
                        <img src="https://cdn.ayroui.com/1.0/images/client-logo/ayroui.svg" alt="Logo" />
                        <h6 class='mt-3'>Mise à jour 2023</h6>
                    </div>
                    <!-- single -->
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                    <div class="single-client text-center">
                        <img src="https://cdn.ayroui.com/1.0/images/client-logo/lineicons.svg" alt="Logo" />
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

    <!-- SECTION AUDIO -->
    <div class="container">
        <h3 class="d-flex justify-content-center my-5 title_section">Je développe mon activité immobilière</h3>
        <p class="my-5 presentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>
        <div class="container_illustration">
            <img class="sms_animation" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/Text-messages-remix.gif';  ?> alt="illustration SMS">
            <img class="formation_illus" src=<?php echo wp_get_upload_dir()['baseurl'] . '/2023/05/12084857_20944033-scaled.jpg';  ?> alt="illustration SMS">
        </div>

        <div class="row section_audio">

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="title mb-3">Au programme</h4>
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
                        <a href="" class="btn btn-primary mx-auto my-2">Call To Action</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="title mb-3">A qui s'adresse cette formation ?</h4>
                        <ul class='list-group'>
                            <li class='list-group-item'>
                                <p>A toutes les personnes exerçant une activité d’élaboration de proposition, d’octroi ou de conseil en matière de contrat de crédit immobilier pour un usage résidentiel</p>
                            </li>
                            <li class='list-group-item'>
                                <p>La formation s’adresse à ceux qui ont déjà validé la capacité professionnelle et permet de répondre aux exigences réglementaires</p>
                            </li>
                        </ul>

                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="btn btn-primary mx-auto my-2">Call To Action</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-auto col-lg-4">
                <div class="card">
                    <div class="card-header">Header</div>
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
                        <a href="" class="btn btn-primary mx-auto my-2">Call To Action</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="description">
            <p class="px-3 my-5 description">
                La Loi Alur ou Accès au logement et Urbanisme Rénové, entrée en vigueur le 27 mars 2014, vise à favoriser l’accès au logement des personnes vulnérables et à réguler le marché de l’immobilier. Afin d’atteindre ces objectifs, cette loi impose aux professionnels du secteur de suivre une formation loi Alur.
                La <strong>formation loi Alur</strong> vise à consolider et perfectionner les connaissances des professionnels de l’immobilier (agents immobiliers, administrateurs de biens et syndics).
            </p>
            <a class="btn btn-primary btn-lg mx-auto my-5 call_to_action_audio" href="">Call To Action</a>
        </div>
    </div>

    <!-- DIVIDER -->
    <div class="divider"></div>

    <!-- SECTION VIDEO -->

    <div class="container_video my-5 mx-auto d-flex">

        <div class="video_video ratio ratio-16x9 mx-3">
            <iframe src="https://www.youtube.com/embed/K4A-ll-D8SQ?rel=0&amp;autoplay=1&mute=1" title="Découvrez Nouvelles Donnes avec Aurélie, Directrice" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="video_description d-flex align-items-center">
            <p class="mx-4 align-middle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Porttitor lacus luctus accumsan tortor posuere ac ut consequat semper. Massa sed elementum tempus egestas sed sed.</p>
        </div>

    </div>

</div>
<?php
get_footer();
