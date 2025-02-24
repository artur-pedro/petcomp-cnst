<?php
require_once('html_header.php');
require_once('header.php');
?>
<body>
<main id="main">
    <!--==========================
            Intro Section
        ============================-->


    <div id="carouselExampleControls" class="carousel" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        </ol> -->
        <div class="carousel-inner">
            <div id="intro" class="carousel-item active">
                <div class="slider-banner">
                    <div class="intro-container wow fadeIn">
                        <h1>Congresso Nacional de Saúde e Tecnologia</h1>
                        <h1>3º Café com Ciência</h1>
                        <h2>A ciência e os desafios para saúde e tecnologia em novos tempos</h2>
                        <a href="#about-event" class="about-btn text-decoration-none">
                            <b>Sobre o evento</b>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden"></span>
            </a> -->
        </div>
    </div>

    <!--==========================
            About Section
        ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-lg-6">
                        <h2>Sobre o Evento</h2>
                        <p>A Acalourada é uma atividade de recepção dos estudantes ingressantes no curso de <strong>Ciência da Computação</strong>
                            de forma presencial. Essa atividade já vem sendo desenvolvida de forma presencial
                            há mais de 6 anos em conjunto com a <strong>Coordenação de Computação</strong>, o <strong>Departamento de Informática</strong> e o
                            <strong>PET de Computação</strong>, e procura guiar os calouros através da universidade e do curso, além de mostrar as oportunidades
                            que a universidade oferece tanto de forma pessoal como profissional.
                        </p>
                    </div>
                </center>
            </div>
        </div>
    </section>


    <!--====================
            Organização
        ======================-->
    <section id="supporters" class="wow fadeInUp section-with-bg">

        <div class="container ">
            <div class="section-header">
                <h2>Organização</h2>
            </div>



            <div class="row no-gutters supporters-wrap clearfix">

                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="https://portais.ufma.br/PortalUfma/index.jsf" target="_blank">
                            <img src="img/supporters/3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>


                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="http://www.deinf.ufma.br/" target="_blank">
                            <img src="img/supporters/3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="https://petcompufma.org/" target="_blank">
                            <img src="img/supporters/4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <a href="https://www.instagram.com/dacomp.ufma/" target="_blank">
                            <img src="img/supporters/6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>
</body>