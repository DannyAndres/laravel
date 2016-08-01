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
        <!--<script src="https://use.fontawesome.com/5e5d208601.js"></script>-->
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

        <section>

           <div class="col-md-10 col-md-offset-1 color-text">
                <!--FIRSTUSER-->
                <div class="col-md-3">
                    <img class="avatar" width="246" heigth="184" src='{{ $user1->getUseravatar }}'>
                    <br />
                    <div class="poiret">
                        @ if ($user1->getUsername)
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Nombre: {{ $user1->getUsername }}</h4>
                        @ else
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Usuario no tiene nombre</h4>
                        @ endif
                        <h4><i class="fa fa-user-secret" aria-hidden="true"></i> Usuario: {{ $user1->getUserlogin }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Seguidores: {{ $user1->getUserfollowers }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Siguiendo: {{ $user1->getUserfollowing }}</h4>
                        <h4><i class="fa fa-star" aria-hidden="true"></i> Estrellas: {{ $repo->showStars }}</h4>
                        <h4><i class="fa fa-desktop" aria-hidden="true"></i> Creado en: <br> {{ $user1->getUsercreated }}</h4>
                        <h4><i class="fa fa-refresh" aria-hidden="true"></i> Ultima Actualización: <br> {{ $user1->getUserupdated }}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="sans">Github Score</h2>
                    <div class="sans">
                        <h4><i class="fa fa-flag-o" aria-hidden="true"></i> Puntaje Total: {{ $finalScore1 }}</h4>
                    </div>
                    <h2 class="sans">Eventos</h2>
                    <div class="poiret">
                        <h4>PushEvent: {{ $events->showEventsPush }}</h4>
                        <h4>CreateEvent: {{ $events->showEventsCreate }}</h4>
                        <h4>IssueEvent: {{ $events->showEventsIssues }}</h4>
                        <h4>CommitCommentEvent: {{ $events->showEventsCommit }}</h4>
                        <h4>Otros: {{ $events->showEventsOther }}</h4>
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
                        <h4>PushEvent: {{ $events2->showEventsPush }}</h4>
                        <h4>CreateEvent: {{ $events2->showEventsCreate }}</h4>
                        <h4>IssueEvent: {{ $events2->showEventsIssues }}</h4>
                        <h4>CommitCommentEvent: {{ $events2->showEventsCommit }}</h4>
                        <h4>Otros: {{ $events2->showEventsOther }}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="avatar" width="246" heigth="184" src='{{ user2.getUseravatar }}'>
                    <br />
                    <div class="poiret">
                        @ if ($user2->getUsername)
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Nombre: {{ $user2->getUsername }}</h4>
                        @ else
                        <h4><i class="fa fa-user" aria-hidden="true"></i> Usuario no tiene nombre</h4>
                        @ endif
                        <h4><i class="fa fa-user-secret" aria-hidden="true"></i> Usuario: {{ $user2->getUserlogin }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Seguidores: {{ $user2->getUserfollowers }}</h4>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i> Siguiendo: {{ $user2->getUserfollowing }}</h4>
                        <h4><i class="fa fa-star" aria-hidden="true"></i> Estrellas: {{ $repo2->showStars }}</h4>
                        <h4><i class="fa fa-desktop" aria-hidden="true"></i> Creado en: <br> {{ $user2->getUsercreated }}</h4>
                        <h4><i class="fa fa-refresh" aria-hidden="true"></i> Ultima Actualización: <br> {{ $user2->getUserupdated }}</h4>
                    </div>
                </div>
            </div>

            <div class="winner-user-text pacifico">
                <!--WINNER-->
                @ if ($finalScore1 > $finalScore2) 
                <h1>El ganador es: <br>
                @ if ($user1->getUsername)
                    {{ $user1->getUsername }}
                @ else
                    {{ $user1->getUserlogin }}
                @ endif
                </h1>
                &nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                @ elseif finalScore1 == finalScore2
                <h1>EMPATE!!!!!</h1>
                &nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-scissors-o" aria-hidden="true"></i>
                @ else
                <h1>El ganador es: <br>
                @ if ($user2->getUsername)
                    {{ $user2->getUsername }}
                @ else
                    {{ $user2->getUserlogin }}
                @ endif
                </h1>
                &nbsp&nbsp&nbsp<i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> <i class="fa fa-hand-rock-o" aria-hidden="true"></i>
            </div>    

        </section>

        <footer>
        </footer>

    </body>
</html>
