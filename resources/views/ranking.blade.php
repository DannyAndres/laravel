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

        <section>

            <div class="table-color">
                    <div class="col-md-10 col-md-offset-1">
                        <table class="table text-center table-bordered table-border">
                            <thead>
                                    <tr>
                                        <th><h3 class="pacifico">_.Ranking._</h3></th>
                                        <th><h3 class="pacifico">_.Username._</h3></th>
                                        <th><h3 class="pacifico">__.Name.__</h3></th>
                                        <th><h3 class="pacifico">_.Score._</h3></th>
                                    </tr>
                            </thead>
                            <tbody>
                                     @for score as scoreData
                                        <tr>
                                            <td><p>{{ $ranking }}</p></td>
                                            <td><p>{{score.getUserlogin}}</p></td>
                                            {% if score.getUsername %}
                                                <td><p>{{score.getUsername}}</p></td>
                                            {% else %}
                                                <td><p>Sin nombre</p></td>
                                            {% endif %}
                                            <td><p>{{score.getScore}}</p></td>
                                            {%set ranking = ranking + 1%}
                                        </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
            </div>

        </section>

        <footer>
        </footer>

    </body>
</html>
