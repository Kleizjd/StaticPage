<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PsicoApp/Web</title>
    <link rel="stylesheet" href="../../vendor/jquery-3.5.0.min.js">
    <link rel="stylesheet" href="../../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/css/style.css">
    <link rel="stylesheet" href="../../vendor/css/video-responsive.css">
</head>


<body class="bg-dark">
    <!-- Header -->
    <div class="header">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">PsicoApp/Web </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="hover-effect"><a href="#description">Descripcion</a></li>
                    <li class="hover-effect"><a href="#about">Inicio</a></li>
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

    <div class="container">
        <div id="description" class="row">
            <div class="descripcion col-sm-12 text-center  p-5" style="background-color: #dcb8dc; font-size: large;">
                <h1>DESCRIPCION</h1>
                <b>" Confía en ti mismo, de lo contrario, será difícil que los demás confíen en ti "</b>


                <p> Para mantenerte saludable es determinante que tengas actitud positiva frente a todas la
                    situaciones
                    de la vida, este habito te ayuda a desarrollar una mejor salud integral.
                    Se debe aprender a ejercer control sobre las deciciones y acciones de tu dia a dia, ya que
                    estas
                    formaran tus habitos.
                    <br>
                    <b>CONSEJO:</b>
                    Practica el habito del Auto-control, ya sea en los alimentos que consumes, la
                    administracion de
                    tus recursos (tiempo y dinero), el cuidado del medio ambiente y para evitar cualquier
                    adiccion.

                </p>



            </div>

        </div>
        <br>
    </div>


    <br>

    <div class="row">
        <div class="col-sm my-auto">
            <div class="card-block" align="center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6vqqscfR95Q" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
        </div>
    </div>
    </div>
    <br>
    <!-- Contact -->
    <div class="contact" id="contact">
        <div class="container">

            <h3>Contactanos</h3>
            <div class="heading-underline"></div>

            <form class="contact_form">

                <div class="message">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 grid_6 c1">
                            <input type="text" class="text" placeholder="Nombre" required="">
                            <input type="text" class="text" placeholder="Email" required="">
                            <input type="text" class="text" placeholder="Celular" required="">
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