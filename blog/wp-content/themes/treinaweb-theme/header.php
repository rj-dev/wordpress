<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="alternate" type="application/rss+xml" title="RSS2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- Container -->

        <div class="container">

            <!-- Barra de navegação -->


            <div class="navbar">
                <div class="navbar-inner">
                    <div style="width: auto;" class="container">

                        <!-- Opções de Menu -->

                        <a href="#" class="brand">Blog TreinaWeb</a>
                        <div class="nav-collapse">
                            <?php
                            wp_nav_menu(
                                    array(
                                        'menu' => 'menu_principal',
                                        'menu_class' => 'nav')
                            );
                            ?>

                            <!-- Formulário de pesquisa -->

                            <form action="" class="navbar-search pull-left">
                                <input type="text" placeholder="Pesquisar" class="search-query span2">
                            </form>

                            <!-- Opções de menu -->

                            <ul class="nav pull-right">
                                <li class="divider-vertical"></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Opções <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Ação 1</a></li>
                                        <li><a href="#">Ação 2</a></li>
                                        <li><a href="#">Ação 3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!-- /.nav-collapse -->
                    </div>
                </div><!-- /navbar-inner -->
            </div>

            <!-- Topo -->

            <div class="row-fluid">
                <div class="hero-unit">
                    <h1>Nome do Blog</h1>
                    <p>Boas vindas</p>
                </div>
            </div>

            <div class="row-fluid">

