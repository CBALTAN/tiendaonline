<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212; 
            text-align: center;
            border-top-left-radius: 20px; 
        }

        img {
            max-width: 100%;
            height: auto; 
        }
        .custom-bg-color {
            background-color: #121212;
        }
        .container-fluid {
        margin-left: auto !important;
        }
        .custom-margin {
        margin-bottom: 30px;         }
        .text-red {
        color: red !important; 
        }
    </style>    
</head>

<body >
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
    
    function cerrarSesion() {
        $.post("../controlador/usuariocontroller.php", {
            'opcion': 'cerrarsesion'
        }, redirigir);
    }
    function guardar() {
            console.log($("#datos").serialize());
            $.post("../controlador/carritocomp.php",
                $("#datos").serialize(),
                respuesta);
        }
    function redirigir(arg) {
        if (arg == false) {  
            $(location).attr('href', "nuevologin.html");
        }
    }
    function respuesta(arg) {
            if (arg == true) {
                $(location).attr('href', "home.html");
            } else {
                alert(arg);
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand navbar-light bg-black fixed-top">
    <img src="{{asset('assets/logo.png')}}" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
        <a class="navbar-brand text-white">ConsolePlus</a>
        <ul class="navbar-nav mx-auto">
            <li class="nav-item" hidden>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
        </ul>
        <div class="navbar-nav">
        <ul class="navbar-nav">
             <li class="container mt-1">
                <a href="carrito.html">
                        <img src="https://cdn-icons-png.flaticon.com/512/5087/5087847.png" width="24" alt="Icono de carrito" style="background: transparent; border: none;">
                </a>
            </li>
            <li class="nav-item dropdown" style="z-index: 1000;">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->username }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Cuenta</a></li>
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="/logout">Cerrar Sesión</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black justify-content-start fixed-top" style="margin-top: 60px; z-index: 999;">
        <div class="container">
            <ul class="nav nav-tabs" >
                <li class="nav-item">
                    <a class="nav-link active text-red" aria-current="page" href="/home">HOME</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-red " href="#section2">JUEGOS</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link text-red" href="#section3">CARDS</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link text-red" href="#section4">NOTICIAS</a>
                </li>
            </ul>
        </div>
    </nav>

   <div class="img" id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/15070.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/7325.jpg')}}"  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/2462.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/2500.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
 </div>

<div class="container mt-5">
    <div class="row">
        
        <div class="col-md-6">
            <!-- Imagen -->
            <div class="presentation">
                <picture class="banner">
                    <img src="{{asset('assets/forza-motorsport-premium-edition-pc-xbox-series-x-s-premium-edition-xbox-series-x-s-pc-juego-microsoft-store-cover.jpg')}}" style="max-width: 100%; height: auto; border-radius: 10px;">
                </picture>
            </div>
        </div>
    <div class="col-md-6">
    <div class="data">
        <form id="datos" class="container mt-2">
            <input class="form-control" name="opcion" type="text" value="insertar" hidden>
            <div class="panel item" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8)); padding: 20px; border-radius: 10px;">
                <div type="text" style="margin-top: 70px;">
                    <h1 class="game-title smaller text-white">Forza MOTORSPORT</h1>
                    <input class="form-control" name="nombre" id="nombre" type="text" value="Forza MOTORSPORT" hidden>
                </div>
                <div style="margin-bottom: 50px; " class="d-flex justify-content-between align-items-center" >
                    <div type="number" style="color: white; margin-left: 100px;" class="total">19.99$</div>
                    <input class="form-control" name="precio" id="precio" type="number" value="19.99" hidden>
                    <div class="input-group" style="width: 200px;" >
                        <label class="input-group-text" for="cantidad" >Cantidad</label>
                        <select class="form-select" id="cantidad" name="cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="action priced mt-3">
                    <button class="btn btn-lg mb-2 btn-primary btn-block" onclick="guardar()" type="submit">Añadir al carrito</button>
                </div>
            </div>
        </form>
    </div>
</div>

         
    </div>
</div>

<br />
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="description">
                <h2 class="mb-4 text-start text-white">Descripción</h2>
                <div class="text-left text-start text-white">
                    <span itemprop="description">
                        Compite con más de 500 automóviles del mundo real, incluidos coches de carreras modernos y más de 100 modelos nuevos de Forza Motorsport. Haz que cada vuelta cuente en 20 pistas realistas con las ubicaciones más valoradas de los aficionados y múltiples diseños de pista que dominar. Cada diseño incluye puntuación en directo en la pista, paso del tiempo dinámico con un clima realista y condiciones de conducción únicas en las que no hay dos vueltas iguales...<br> <br>
                        Premium Edición incluye<br>
                        - Forza Motorsport<br>
                        - Paquete de coches Día de carrera<br>
                        - Pase de coches<br>
                        - Suscripción VIP<br>
                        - Paquete de bienvenida
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<br />

    

</body>
<footer class="bg-black text-light">
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <h5>Información de Contacto</h5>
                    <p>Dirección: Calle Principal #123</p>
                    <p>Teléfono: 0934758424</p>
                    <p>Correo Electrónico: info@consoleplus.com</p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <p>ACEPTAMOS</p>
                    <p>DEPÓSITOS O TRANSFERENCIAS BANCARIAS</p>
                    <img id="debito_card" src="https://site.comandato.com/footer/img/debito_cards.svg" class="img-fluid" width="200" height="50">
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <p>ACEPTAMOS</p>
                    <p>TARJETAS DE CRÉDITO</p>
                    <img id="tarjetas_card" src="https://comandato.vteximg.com.br/arquivos/vteximg_com_br-tarjetas_bn.png?v=637369923356730000" class="img-fluid">
                </div>
            </div>
        </div>
        <hr>
        <p class="text-center">© 2023 Tu Empresa. Todos los derechos reservados.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center">
                    Copyright © 2023 ConsolePlus|
                    <a target="_blank" href="https://www.facebook.com">
                        <img id="logo_premios" src="https://static.vecteezy.com/system/resources/previews/023/986/613/non_2x/facebook-logo-facebook-logo-transparent-facebook-icon-transparent-free-free-png.png" alt="Facebook" class="img-fluid redes-sociales" alt="Logo" width="50" height="34" class="d-inline-block ">
                    </a>
                    <a target="_blank" href="https://www.instagram.com">
                        <img id="logo_premios" src="https://static.vecteezy.com/system/resources/previews/023/986/555/non_2x/instagram-logo-instagram-logo-transparent-instagram-icon-transparent-free-free-png.png" alt="Instagram" class="img-fluid redes-sociales" alt="Logo" width="50" height="34" class="d-inline-block ">
                    </a>
                    <a target="_blank" href="https://www.youtube.com">
                        <img id="logo_premios" src="https://static.vecteezy.com/system/resources/previews/018/930/572/original/youtube-logo-youtube-icon-transparent-free-png.png" alt="YouTube" class="img-fluid redes-sociales" alt="Logo" width="50" height="34" class="d-inline-block ">
                    </a>
                </p>
            </div>
            
        </div>
    </div>
</footer>



</html>
