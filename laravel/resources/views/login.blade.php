@extends('templates.template')

@section('content')
<div class="body bg-dark">
<div class="divlogin col-md-3 col-md-offset-3">
        <div class="" style="text-shadow: 15px 3px 11px rgba(37, 37, 37, 0.25);">
            <div class="panel-heading" style="background-color: #ffffff; text-align:center">
                <img src="http://gaia.tel.inf.br:9000/gaia/assets/images/login.svg" class="imglogin">
            </div>
            <div style="padding: 20px;">

                <h1 class="panel-title text-center">Login</h1><br>

                <form action="" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Usuário" name="login" type="text" autofocus="" value="">
                        </div><br>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                        </div><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark" name="btn-entrar"> Entrar </button>
                            <a href="./auth/registro.php">
                                <button type="button" class="btn btn-primary"> Nao tenho cadastro </button>
                            </a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection