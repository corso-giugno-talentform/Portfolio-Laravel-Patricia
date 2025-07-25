<!DOCTYPE html>
<html lang="en">
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
<body >
    
       <!-- section begin -->
       <section id="section-services" style="margin-top: 6rem;">
                            <div class="container">
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
</body>
</html>
