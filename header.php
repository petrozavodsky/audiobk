<!DOCTYPE html>
<html lang= <?php bloginfo('language'); ?>>
    <head>
        <meta charset= <?php bloginfo('charset' ); ?>>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php bloginfo('name' ); ?></title>
        <!-- Bootstrap -->
        <link href="<?php echo bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo bloginfo('stylesheet_url') ?>" rel="stylesheet">
        <script src="<?php echo bloginfo('template_url') ?>/js/carousel.js"></script>
        <script src="<?php echo bloginfo('template_url') ?>/js/galleria.classic.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container cont">
            <div class="row">
                <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="top_line col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                        <div class="row">
                            <div class="logo_site col-lg-5 col-md-6 col-sm-8 col-xs-6">
                                <a href=" <?php echo home_url() ?>"><img class="img_l" src="<?php echo bloginfo('template_url') ?>/images/png/logo.png" alt=""></a>
                            </div>

                            <div class="devuska col-lg-3 col-md-3 col-sm-4 col-xs-5">
                                <img class="img_d" src="<?php echo bloginfo('template_url') ?>/images/png/devuska.png" alt="">
                            </div>
                        </div>
                    </div>
                </header>
                <nav class="nav_meny">
                    <!-- ссылки на разделы в шапке-->
                    <div class="row nav_meny_row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="navbar navbar-inverse nv_style ">
                                <div class="navbar navbar-header">
                                    <a class="navbar-brand hidden-lg hidden-md hidden-sm " href="#"></a>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                                    <span class="sr-only">открыть навигацию</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    <div class="collapse navbar-collapse " id="responsive-menu">
                                    <?php
                                        $args = array(
                                          'theme_location'  => '',
                                          'menu'            => '',
                                          'container'       => '',
                                          'container_class' => '',
                                          'container_id'    => '',
                                          'menu_class'      => 'nav navbar-nav',
                                          'menu_id'         => 'top-nav',
                                          'echo'            => true,
                                          'fallback_cb'     => 'wp_page_menu',
                                          'before'          => '',
                                          'after'           => '',
                                          'link_before'     => '',
                                          'link_after'      => '',
                                          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                          'depth'           => 0
                                        );

                                        wp_nav_menu( $args );
                                     ?>
                                        <ul class="nav navbar-nav">

                                            <li class="li-search hidden-md hidden-sm hidden-xs">
                                                <form action="" method="post" class="search-lg">
                                                    <input type="search" name="" placeholder="что будем искать?" class="input" />
                                                    <input type="submit" name="" value="" class="submit" />
                                                </form>
                                            </li>
                                            <li class="li-search-md hidden-lg hidden-sm hidden-xs">
                                                <form action="" method="post" class="search-md">
                                                    <input type="search" name="" placeholder="что будем искать?" class="input" />
                                                    <input type="submit" name="" value="" class="submit" />
                                                </form>
                                            </li>
                                            <li class="li-search-sm hidden-lg hidden-md hidden-xs">
                                                <form action="" method="post" class="search-md">
                                                    <input type="search" name="" placeholder="что будем искать?" class="input" />
                                                    <input type="submit" name="" value="" class="submit" />
                                                </form>
                                            </li>
                                            <li class="li-search-xs hidden-lg hidden-md hidden-sm">
                                                <form action="" method="post" class="search-md">
                                                    <input type="search" name="" placeholder="что будем искать?" class="input" />
                                                    <input type="submit" name="" value="" class="submit" />
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="line_bottom_nav"></div>
                        </div>
                    </div>
                </nav>
