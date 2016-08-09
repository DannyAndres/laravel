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
       <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="css/form.css">

        <!--background-->


    </head>
    <body>
        <header>

            <div class="header-config">
                            <!--HEADER-->
                <div class="logo">Ranking <i class="fa fa-line-chart" aria-hidden="true"></i></div>            
                <nav class="animated slideInRight">
                    <a href="./">Inicio</a>
                    <a href="./ranking">Ranking <i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                    <a href="http://rogerdudler.github.io/git-guide/index.es.html">Guía Git</a>
                    <a href="https://github.com">Github</a>
                </nav>
            </div>
        </header>

        <section id="score">

           <div class="col-md-10 col-md-offset-1 color-text">
                <!--FIRSTUSER-->
                <div class="col-md-3">
                    <img class="avatar" width="246" heigth="184" src='{{ $image1 }}'>
                    <br />
                    <div class="poiret">
                        @if ($username1)
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Nombre: {{ $username1 }}</h4>
                        @else
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Usuario no tiene nombre</h4>
                        @endif
                        <h4><i class="fa fa-user-secret" aria-hidden="true"></i> Usuario: {{ $login1 }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Seguidores: {{ $followers1 }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Siguiendo: {{ $following1 }}</h4>
                        <h4><i class="fa fa-star" aria-hidden="true"></i> Estrellas: {{ $stars1 }}</h4>
                        <h4><i class="fa fa-desktop" aria-hidden="true"></i> Creado en: <br> {{ $created1 }}</h4>
                        <h4><i class="fa fa-refresh" aria-hidden="true"></i> Ultima Actualización: <br> {{ $updated1 }}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="sans">Github Score</h2>
                    <div class="sans">
                        <h4><i class="fa fa-flag-o" aria-hidden="true"></i> Puntaje Total: {{ $finalScore1 }}</h4>
                    </div>
                    <h2 class="sans">Eventos</h2>
                    <div class="poiret">
                        <h4>PushEvent: {{ $push1 }}</h4>
                        <h4>CreateEvent: {{ $create1 }}</h4>
                        <h4>IssueEvent: {{ $issues1 }}</h4>
                        <h4>CommitCommentEvent: {{ $commit1 }}</h4>
                        <h4>Otros: {{ $other1 }}</h4>
                    </div>
                </div>

                <!--SECONDUSER-->
                <div class="col-md-3">
                    <h2 class="sans">Github Score</h2>
                    <div class="sans">
                        <h4><i class="fa fa-flag-o" aria-hidden="true"></i> Puntaje Total: {{ $finalScore2 }}</h4>
                    </div>
                    <h2 class="sans">Eventos</h2>
                    <div class="poiret">
                        <h4>PushEvent: {{ $push2 }}</h4>
                        <h4>CreateEvent: {{ $create2 }}</h4>
                        <h4>IssueEvent: {{ $issues2 }}</h4>
                        <h4>CommitCommentEvent: {{ $commit2 }}</h4>
                        <h4>Otros: {{ $other2 }}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="avatar" width="246" heigth="184" src='{{ $image2 }}'>
                    <br />
                    <div class="poiret">
                        @if ($username2)
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Nombre: {{ $username2 }}</h4>
                        @else
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Usuario no tiene nombre</h4>
                        @endif
                        <h4><i class="fa fa-user-secret" aria-hidden="true"></i> Usuario: {{ $login2 }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Seguidores: {{ $followers2 }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Siguiendo: {{ $following2 }}</h4>
                        <h4><i class="fa fa-star" aria-hidden="true"></i> Estrellas: {{ $stars2 }}</h4>
                        <h4><i class="fa fa-desktop" aria-hidden="true"></i> Creado en: <br> {{ $created2 }}</h4>
                        <h4><i class="fa fa-refresh" aria-hidden="true"></i> Ultima Actualización: <br> {{ $updated2 }}</h4>
                    </div>
                </div>
            </div>

            <div class="winner-user-text pacifico">
                <!--WINNER-->
                @if (($finalScore1 > $finalScore2) and ($username1))
                    <h1>El ganador es: <br>
                        {{ $username1 }}
                    </h1>&nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-paper-o" aria-hidden="true"></i>

                @elseif ($finalScore1 > $finalScore2)
                    <h1>El ganador es: <br>
                        {{ $login1 }}
                    </h1>&nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-paper-o" aria-hidden="true"></i>

                @elseif ($finalScore1 == $finalScore2)
                <h1>EMPATE!!!!!</h1>&nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-scissors-o" aria-hidden="true"></i>

                 @elseif (($finalScore1 < $finalScore2) and ($username2))
                    <h1>El ganador es: <br>
                        {{ $username2 }}
                    </h1>&nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-rock-o" aria-hidden="true"></i>

                @elseif ($finalScore1 < $finalScore2)
                    <h1>El ganador es: <br>
                        {{ $login2 }}
                </h1>&nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-rock-o" aria-hidden="true"></i>

                @endif
                    
            </div>    

        </section>

        <footer>
        </footer>

    </body>
</html>
