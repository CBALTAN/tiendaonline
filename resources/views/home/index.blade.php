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
        margin-bottom: 30px;
		}
        .text-red {
        color: red !important; 
        }
    </style>	
</head>

<body>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            // Agrega el desplazamiento suave para los enlaces de la barra de navegación
            $(".nav-link").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });
                }
            });

            // Cambio dinámico de fondo del navbar según la sección visible
            $(window).scroll(function () {
                var scrollPosition = $(this).scrollTop();

                $('section').each(function () {
                    var target = $(this).offset().top;
                    var targetHeight = target + $(this).height();

                    if (scrollPosition >= target && scrollPosition <= targetHeight) {
                        var sectionId = $(this).attr('id');
                        $('.nav-link').removeClass('active');
                        $('a[href="#' + sectionId + '"]').addClass('active');
                        $('.navbar').removeClass('bg-section1 bg-section2 bg-section3 bg-section4');
                        $('.navbar').addClass('bg-' + sectionId);
                    }
                });
            });
        });
	
    function cerrarSesion() {
        $.post("../controlador/usuariocontroller.php", {
            'opcion': 'cerrarsesion'
        }, redirigir);
    }

    function redirigir(arg) {
        if (arg == false) { 
            $(location).attr('href', "nuevologin.html");
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
                    <a class="nav-link active text-red" aria-current="page" href="#section1">HOME</a>
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


    <section id="section1">
        <h2>HOME</h2>
        <<div class="img" id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
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
    </section>

    <section id="section2">
        <h2>JUEGOS</h2>
        <div class="container">
    <div class="row">
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a  href="/batcomp">
                    <picture>
                        <img class="picture" src="{{asset('assets/battlefield-2042-pc-juego-origin-cover.jpg')}}" alt="BATTLEFEILD 2042" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >BATTLEFEILD 2042</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            29.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a  href="/forcomp">
                    <picture>
                        <img class="picture" src="{{asset('assets/forza-motorsport-premium-edition-pc-xbox-series-x-s-premium-edition-xbox-series-x-s-pc-juego-microsoft-store-cover.jpg')}}" alt="Forza MOTORSPORT" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >Forza MOTORSPORT</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            19.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="/wrcomp">
                    <picture>
                        <img class="picture" src="{{asset('assets/ea-sports-wrc-pc-juego-ea-app-cover.jpg')}}" alt="WRC"  style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >WRC</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            24.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="liecomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/lies-of-p-pc-juego-steam-cover.jpg')}}" alt="Lies of P" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >Lies of P</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            14.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="morcomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/mortal-kombat-1-premium-edition-xbox-series-x-s-premium-edition-xbox-series-x-s-juego-microsoft-store-cover.jpg')}}" alt="Mortal Kombat 1" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >Mortal Kombat 1</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            29.99€
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="paycomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/payday-3-silver-edition-silver-edition-pc-juego-steam-cover.jpg')}}" alt="Pay Day 3" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >PAYDAY 3</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            34.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="crycomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/crysis-remastered-remastered-pc-juego-epic-games-cover.jpg')}}" alt="CRYSIS" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >CRYSIS</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            9.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="macomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/maneater-pc-juego-epic-games-cover.jpg')}}" alt="Maneater" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >Maneater</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            19.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a  href="precomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/predator-hunting-grounds-ps4-playstation-4-juego-playstation-store-cover.jpg')}}" alt="PREDATOR"style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >PREDATOR</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            29.99€
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="redcomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/red-dead-online-playstation-4-juego-playstation-store-cover.jpg')}}" alt="RED DEAD" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >RED DEAD ONLINE</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            49.99€
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="witcomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/the-witcher-3-wild-hunt-blood-y-wine-ps4-playstation-4-juego-playstation-store-cover.jpg')}}" alt="THE WITCHER III" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >THE WITCHER III</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            29.99€
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 custom-margin">
            <div class="item">
                <a href="worlcomp.html">
                    <picture>
                        <img class="picture" src="{{asset('assets/world-war-z-aftermath-pc-juego-epic-games-cover.jpg')}}" alt="WORLD WAR Z" style="max-width: 100%; height: auto; border-radius: 10px;">
                    </picture>
                </a>
                <div class="information">
                    <div class="text d-flex justify-content-between">
                        <div class="name" style="color: white; margin-left: 5px;" style="font-weight: bold;">
                            <span class="title" >WORLD WAR Z</span>
                        </div>
                        <div class="price" style="color: white; margin-right: 5px;">
                            29.99$
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

    <section id="section3">
        <h2>CARDS</h2>
        <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-3" style="margin-left: 20px;">
                <div class="card text-bg-secondary" style="max-width: 18rem; background: linear-gradient(to bottom, #0074E4, #000000), url('https://cdn.bodegadigital.biz/wp-content/uploads/2019/12/psn10-510x583.png.webp'); background-size: cover; padding: 20px; border-radius: 10px;">
                    <img src="https://cdn.bodegadigital.biz/wp-content/uploads/2019/12/psn10-510x583.png.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><h5 class="card-title">$10</h5></center>
                        <center><h5 class="card-title">Valor de: $13</h5></center>
                        <center><a href="card10comp.html" class="btn btn-primary">Comprar</a></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 20px;">
                <div class="card text-bg-secondary" style="max-width: 18rem; background: linear-gradient(to bottom, #0074E4, #000000), url('https://cdn.bodegadigital.biz/wp-content/uploads/2019/12/psn10-510x583.png.webp'); background-size: cover; padding: 20px; border-radius: 10px;">
                    <img src="https://cdn.bodegadigital.biz/wp-content/uploads/2020/09/psn25-510x583.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><h5 class="card-title">$25</h5></center>
                        <center><h5 class="card-title">Valor de: $30</h5></center>
                        <center><a href="card25comp.html" class="btn btn-primary">Comprar</a></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 20px;">
                <div class="card text-bg-secondary" style="max-width: 18rem; background: linear-gradient(to bottom, #0074E4, #000000), url('https://cdn.bodegadigital.biz/wp-content/uploads/2019/12/psn10-510x583.png.webp'); background-size: cover; padding: 20px; border-radius: 10px;">
                    <img src="https://cdn.bodegadigital.biz/wp-content/uploads/2020/04/psn-60-510x583.png.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><h5 class="card-title">$60</h5></center>
                        <center><h5 class="card-title">Valor de: $65</h5></center>
                        <center><a href="card60comp.html" class="btn btn-primary">Comprar</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="section4">
        <h2>NOTICIAS</h2>
        <div class="row g-0 bg-dark ">
            <div class="col-md-6 mb-md-0 p-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/inQelDKULOQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 p-4 ps-md-0 ">
                <h5 class="mt-0 text-center text-white">¿Grand Theft Auto 6 saldrá en Xbox One y PlayStation 4?</h5>
                <p class="text-white text-justify">Grand Theft Auto 6 es el juego más esperado de los últimos años. Naturalmente, su revelación oficial no dejó indiferente a nadie, por lo que millones de fanáticos se dieron cita en las redes sociales para discutir los primeros detalles. En medio del entusiasmo, surgió una gran pregunta: ¿el juego estará disponible para Xbox One y PlayStation 4?

                Recordemos que el Xbox Series X|S y PlayStation 5 debutaron a finales de 2020, por lo que ya están en su tercer año de su ciclo de vida. Naturalmente, poco a poco se dejan a un lado las consolas de antigua generación, pero aún es posible ver lanzamientos de alto perfil para dichas plataformas. ¿Acaso GTA 6 seguirá esa tendencia o será una exclusiva next-gen? Esto es todo lo que sabemos.</p>
            </div>
        </div>
        <div class="row g-0 bg-black ">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="{{asset('assets/tlo.jpg')}}" class="w-100" alt="...">
            </div>
            <div class="col-md-6 p-4 ps-md-0 ">
                <h5 class="mt-0 text-center text-white">The Last of Us Part III: actor comparte noticia preocupante sobre el juego</h5>
                <p class="text-white text-justify">Durante una entrevista con Dexerto, Jeffrey Pierce, actor que da voz a Tommy Miller, declaró algo que preocupa a los fans de la popular franquicia: aún no ha recibido ningún guion relacionado con The Last of Us Part III.

                Lo alarmante para muchos es que también afirmó que, hasta donde sabe, no hay nada planeado por ahora para un guion. Señaló que no está al tanto de si Naughty Dog ya está preparando algo, pero al menos no ha sido notificado de ninguna forma.

                “En este punto,no es algo que haya comenzado de ninguna manera, al menos, que yo sepa, y odiaría tener expectativas sobre lo que sería y luego que fuera algo completamente diferente”, afirmó el actor de voz.
                Pese a ello, Pierce aún tiene esperanzas de que pronto haya noticias sobre el guion y que Naughty Dog se lo envíe, pues quiere formar parte de un nuevo proyecto de la saga.</p>
            </div>
        </div>
        <div class="row g-0 bg-dark">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="{{asset('assets/16989344218963.jpg')}}" class="w-100" alt="...">
            </div>
            <div class="col-md-6 p-4 ps-md-0 text-white">
                <h5 class="mt-0 text-center text-white">¿Cuándo termina la Temporada 1 de Fortnite Capítulo 5? Fecha y hora de finalización</h5>
                <p class="text-white text-start">La nueva temporada de Fortnite, la Temporada 1 del Capítulo 5, comenzó el domingo 3 de diciembre de 2023 y terminará el 8 de marzo de 2024. Debajo os dejamos la información detallada con respecto a cuándo terminará y sobre la fecha y la hora de finalización de esta temporada de Fortnite.<br>
                -Argentina, Brasil, Chile y Uruguay: 4AM del viernes 8 de marzo de 2024.<br>
                -Bolivia, Cuba, República Dominicana y Venezuela: 3AM del viernes 8 de marzo de 2024.<br>
                -Colombia, Ecuador, México, Panamá y Perú: 2AM del viernes 8 de marzo de 2024.</p>
            </div>
        </div>
    </section>


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
