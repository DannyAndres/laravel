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

                        <div class="langs">
                            <a href="ranking"><span>All</span></a>
                            @foreach ($langs as $lang)
                                <a href="ranking/{{ $lang->lang }}"><span>{{ $lang->lang }}</span></a>
                            @endforeach
                        </div><br>

                        <table class="table">
                            <tr>
                                <td>Pos.</td>
                                <td>Name</td>
                                <td>Repo Name</td>
                                <td>Languaje</td>
                                <td>Stars</td>
                                <td>Score</td>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td></td>
                                    <td>{{ $user->name }}</td>
                                    <td><a href="https://github.com/{{ $user->repository->url }}" >{{ $user->repository->url }}</a></td>
                                    <td>{{ $user->repository->lang }}</td>
                                    <td>{{ $user->repository->stars }}</td>
                                    <td>{{ $user->score }}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $users->links() }}
                    </div>
            </div>

        </section>

        <footer>
        </footer>

    </body>
</html>
