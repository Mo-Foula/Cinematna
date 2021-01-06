<?php include "database.php";
include "functions.php" ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>History</title>

    <style id="amy-movie-style-inline-css" type="text/css">
        .page-content .vc_custom_1482289028327 {
            background-position: top center !important;
        }

        .product-buy-ticket .product .quantity,
        .product-buy-ticket .woocommerce-related-products {
            display: none !important;
        }

        body {
            font-family: "Roboto Condensed", Arial, sans-serif;
            font-size: 13px;
            font-style: normal;
            font-weight: 400;
        }

        #amy-site-nav .menu-item a {
            font-family: "Roboto Condensed", Arial, sans-serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 700;
        }

        #amy-site-nav .sub-menu .menu-item a {
            font-family: "Roboto Condensed", Arial, sans-serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        .amy-tab ul li a {
            font-family: "Roboto Condensed", Arial, sans-serif;
            font-style: normal;
            font-weight: 700;
        }

        .rate,
        .entry-date,
        .pg {
            font-family: "Roboto Condensed", Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
        }

        .amy-primary-navigation ul.nav-menu>li>a::after {
            width: 0 !important;
        }

        #amy-page-header {
            background-image: url(http://demo.amytheme.com/movie/demo/book-ticket/wp-content/uploads/revslider/movie-cinema-slider/mvcnm2.jpg);
        }
    </style>
    <link rel="stylesheet" id="amy-movie-style-css" href="https://demo.amytheme.com/movie/demo/book-ticket/wp-content/themes/amy-movie/css/style.css?ver=1.0.0" type="text/css" media="all" />
</head>

<body class="page-template-default page page-id-119 theme-amy-movie woocommerce-no-js amy-header-default single-author wpb-js-composer js-comp-ver-6.1 vc_responsive">
    <div id="page" class="hfeed site">
        <div id="main">
            <div id="content" class="site-content">
                <section id="amy-page-header" class="has-page-title type-image">
                    <div class="amy-page-title amy-left">
                        <div class="amy-inner container">
                            <h1 class="page-title" id="page-title">Watched History</h1>
                        </div>
                    </div>
                </section>
                <section class="main-content page-layout-right">
                    <div class="container">
                        <div class="row">
                            <h1 id="found"></h1>
                            <div class="col-md-8">
                                <div class="page-content">
                                    <div class="amy-section wpb_row">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="amy-shortcode amy-mv-list">
                                                            <div class="list-content amy-ajax-content" id="movie-list">
                                                                <!-- Sergi: Here Should be an auth method e.g. (check if cookie is available)-->
                                                                <!-- Why?: to get the user's id to make use of the function get_whatchedHistory -->
                                                                <!-- so the function could get what he watched -->
                                                                <!-- get_whatchedHistory(database connection, user_id) -->
                                                                <?php
                                                                get_whatchedHistory($db, 0);
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>