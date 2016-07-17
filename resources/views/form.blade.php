<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />

        <!--css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="https://use.fontawesome.com/5e5d208601.js"></script>
        <link rel="stylesheet" href="css/form.css">

        <!--background-->


    </head>
    <body>
        <header>

            <div class="header-config">
                            <!--HEADER-->
                <div class="logo">Github Score <i class="fa fa-code" aria-hidden="true"></i></div>            
                <nav class="animated slideInRight">
                    <a href="./">Inicio</a>
                    <a href="./ranking">Ranking <i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                    <a href="http://rogerdudler.github.io/git-guide/index.es.html">Guía Git</a>
                    <a href="https://github.com">Github</a>
                </nav>
            </div>
        </header>

        <section>

            <div class="col-md-6 col-md-offset-3 container">

                <!--TITULO-->
                <h1 class="title"><i class="fa fa-shield" aria-hidden="true"></i> Github Score & Battle</h1>

                <!--FORMULARIO-->
                <form action="./" method="post" name="frm">    
                <i class="fa fa-user icon" aria-hidden="true"></i>
                <input placeholder="Primer Usuario" type="text" name="username" required/>
                <br /><br />
                <i class="fa fa-user icon" aria-hidden="true"></i>
                <input placeholder="Segundo Usuario" type="text" name="username2" required/>
                <br /><br />
                <input class="botom" type="submit" name="Enviar" value="Listo!" class="boton"/>
                </form>
                <br>
                <div class="info">
                    <p>Puedes insertar dos usuarios de GitHub para que batallen sin piedad</p>
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
