<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurante | Pallace</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


    <!-- Template js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Start Logo Section -->
<section id="logo-section" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo text-center">
                    <h1>Restaurante Palace</h1>
                    <span>Controle de Pedidos</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Logo Section -->


<!-- Start Main Body Section -->
<div class="mainbody-section text-center">
    <div class="container">
        <div class="row">

            <div class="col-md-3">

                <div class="menu-item blue">
                    <a href="#marmitexModa" data-toggle="modal">
                        <i class="fa fa-cutlery"></i>
                        <p>Marmitex Moda da Casa</p>
                    </a>
                </div>

                <div class="menu-item green">
                    <a href="" data-toggle="modal">
                        <i class="fa fa-file-photo-o"></i>
                        <p>Etiquetas</p>
                    </a>
                </div>

                <div class="menu-item light-red">
                    <a href="" data-toggle="modal">
                        <i class="fa fa-motorcycle"></i>
                        <p>Entregas</p>
                    </a>
                </div>

            </div>

            <div class="col-md-6">

                <!-- Start Carousel Section -->
                <div class="home-slider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>assets/images/about-03.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/about-02.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/about-01.jpg" class="img-responsive" alt="">
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Start Carousel Section -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-item color responsive">
                            <a href="" data-toggle="modal">
                                <i class="fa fa-area-chart"></i>
                                <p>Relatorio Diário</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-item light-orange responsive-2">
                            <a href="" data-toggle="modal">
                                <i class="fa fa-area-chart"></i>
                                <p>Relatorio Semanal</p>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="menu-item light-red">
                    <a href="#marmitexCliente" data-toggle="modal">
                        <i class="fa fa-cutlery"></i>
                        <p>Marmitex moda do Cliente</p>
                    </a>
                </div>

                <div class="menu-item color">
                    <a href="" data-toggle="modal">
                        <i class="fa fa-comment-o"></i>
                        <p>Suporte Técnico</p>
                    </a>
                </div>

                <div class="menu-item blue">
                    <a href="" data-toggle="modal">
                        <i class="fa fa-mortar-board"></i>
                        <p>Cadastro Clientes</p>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main Body Section -->

<!-- Start Copyright Section -->
<div class="copyright text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>Desenvolvido: <a href="https://www.luzianiavirtual.com.br" target="_blank">Luziania Virtual</div>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright Section -->


<!-- Start Feature Section -->
<div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Awesome Feature</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-magic"></i>
                        <div class="feature-content">
                            <h4>Web Design</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-gift"></i>
                        <div class="feature-content">
                            <h4>Graphics Design</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-wordpress"></i>
                        <div class="feature-content">
                            <h4>Wordpress Theme</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-plug"></i>
                        <div class="feature-content">
                            <h4>Wordpress Plugin</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-joomla"></i>
                        <div class="feature-content">
                            <h4>Joomla Template</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-cube"></i>
                        <div class="feature-content">
                            <h4>Joomla Extension</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-css3"></i>
                        <div class="feature-content">
                            <h4>HTML 5 & CSS3</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-android"></i>
                        <div class="feature-content">
                            <h4>Android Apps</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div>

    </div>
</div>
<!-- End Feature Section -->



<!-- Start Portfolio Section -->
<div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Portfolio</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/1.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/2.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/3.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/4.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/5.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/6.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/7.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/8.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/9.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/10.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/11.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="images/portfolio/12.png" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div>

    </div>
</div>
<!-- End Portfolio Section -->


<!-- Start About Us Section -->
<div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>About Us</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-text">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. It has roots in a piece of classical Latin literature from 45 BC</p>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus</li>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                    <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                </ul>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="skill-shortcode">

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Web Design</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="60">
                                    <span class="progress-bar-span" >60%</span>
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>HTML & CSS</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="95">
                                    <span class="progress-bar-span" >95%</span>
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Wordpress</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="80">
                                    <span class="progress-bar-span" >80%</span>
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Joomla</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="100">
                                    <span class="progress-bar-span" >100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Extension</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="70">
                                    <span class="progress-bar-span" >70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-tab">

                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vission</a></li>
                            <li><a href="#tab-3" role="tab" data-toggle="tab">Company History</a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active" id="tab-1">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            </div>


                            <div class="tab-pane" id="tab-2">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            </div>


                            <div class="tab-pane" id="tab-3">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            </div>

                        </div><!-- /.tab-content -->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End About Us Section -->


<!-- Start Service Section -->
<div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Services</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-magic pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Web Design</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-css3 pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">HTML5 & CSS3</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-wordpress pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Wordpress Theme</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-plug pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Wordpress Plugin</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-joomla pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Joomla Template</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-cube pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Joomla Extension</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div>

        <div class="pricing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Free</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Standard</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Premium</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Professional</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Service Section -->


<!-- Start Team Member Section -->
<div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Expert Team</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/manage-1.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/manage-2.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/manage-3.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/manage-4.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/team-1.jpg" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/team-2.jpg" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/team-3.jpg" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/images/team/team-4.jpg" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div>

    </div>
</div>
<!-- End Team Member Section -->


<!-- Start Latest News Section -->
<div class="section-modal modal fade" id="news-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Exclusive News</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="latest-post">
                        <img src="images/blog-01.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="latest-post">
                        <img src="images/blog-02.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="latest-post">
                        <img src="images/blog-03.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="latest-post">
                        <img src="images/blog-04.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- End Latest News Section -->



<!-- Start Contact Section -->
<div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Cadastro de Clientes</h3>
                </div>
            </div>
            <div class="row" style="padding-top: 80px;">
                <div class="col-md-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome do Cliente *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email do Cliente *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefone do Cliente *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Endereço do Cliente *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Bairro *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Cidade *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Contact Section -->


<!-- Start Testimonial Section -->
<div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Client's Speech About Us</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="testimonial">
                        <img src="images/team/manage-1.png" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="testimonial">
                        <img src="images/team/manage-2.png" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="testimonial">
                        <img src="images/team/manage-3.png" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="testimonial">
                        <img src="images/team/manage-4.png" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>

            </div><!--/.row -->

        </div>

    </div>
</div>
<!-- End Testimonial Section -->


<div class="modal fade" id="marmitexModa">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() ?>index.php/morador/excluir" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Marmitex Moda da Casa</h3>
                </div>
                <div class="col-md-6" style="margin-top: 2%;">
                    <div class="form-group">
                        <input style="font-size: 1.5em" type="text" class="form-control" placeholder="Quantidade de Marmitex *" id="phone" required>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-danger">Confirmar</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="marmitexCliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" class="form-inline">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Marmitex Moda do Cliente</h3>
                </div>
                <div class="col-md-12" style="margin-top: 2%; ">
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Arroz</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Feijão</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Farofa</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Macarrão</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Linguiça</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Frango Assado</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Frango ao Molho</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>
                    <div  style="font-size: 1.3em">
                        <label style="width: 200px;" class="form-group">Carne ao Molho</label>
                        <input style="width: 50%;" type="checkbox" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-danger">Confirmar</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

</body>

</html>