<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{url('admin/dist/css/style.css')}}" />
</head>
<body>

    <!-- Page Wrapper -->
    <div class="lgn-background" style="background-image: url(uploads/slider-law-1.jpg);">
        <div class="lgn-wrapper">
            <div class="lgn-logo text-center">
                <a><img src="images/logo-white.png" alt=""></a>
            </div>
            <div id="login-form" class="lgn-form ">
                <form class="form-vertical">
                    @csrf
                    <div class="lgn-input form-group">
                        <label class="control-label col-sm-12">Nombre de Usuario</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" name="username" id="lgn-mail" placeholder="Enter your Username" autocomplete="off">
                        </div>
                    </div>
                    <div class="lgn-input form-group">
                        <label class="control-label col-sm-12">Contraseña</label>
                        <div class="col-sm-12">
                            <input type="password" name="password" id="lgn-pass" class="form-control" placeholder="Enter your Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="lgn-forgot">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="lgn-submit">
                        <button type="submit" id="lgn-submit" class="btn btn-primary btn-pill btn-lg" name="login">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include js files -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{url('admin/assets/plugin/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- Popper Plugin -->
    <script type="text/javascript" src="{{url('admin/assets/plugin/popper/popper.min.js')}}"></script>
    <!-- Bootstrap Framework -->
    <script type="text/javascript" src="{{url('admin/assets/plugin/bootstrap/bootstrap.min.js')}}"></script>
</body>
</html>


