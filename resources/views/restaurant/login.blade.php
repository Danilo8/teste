<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Search Food - Delivery">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Search Food - Delivery</title>

        <!--Icon-->
        <link rel="shortcut icon" href="{{asset('img/icon/SF.ico')}}" type="image/x-icon">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--cdn Bootstrap JS files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--Fa Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        body{background:url('{{asset('img/bg/bg-login-1.jpg')}}')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body style="font-family: 'Open Sans', sans-serif;">
         @include('templates.navbar')

        <div style="float: right;height: 87.8vh;" class="col-5 bg-light">
            <div class="p-5">
                <h3 class="text-center">Assece o Painel Administrativo</h3>
                <p class="mt-4">Ainda não tem uma conta? <a class="text-danger" href="{{url('/restaurante/cadastro')}}">Crie uma Aqui!</a></p>
                <form class="mt-4" action="" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input class="form-control" type="email" name="senha" id="senha" placeholder="Senha">
                    </div>
                    <div class="form-group text-center">
                        <a class="text-danger" href="#">
                            <i class="fa fa-lock"></i>
                            Recuperar minha Senha
                        </a>
                    </div>
                    <button type="button" class="btn btn-block btn-lg btn-primary">
                        Entrar
                    </button>
                </form>
            </div>
        </div>

        <!--JavaScrips files-->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>