<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon-trans.ico" type="image/x-icon">
    <!-- Normalize (CSS Reset) -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Mis styles -->
    <link rel="stylesheet" href="css/style.css">

    <title>Nunca Taxi</title>
</head>

<body>
    <!-- CONTENEDOR GENERAL -->
    <div class="container-fluid p-0 contenedor">
        <!-- HEADER - LOGO + NAV -->
        <header class="bg-dark">
            <div class="container bg-dark mb-0 py-1">
                <nav class="row">
                    <div class="col-2">
                        <a href="#" class="logo-header"><img src="img/Logo-NuncaTaxi.svg" width="200px" alt="Home"></a>
                        <a href="#" class="isologo-header"><img src="img/isologo-NuncaTaxi.svg" width="56px" alt="Home"></a>
                    </div>
                    <div class="col-10 text-end nav-header">
                        <button type="button" class="btn btn-outline-light border-dark m-2" data-bs-toggle="modal" data-bs-target="#RegistroModal">REGISTRO</button>
                        <button type="button" class="btn btn-outline-light border-dark m-2"  data-bs-toggle="modal" data-bs-target="#LoginModal">INGRESAR</button>
                        <!-- <button type="button" class="btn btn-warning m-2">PUBLICAR</button>  -->
                        
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <!-- MODALS -->
            <?php include('modals.php'); ?>

            <!-- SLIDER -->
            <section>
                <div id="carouselExampleSlidesOnly" class="container p-0 carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="position-absolute text-slider mx-5 mt-3 col-sm-12 col-md-8 col-lg-10">
                              <p class="text-slider lh-sm">el auto que estabas buscando</p>
                              <button type="button" class="bt-slider btn btn-warning"><span>PUBLICAR</span></button>
                          </div>
                        <img src="img/slider_bg-red.jpg" class="float-right" alt="...">
                      </div>
                      <div class="carousel-item">
                        <div class="position-absolute text-slider mx-5 mt-3 col-sm-12 col-md-8 col-lg-10">
                            <p class="text-slider lh-sm">compra y vende sin comisi??n</p>
                            <button type="button" class="bt-slider btn btn-dark"><span>PUBLICAR</span></button>
                        </div>
                        <img src="img/slider_bg-yellow.jpg" class="float-center" alt="...">
                      </div>
                      <div class="carousel-item">
                        <div class="position-absolute text-slider mx-5 mt-3 col-sm-12 col-md-8 col-lg-8">
                            <p class="text-slider lh-sm">operaci??n directa entre partes</p>
                            <button type="button" class="bt-slider btn btn-warning"><span>PUBLICAR</span></button>
                        </div>
                        <img src="img/slider_bg-blue.jpg" class="float-center" alt="...">
                      </div>
                    </div>
                  </div>
            </section>

            <!-- BANNER TOP -->
            <section>   
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="banner_top">
                                <img src="img/banner-YPF-Elaion-970x250.jpg" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- BUSCADOR y FILTROS -->
            <section>
                <div class="container-fluid">
                    <div class="container p-3 bg-dark">
                        
                        <form class="px-2" id="formBusqueda">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <select class="form-select form-select-md mb-2" aria-label="form-select-sm example">
                                        <option selected>Tipo de vehiculo</option>
                                        <option value="1">Cami??n</option>
                                        <option value="2">Camioneta</option>
                                        <option value="3">Auto</option>
                                        <option value="4">Moto</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <select class="form-select form-select-md mb-2" aria-label="form-select-sm example">
                                        <option selected>Marca</option>
                                        <option value="1">Audi</option>
                                        <option value="2">Baic</option>
                                        <option value="3">Chevrolet</option>
                                        <option value="4">Dodge</option>
                                        <option value="5">Ford</option>
                                        <option value="6">Hundai</option>
                                        <option value="7">Toyota</option>
                                        <option value="8">VW</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <select class="form-select form-select-md mb-2" aria-label="form-select-sm example">
                                        <option selected>Modelo</option>
                                        <option value="1">sarasa</option>
                                        <option value="2">Pirulito</option>
                                        <option value="3">Menganito</option>
                                        <option value="4">Cuchuflito</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <select class="form-select form-select-md mb-2" aria-label="form-select-sm example">
                                        <option selected>A??o</option>
                                        <option value="1">2021</option>
                                        <option value="2">2020</option>
                                        <option value="3">2019</option>
                                        <option value="4">2018</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <select class="form-select form-select-md mb-2" aria-label="form-select-sm example">
                                        <option selected>Valor hasta...</option>
                                        <option value="1">10.000.000</option>
                                        <option value="2">5.000.000</option>
                                        <option value="3">1.000.000</option>
                                        <option value="4">500.000</option>
                                        <option value="5">100.000</option>
                                        <option value="6">50.000</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <button class="btn btn-outline-warning w-100 mb-2">BUSCAR</button>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </section>

            <!-- CARDS PUBLICACIONES -->
            <section>
                <div class="container-fluid">
                    <div class="container p-0 bg-dark">
                        <div class="row m-0 p-0">
                            
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">TOYOTA PIRULEX</h5>
                                        <div class="card_ano-kms">A??o 2016. 105000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. Capital federal.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$1.350.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">HUNDAI SARASA</h5>
                                        <div class="card_ano-kms">A??o 2018. 78000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. Avellaneda.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$1.250.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">TOYOTA PIRULEX</h5>
                                        <div class="card_ano-kms">A??o 2020. 35000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. La Plata.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$1.750.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">HUNDAI SARASA</h5>
                                        <div class="card_ano-kms">A??o 2014. 198000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. Lujan.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$850.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">TOYOTA PIRULEX</h5>
                                        <div class="card_ano-kms">A??o 2020. 35000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. La Plata.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$1.750.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">HUNDAI SARASA</h5>
                                        <div class="card_ano-kms">A??o 2014. 198000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. Lujan.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$850.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">TOYOTA PIRULEX</h5>
                                        <div class="card_ano-kms">A??o 2016. 105000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. Capital federal.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$1.350.000</a></div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="img/Card_Auto-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card_marca">HUNDAI SARASA</h5>
                                        <div class="card_ano-kms">A??o 2018. 78000km.</div>
                                        <div class="card_ubicacion mb-3">Buenos Aires. Avellaneda.</div>
                                        <div class="card_valor"><a class="card_val btn btn-dark w-100" href="#">$1.250.000</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Pagination -->
                        <div class="container">
                          <nav aria-label="Page navigation example" class="bg-dark">
                            <ul class="pagination justify-content-center pt-0 pb-2 fs-5">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>

                    </div>
                </div>
            </section>  
        </main>
        
        <!-- FOOTER -->
        <footer class="container-fluid bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-8 mb-0 py-2">
                        <a href="#"><button type="button" class="bt-footer btn btn-outline-light py-0">LEGALES</button></a>
                        <a href="#"><button type="button" class="bt-footer btn btn-outline-light py-0">CONTACTO</button></a>
                    </div>
                    <div class="col-3 offset-1 mb-0 py-2 rrss-icons">
                        <a href="#"><img src="img/facebook_icon.svg" alt="facebook"></span></a>
                        <a href="#"><img src="img/instagram_icon.svg" alt="instagram"></span></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <span>?? 2021 - Todos los Derechos Reservados</span>
            </div>
            
        </footer>
    </div>

    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>