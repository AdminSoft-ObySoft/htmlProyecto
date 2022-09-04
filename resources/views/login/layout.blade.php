<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="" method="POST">
                @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Usuario" placeholder="usuario" name="username" value="{{ old('username') }}" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                   
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Contraseña" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="logCheck" id="logCheck" disabled hidden>
                            <label for="logCheck" class="text" hidden>Remember</label>
                        </div>
                        <a href="recuperar-contraseña" class="text">Recuperar contraseña</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Iniciar sesión">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">¿Aun no tienes una cuenta?</span>
                    <a href="/inicio2" class="text signup-link">Registrate ahora</a>
                </div>
            </div>
            <!-- <div class="form signup">
                <span class="title">Registration</span>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Nombre" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Apellido paterno" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Apellido materno" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Numero de cédula" required>
                        <i class="uil uil-card-atm icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Usuario" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Correo institucional" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Contraseña" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirmar contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Login Now">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Ya tienes una cuenta?</span>
                    <a href="#" class="text login-link">Registrar</a>
                </div>
            </div> -->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>