<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        
        <?php wp_head(); ?>
        
        <meta name="author" content="Studio 22">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <!-- Google tag (gtag.js) - Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=ENTRER_ICI_LE_TAG"></script> -->
        <!-- <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'ENTRER_ICI_LE_TAG');</script> -->
        
        <!-- start Google Captcha -->
        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
        <!-- <script>function onSubmit(token) {document.getElementById("NOM_DU_FORMULAIRE").submit();}</script> -->
        <!-- end Google Captcha -->
        
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>" target="_self" rel="noopener"><img class="" src="#" alt="Logo de "></a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <!-- start menu header wordpress -->
                        <?php wp_nav_menu(
                            array(
                                'menu'              => 'Menu header',
                                'theme_location'    => 'menu-header',
                                'depth'             => 0,
                                'container'         => '',
                                'container_id'      => '',
                                'container_class'   => '',
                                'menu_class'        => '',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            )
                        ); ?>
                        <!-- end menu header wordpress -->
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
