<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="../../vendor/jquery-3.5.0.min.js">
    <link rel="stylesheet" href="../../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/css/style.css">
    <style>
        /* #cuerpo {
            background: black;
    
        }
     */
        #mision {
            background: #d181f3;
        }
    
        #vision {
            background: #e3b8fe;
    
        }
    
        #historia {
            background: #d181f3;
    
        }
    
        #targeta {
            background: #e3b8fe;
    
        }
    
        #tit_ingre {
    
            background: #d181f3;
        }
    
        #agregar {
            background: #d181f3;
            border-bottom: black;
            font-style: black;
        }
    </style>
</head>


<body  class="bg-dark">
    <!-- Header -->
	<div class="header">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <nav class="navbar navbar-expand-lg navbar-dark " >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="hover-effect"><a href="#">Home</a></li>
                <li class="hover-effect"><a href="#about">Acerca</a></li>
                <li class="hover-effect"><a href="#contact">Contacto</a></li>
            </ul>
              <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
            </div>
          </nav>
		<!-- //Navbar -->
	</div>
  
    <div class="container" id="about">
        <div class="row">

            <div id="mision" class="col-4 text-center p-5">
                <label for="mision"><b><u>Mision de Apple</u></b></label>
                <p>Apple diseña Mac, las mejores computadoras personales del mundo, junto con OS X, iLife, iWork y
                    software profesional. Apple lidera la revolución de la música digital con sus iPods y la tienda en
                    línea de iTunes. Apple ha reinventado el teléfono móvil con su revolucionaria tienda de aplicaciones
                    y iPhone, y está definiendo el futuro de los medios móviles y los dispositivos informáticos con
                    iPad.

                    Esta compañía centra sus acciones en el usuario, ya que sabe que no hay crecimiento posible sin un
                    servicio y usabilidad excelentes, a la vez que se ve a sí misma como un líder tecnológico.

                    Otro de los enfoques de esta misión es llevar productos confiables, revolucionarios y de calidad
                    alta, lo que la posiciona como una marca de gran atracción. Así, no tienen usuarios, sino seguidores
                    que refuerzan el proceso publicitario.</p>


            </div>

            <div id="vision" class="col-4  text-center p-5">
                <label for="Vision"><b><u>Vision de Apple</u></b></label>
                <p> Mejorar la calidad de vida de nuestros clientes, a través de tres pilares: profesionalismo,
                    tecnología y trayectoria, para lograr ser reconocidos como la empresa líder en tecnologías de
                    información, comunicación y entretenimiento.</p>

            </div>

            <div id="historia" class="col-4 text-center p-5">

                <label for="historia"><b><u>Historia Apple</u></b></label>
                <p> Apple Inc. es una empresa estadounidense que diseña y produce equipos electrónicos, software y
                    servicios en línea. Tiene su sede central en el Apple Park, en Cupertino (California, Estados
                    Unidos) y la sede europea en la ciudad de Cork (Irlanda).3​Sus productos de hardware incluyen el
                    teléfono inteligente iPhone, la tableta iPad, el ordenador personal Mac, el reproductor de medios
                    portátil iPod, el reloj inteligente Apple Watch y el reproductor de medios digitales Apple TV. Entre
                    el software de Apple se encuentran los sistemas operativos iOS, macOS, watchOS y tvOS, el explorador
                    de contenido multimedia iTunes, la suite iWork (software de productividad), Final Cut Pro X (una
                    suite de edición de vídeo profesional), Logic Pro (software para edición de audio en pistas de
                    audio), Xsan (software para el intercambio de datos entre servidores) y el navegador web Safari.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
             <div class="col-sm-12 my-auto">
                 <div class="card-block" align="center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DGRz2BJQRXU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                 </div>
             </div>
        </div>
    </div>
    <!-- Contact -->
	<div class="contact" id="contact">
		<div class="container">

			<h3>Contactanos</h3>
			<div class="heading-underline"></div>

			<form class="contact_form">

				<div class="message">
					<div class="row">
                        <div class="col-md-6 col-sm-6 grid_6 c1">
                            <input type="text" class="text" placeholder="Nombre" required="" >
                            <input type="text" class="text" placeholder="Email" required="" >
                            <input type="text" class="text" placeholder="Celular" required="" >
                        </div>

                        <div class="col-md-6 col-sm-6 grid_6 c1">
                            <textarea placeholder="Mensaje" required=""></textarea>
                        </div>
                        <div class="clearfix"></div>

                        <input type="submit" class="more_btn" value="Envia tu Opinion">
                    </div>
				</div>
			</form>

		</div>
	</div>
	<!-- //Contact -->

</body>

</html>