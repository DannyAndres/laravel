<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" /

        <!--css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">

    </head>
    <body>
        <header>

            <div class="header-config">
                            <!--HEADER-->
                <div class="logo">Github Score</div>            
                <nav class="animated slideInRight">
                    <a href="./"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                    <a href="./ranking"><i class="fa fa-star-half-o" aria-hidden="true"></i> Ranking</a>
                    <a href="http://rogerdudler.github.io/git-guide/index.es.html">
                    <i class="fa fa-github-alt" aria-hidden="true"></i> Guía Git</a>
                    <a href="https://github.com">
                    <i class="fa fa-github" aria-hidden="true"></i> Github</a>
                </nav>
            </div>
        </header>

        <section>

            <div class="col-md-6 col-md-offset-3 container">

                <!--TITULO-->
                <h1 class="title">Github Score & Battle <i class="fa fa-shield" aria-hidden="true"></i> </h1>

                <!--FORMULARIO-->
                <form action="./score" method="post" name="frm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                <i class="fa fa-user icon" aria-hidden="true"> 1er Usuario </i>
                <input type="text" name="username"/>
                <br /><br />
                <i class="fa fa-user icon" aria-hidden="true"> 2do Usuario</i>
                <input type="text" name="username2"/>
                <br /><br />
                <input class="botom" type="submit" name="Enviar" value="Listo!" class="boton"/>
                </form>
                <br>
                <div class="info poiret">
                    <p>Puedes ingresar dos usuarios de GitHub para que batallen sin piedad</p>
                    <p>el puntaje ganador se basara en una ponderación de los eventos</p>
                    <h4>mientras más eventos, mas puntaje</h4>
                    <h2>a programar! <i class="fa fa-smile-o" aria-hidden="true"></i></h2>
                </div>
                <!--ERROR DE USUARIO-->
                <?php $error=false ?>
                @if ( $error )
                <hr>
                <div class='alert alert-danger animated fadeInDown'>
                    Ingresa un nombre de usuario válido
                </div>
                @endif
            </div>
            
        </section>

        <footer>
        </footer>

    </body>
</html>
