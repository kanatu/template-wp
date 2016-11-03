<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="" />

        <title><?php wp_title('Quatro Rodas'); ?></title>
        
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>

        <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script >
        <script>
            function init() {
                window.addEventListener('scroll', function(e){

                    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                        shrinkOn = 100,
                        header = document.querySelector("header"),
                        banner = document.getElementById("banner"),
                        pageWidth = window.outerWidth;

                    if(pageWidth > 660){
                        if (distanceY > shrinkOn) {
                            classie.add(header,"smaller");
                            classie.add(banner,"smaller");
                        } else {
                            if (classie.has(header,"smaller")) {
                                classie.remove(header,"smaller");
                            }
                            if (classie.has(banner,"smaller")) {
                                classie.remove(banner,"smaller");
                            }
                        }
                    }
                });
            }
            window.onload = init();

        </script>
    </head>

    <body>
        <div id="banner">
            <img src="<?php bloginfo('template_url'); ?>/img/banner-1.png" />
        </div>
        <div id="wrapper">
            <header>
                <div id="div-header" class="clearfix">
                    <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i></a>
                    <h1 id="logo">
                        <a href="index.html" title="Quatro Rodas"><span></span></a>
                    </h1>
                    <div id="sociais">
                        <ul>
                            <li><a href="javascrip:void();" class="fa fa-facebook"></a></li>
                            <li><a href="javascrip:void();" class="fa fa-instagram"></a></li>
                            <li><a href="javascrip:void();" class="fa fa-twitter"></a></li>
                            <li><a href="javascrip:void();" class="fa fa-logo-abril"></a></li>
                        </ul>
                    </div>
                    <nav id="menu-principal">
                        <ul>
                            <li><a href="">Carros</a>
                                <div class="div-subs">
                                    <div class="tds-carros"><a href="">Ver todos os carros</a></div>
                                    <ul id="lista-carros">
                                        <li><a href="javascript:void(0)">Audi</a></li>
                                        <li><a href="javascript:void(0)">Bentley</a></li>
                                        <li><a href="javascript:void(0)">BMW</a></li>
                                        <li><a href="javascript:void(0)">Chevrolet</a></li>
                                        <li><a href="javascript:void(0)">Chrysler</a></li>
                                        <li><a href="javascript:void(0)">Chevrolet</a></li>
                                        <li><a href="javascript:void(0)">Dodge</a></li>
                                        <li><a href="javascript:void(0)">Ferrari</a></li>
                                        <li><a href="javascript:void(0)">Fiat</a></li>
                                        <li><a href="javascript:void(0)">Ford</a></li>
                                        <li><a href="javascript:void(0)">Honda</a></li>
                                        <li><a href="javascript:void(0)">Hyundai</a></li>
                                        <li><a href="javascript:void(0)">Jac Motors</a></li>
                                        <li><a href="javascript:void(0)">Jaguar</a></li>
                                        <li><a href="javascript:void(0)">Jeep</a></li>
                                        <li><a href="javascript:void(0)">Kia</a></li>
                                        <li><a href="javascript:void(0)">Lamborghini</a></li>
                                        <li><a href="javascript:void(0)">Mercedes-Benz</a></li>
                                        <li><a href="javascript:void(0)">Mitsubishi</a></li>
                                        <li><a href="javascript:void(0)">Volkswagen</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="">Testes</a>
                                <div class="div-subs">
                                    <ul id="categorias-laterais">
                                        <li><a href="javascript:void(0)">Ver tudo de teste</a>
                                            <div class="div-subs-categorias">
                                                <ol>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div><img src="<?php bloginfo('template_url'); ?>/img/ford-focus-fastback.png" /></div>
                                                            <label>Ford Focus Fastback Titanium Plus</label>
                                                            <span>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div><img src="<?php bloginfo('template_url'); ?>/img/audi-a6.png" /></div>
                                                            <label>Audi A6 2.0 TFSI</label>
                                                            <span>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div><img src="<?php bloginfo('template_url'); ?>/img/ford-ecosport.png" /></div>
                                                            <label>Ford EcoSport 1.6 Powershift</label>
                                                            <span>EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div><img src="<?php bloginfo('template_url'); ?>/img/audi-q3.png" /></div>
                                                            <label>Audi Q3 1.4</label>
                                                            <span>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div><img src="<?php bloginfo('template_url'); ?>/img/bmw-420.png" /></div>
                                                            <label>BMW 420i Cabriolet</label>
                                                            <span>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</span>
                                                        </a>
                                                    </li>
                                                </ol>
                                            </div>
                                        </li>
                                        <li><a href="javascript:void(0)">Comparativos</a></li>
                                        <li><a href="javascript:void(0)">Impress&otilde;es</a></li>
                                        <li><a href="javascript:void(0)">Longa Dura&ccedil;&atilde;o</a></li>
                                        <li><a href="javascript:void(0)">Teste de Pista</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="">Notícias</a></li>
                            <li><a href="">Auto-Serviço</a></li>
                            <li><a href="">Guia de compras</a></li>
                            <li><a href="">Tabela FIPE</a></li>
                            <li><a href="">ASSINE</a></li>
                        </ul>
                    </nav>
                    <div id="div-pesquisa">
                        <form action="">
                            <input type="search" id="txtPesquisa" name="txtPesquisa" placeholder="Pesquisar" />
                            <button type="submit" value="Pesquisa">&nbsp</button>
                        </form>
                    </div>
                    <div id="div-assine">
                        <a href="javascript:void(0);">assine</a>
                    </div>
                </div>
                <div class="maisacessados clearfix">
                    <nav>
                        <div>+acessados</div>
                        <a href="">Salão do Automóvel</a>
                        <a href="">Renegade</a>
                        <a href="">Novo Sandero</a>
                        <a href="">Novo FOX</a>
                        <a href="">Novo KA</a>
                        <a href="">HB20</a>
                        <a href="">DUSTER</a>
                        <a href="">Golf</a>
                        <a href="">Corolla</a>
                        <a href="">Civic</a>
                        <a href="">| A - Z |</a>
                    </nav>
                </div>
            </header><!-- /header -->