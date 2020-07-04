<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 400px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
</style>
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('cadastro.user.do') }}" method="post">
                        @csrf
                        <h3 class="text-center text-info">Cadastro de novo usuário</h3>
                        <div class="form-group">
                            <label for="name" class="text-info">Nome:</label><br>
                            <input type="text" name=name id=name" class="form-control" value="Alexandre schielke">
                        </div>
                        <div class="form-group">
                            <label for="uemail" class="text-info">Email:</label><br>
                            <input type="text" name="email" id="email" class="form-control" value="alexandre@code.com.br">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control"  value="Master(777)#">
                        </div>
                        <div class="form-group">
                            {{--                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>--}}
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Criar usuário">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
