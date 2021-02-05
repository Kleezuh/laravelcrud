<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
     
        .body{
        height: 100vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        }
        .divlogin{
        padding-top: 15px;
        align-items: center;
        margin-bottom: 20px;
        background-color: #fff;
        border: 2px solid #A9A9A9;
        border-radius: 10px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }
        .imglogin {
            width: 150px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .login {
            margin-left: 38%;
            margin-top: 8%;
        }

    </style>
</head>
<body>
    @yield('content')
    <script src="{{url('assets/bootstrap/js/javascript.js')}}"></script>
</body>

</html>

