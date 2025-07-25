<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My portfolio - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;8 00;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
         <link href="/css/style.css" rel="stylesheet" />
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

       
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="./"><span class="fw-bolder text-primary">My Portfolio - Home</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/./">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="/progetti">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contacts">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
           <header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-primary mb-4">
                        <div class="text-uppercase"></div>
                    </div>
                    <div class="fs-4 fw-light text-muted ">Graphic UI/UX Designer | Front-End Dev Junior </div>
                    <h1 class="display-5 fw-bolder mb-5 testo-di-prova">
                        <span class="text-gradient d-inline">Trasforma le tue idee in esperienze digitali uniche con me!</span>
                    </h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder ml-5" href="/resume">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/progetti">Projects</a>
                      
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 py-4 text-center">
            <img class="rounded-circle mx-auto d-block w-75" src="./images/rose.png" alt="Rose Image">
            </div>
        </div>
    </div>
</header>

            <!--carousel seccion -->
           <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-md-offset-2 ">
                <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active  ">
                <img src="./images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item  ">
                <img src="./images/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item  ">
                <img src="./images/img3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item   ">
                <img src="./images/img4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

                </div>
            </div>
        </div>


        <div class="container px-5 mb-5 mt-5 text-center ">
                   <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">My services</span></h1>
                    </div>                 
        
        <!-- About Section-->
            <div class="container mt-5">
                    <div class="row ">
                        <div class="col-md-8 col-md-offset-2 text-center">

                        <div class="spacer-single">
                    </div>
                </div>
            
        </div>

            <!-- section begin -->
                        <section id="section-services">
                            <div class="container mt-6">
                                <div class="row">
                                    @foreach ($dati as $dato)
                                    <!-- feature box begin -->
                                    <div class="col-md-4">
                                        <div class="text">
                                            <i class="icon_camera_alt id-color mb20 size40"></i>
                                            <h4>{{ $dato }}</h4>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem. Sed ut perspiciatis unde omnis.
                                            <div class="spacer-single"></div>
                                            <a href="#" class="btn-text">read more</a>
                                        </div>
                                    </div>
                                    <!-- feature box close -->
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <div class="container mt-5 h-50">
                    <div class="row ">
                        <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="spacer-single"></div>
                    </div>

                    <!-- section begin -->
                    <section id="section-services">
                        <div class="container mt-6">
                            <div class="row"> 
                                @foreach ($projects as $project)
                                <!-- feature box begin -->
                                <div class="col-md-4">
                                    <div class="text">
                                        <i class="icon_camera_alt id-color mb20 size40"></i>
                                        <h4>{{ $project['nome'] }}</h4>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem. Sed ut perspiciatis unde omnis.
                                        <div class="spacer-single"></div>
                                        <a href="#" class="btn-text">read more</a>
                                    </div>
                                </div>
                                <!-- feature box close -->
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </main>
            <!-- section close -->

       


        <!-- Footer-->
        <footer class="bg-white py-4  mt-6 ">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
