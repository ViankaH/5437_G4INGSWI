<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión  y Registro - Mis Delicias</title>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos_login.css">
    
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h1>Mis Delicias</h1>
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h1>Mis Delicias</h1>
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario" required="">
                        <input type="password" placeholder="Contraseña" name="contraseña" required="">
                        <button>Ingresar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuarios.php" method="POST" class="formulario__register" id="formulario">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre" required="" pattern="[a-zA-Z ]{2,254}">
                        <input type="email" placeholder="Correo Electronico" name="correo" required="" >
                        <input type="text" placeholder="Dirección Entrega" name="direccion" required="">
                        <input type="text" placeholder="Usuario" name="usuario" required="">
                        <input type="password" placeholder="Contraseña" name="contraseña" required="" >
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>